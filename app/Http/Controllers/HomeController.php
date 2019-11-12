<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInterest;
use App\Video;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.pages.home.index')->with(['title'=>'Home CSR']);
    }

    public function update(Request $request)
    {
    	try 
    	{
    		$interest = $request->input('interest_area');

			$rs = false;
    		foreach ($interest as $key => $value) {
    			$rs= UserInterest::create([
	    			'user_id' => \Auth::user()->id, 
	    			'interest_area' =>  $value,
                    'interest_selected' =>  '1'
	    		]);
    		}

    		if($rs) return back()->with('message', 'Details saved successfully');
    		return back()->with('message', 'Unable to save details');


    	} 
    	catch (Exception $e) 
    	{
    		\Log::error($e->getMessage());
    		return back()->with('message', $e->getMessage());	
    	}

    }

    public function showVideo(Request $request)
    {
        $content = Video::paginate(6);
        // dd($content);
        return view('front.pages.home.index',array('title'=>'Home', 'content'=>$content));
    }
}
