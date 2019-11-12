<?php

namespace App\Http\Controllers\Admin;

use App\Video;
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


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Video::orderBy('created_at', 'desc')->get();       
        return view('admin.pages.video.index')->with(['title'=>'Video List', 'content'=>$content]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.video.create')->with(['title' => 'Add Video', 
           'action'=> route('auth.video.store')
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'video_title'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {

        if($request->video->getClientOriginalName()){
            $ext = $request->video->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->video->storeAs('public/video',$file);
          }
          else
          {
            $file='';
          }

           
           $rs = Video::create([
                'video_title' => $request->input('video_title'), 
                'video' => $file
            ]);
           
           if($rs)
           {
               $message = array('flag'=>'alert-success', 'message'=>'New Video Added Successfully');
               return redirect()->route('auth.video.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to add new job, Please try again');
           return redirect()->route('auth.video.index')->with(['message'=>$message]); 
           
       } 
       catch (Exception $e) 
       {
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
       }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($videoId)
    {
        try
        {
           // Get Temporary jon with job id
           
           $videoData = Video::where('id', $videoId)->get();
           
           if($videoData->isEmpty())
           {
               $message = array('flag'=>'alert-danger', 'message'=>'No video found with provided id');
               return back()->with(['message'=>$message]);
           }
           
           return view('admin.pages.video.edit')->with(['videoData'=>$videoData->first(),
               'title'=>'Edit Video', 'action'=>route('auth.video.update', $videoId)
           ]);
           
       }
       catch (Exception $e)
       {
           Log::error($e);
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
           
           
       }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $videoId)
    {
        $request->validate([
           'video_title'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {

        if($request->video->getClientOriginalName()){
            $ext = $request->video->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->video->storeAs('public/video',$file);
          }
          else
          {
            $file='';
          }
           
           $data = [
               'video_title' => $request->input('video_title'),
               'video' => $file
           ];   

           $rs = Video::where(['id'=> $videoId])->update($data);       
           
           if($rs){
               $message = array('flag'=>'alert-success', 'message'=>'Job Updated Successfully');
               return redirect()->route('auth.video.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to update new job, Please try again');
           return redirect()->route('auth.video.index')->with(['message'=>$message]); 
       } 
       catch (Exception $e) 
       {
           $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
           return back()->with(['message'=>$message]);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
