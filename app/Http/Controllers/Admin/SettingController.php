<?php

namespace App\Http\Controllers\Admin;

use Goutte\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use App\City;
use App\Country;
use App\State;
use App\TempJob;
use Carbon\Carbon;

class SettingController extends Controller
{
    private $client;
    
    public function __construct()
    {
        $this->client = new Client();
    }
    
    public function index()
    {
        $jobs = TempJob::orderBy('created_at', 'desc')->get();
        return view('admin.pages.setting.job_scrape')->with(['title'=>'Scrape Jobs', 'jobs'=>$jobs]);
    }
    
    public function startScrapping()
    {
        try 
        {
            $crawler = $this->client->request('GET', 'https://themimu.info/jobs-for-internationals');
            
            $temp = array();
            $temp = $crawler->filter('table#datatable-1 tbody tr')->each(function ($node) use ($crawler) {
                
                $out = array();
                
                $x = explode("\n", trim($node->text(), ' '));
                
                $out['data'] = $x;
                $out['data']['job_description'] = $crawler->selectLink('Download')->link()->getUri();
                
                return $out;
            });
                        
            $push = array();
            foreach($temp as $t) array_push($push, array_values(array_filter($t['data'])));
            //dd($push); die;
            // Insert the record to database
            $flag = false;
            foreach ($push as $p)
            {
                $publishDate = Carbon::parse($p[10])->format('Y-m-d');
                TempJob::create([
                    'source' => 'https://themimu.info/jobs-for-internationals', 
                    'job_title'  => $p[0], 
                    'job_description'  => $p[13], 
                    'job_location' => $p[4], 
                    'organization' => $p[6], 
                    'publish_date' => Carbon::parse($p[8])->format('Y-m-d'), 
                    'closing_date' => Carbon::parse($p[10])->format('Y-m-d'),
                    'comments' => ''
                ]);
                
                $flag = true;
            }
            
            if($flag)
            {
                $message = array('flag'=>'alert-success', 'message'=>'Data Scrapped Successfully');
                return redirect()->route('auth.setting.scrape-job')->with(['message'=>$message]);
            }
            
            $message = array('flag'=>'alert-danger', 'message'=>'Unable to scrape data, Please try again');
            return redirect()->route('auth.setting.scrape-job')->with(['message'=>$message]); 
        } 
        catch (Exception $e) 
        {
            Log::error($e); 
        }
        
    }
    
    public function editTempJob(Request $request, $jobId)
    {
        try 
        {
            // Get Temporary jon with job id
            
            $jobData = TempJob::where('id', $jobId)->get();
            
            if($jobData->isEmpty())
            {
                $message = array('flag'=>'alert-danger', 'message'=>'No job found with provided id');
                return back()->with(['message'=>$message]);
            }
            
            $cities = City::all();
            $states = State::all();
            $countries = Country::all();
            return view('admin.pages.job.edit')->with(['jobData'=>$jobData->first(), 
                'title'=>'Edit Job', 'action'=>route('auth.job.update', $jobId),
                'cities'=> $cities, 'states'=>$states, 'countries'=>$countries,
                'tempJob' => 1
            ]);
            
        } 
        catch (Exception $e) 
        {
            Log::error($e);
            $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
            return back()->with(['message'=>$message]);
            
            
        }
    }
    
    
    
}
