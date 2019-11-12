<?php

namespace App\Http\Controllers\Admin;

use App\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;
use App\City;
use App\State;
use App\Country;
use Carbon\Carbon;
use App\JobSector;
use App\Helper\FileUploader\FileUploader;


class JobController extends Controller
{
   public function index()
   {
       $content = Job::orderBy('created_at', 'desc')->get();       
       return view('admin.pages.job.index')->with(['title'=>'Job List', 'content'=>$content]);
   }
   
   public function create()
   {
       $cities = City::all();
       $states = State::all();
       $countries = Country::all();
       
       return view('admin.pages.job.create')->with(['title' => 'Add Job', 
           'action'=> route('auth.job.store'),
           'cities'=> $cities, 'states'=>$states, 'countries'=>$countries
       ]);
   }
   
   public function store(Request $request)
   {
       $request->validate([
           'job_title'=>'required',
           'job_description'=>'required',
           'publish_date'=>'required',
           'closing_date'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {
           $companyImage = ''; $attachment = '';
           
//            $result = $this->uploadImage($request, 'company_image', 'company_image');
//            if($result['flag'] == 1) $companyImage = $result['image_name'];
                      
//            $result = $this->uploadImage($request, 'attachment', 'attachment');
//            if($result['flag'] == 1) $attachment = $result['image_name'];
           
           $rs = Job::create([
                'job_title' => $request->input('job_title'), 
                'job_description' => $request->input('job_description'), 
                'publish_date' => Carbon::parse($request->input('publish_date'))->format('Y-m-d'), 
                'closing_date' => Carbon::parse($request->input('closing_date'))->format('Y-m-d'), 
                'company_image' => $companyImage,
                'organisation_type' => $request->input('organisation_type'), 
                'organisation' => $request->input('organisation'), 
                'country' => $request->input('country'), 
                'state' => $request->input('state'), 
                'city' => $request->input('city'), 
                'attachment' => $attachment, 
                'posted_by' => $userId
            ]); 
           
           if($request->input('sectors'))
           {
               foreach ($request->input('sectors') as $r)
               {
                   JobSector::create([
                       'sector_id' => $r, 
                       'job_id' => $rs->id
                   ]);
               }
           }
           
           if($rs)
           {
               $message = array('flag'=>'alert-success', 'message'=>'New Job Added Successfully');
               return redirect()->route('auth.job.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to add new job, Please try again');
           return redirect()->route('auth.job.index')->with(['message'=>$message]); 
           
       } 
       catch (Exception $e) 
       {
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
       }
   }
   
   public function edit(Request $request, $jobId)
   {
       try
       {
           // Get Temporary jon with job id
           
           $jobData = Job::where('id', $jobId)->with('sectors')->get();
           
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
               'tempJob' => 0
           ]);
           
       }
       catch (Exception $e)
       {
           Log::error($e);
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
           
           
       }
   }
   
   public function update(Request $request, $jobId)
   {
       $request->validate([
           'job_title'=>'required',
           'job_description'=>'required',
           'publish_date'=>'required',
           'closing_date'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {
           $companyImage = ''; $attachment = '';
           
           $data = [
               'job_title' => $request->input('job_title'),
               'job_description' => $request->input('job_description'),
               'publish_date' => Carbon::parse($request->input('publish_date'))->format('Y-m-d'),
               'closing_date' => Carbon::parse($request->input('closing_date'))->format('Y-m-d'),
               'company_image' => $companyImage,
               'organisation_type' => $request->input('organisation_type'),
               'organisation' => $request->input('organisation'),
               'country' => $request->input('country'),
               'state' => $request->input('state'),
               'city' => $request->input('city'),
               'attachment' => $attachment,
               'posted_by' => $userId
           ];
           
           $rs = null;
           if($request->input('temp_job') == 1){
               $rs = Job::updateOrCreate(['temp_job_id'=> $jobId], $data);
           }
           else{
               $rs = Job::where(['id'=> $jobId])->update($data);
           }
           
           if($rs){
               $message = array('flag'=>'alert-success', 'message'=>'Job Updated Successfully');
               return redirect()->route('auth.job.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to update new job, Please try again');
           return redirect()->route('auth.job.index')->with(['message'=>$message]); 
       } 
       catch (Exception $e) 
       {
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
       }
   }
   
   
   private  function uploadImage(Request $request, $key, $dest)
   {
       if($request->hasFile($key) && $request->file($key)->isValid())
       {
           $file = $request->file($key);
           
           $uploader = new FileUploader();
           
           $image = $uploader->upload($file, public_path("assets/uploads/$dest"));                      
           
           $imageName = $uploader->getImageName();
           
           return array('flag'=> 0, 'message'=>'Image uploaded successfully', 'image_name'=>$imageName);
       }
       
       return array('flag'=> 0, 'message'=>'OOPS !!! Something went wrong, please try again later');
   }
   
}
