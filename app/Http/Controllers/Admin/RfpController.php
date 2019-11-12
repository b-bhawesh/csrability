<?php

namespace App\Http\Controllers\Admin;

use App\Rfp;
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

class RfpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Rfp::orderBy('created_at', 'desc')->get();       
        return view('admin.pages.rfp.index')->with(['title'=>'RFP List', 'content'=>$content]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
       return view('admin.pages.rfp.create')->with(['title' => 'Add Rfp', 
           'action'=> route('auth.rfp.store')
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
           'rfp_title'=>'required',
           'rfp_description'=>'required',
           'publish_date'=>'required',
           'closing_date'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {
          if($request->company_image->getClientOriginalName()){
            $ext = $request->company_image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->company_image->storeAs('public/rfp-company-logo',$file);
          }
          else
          {
            $file='';
          }


          if($request->attachment->getClientOriginalName()){
            $ext = $request->attachment->getClientOriginalExtension();
            $file1 = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->attachment->storeAs('public/rfp-attachment',$file1);
          }
          else
          {
            $file1='';
          }
           
//            $result = $this->uploadImage($request, 'company_image', 'company_image');
//            if($result['flag'] == 1) $companyImage = $result['image_name'];
                      
//            $result = $this->uploadImage($request, 'attachment', 'attachment');
//            if($result['flag'] == 1) $attachment = $result['image_name'];
           
           $rs = Rfp::create([
                'rfp_title' => $request->input('rfp_title'), 
                'rfp_description' => $request->input('rfp_description'), 
                'publish_date' => Carbon::parse($request->input('publish_date'))->format('Y-m-d'), 
                'closing_date' => Carbon::parse($request->input('closing_date'))->format('Y-m-d'), 
                'company_image' => $file,
                'organisation' => $request->input('organisation'),  
                'attachment' => $file1, 
                'posted_by' => $userId
            ]);
           
           if($rs)
           {
               $message = array('flag'=>'alert-success', 'message'=>'New Rfp Added Successfully');
               return redirect()->route('auth.rfp.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to add new job, Please try again');
           return redirect()->route('auth.rfp.index')->with(['message'=>$message]); 
           
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
    public function edit(Request $request, $rfpId)
    {
        try
       {
           // Get Temporary jon with job id
           
           $rfpData = Rfp::where('id', $rfpId)->get();
           
           if($rfpData->isEmpty())
           {
               $message = array('flag'=>'alert-danger', 'message'=>'No rfp found with provided id');
               return back()->with(['message'=>$message]);
           }
           
           return view('admin.pages.rfp.edit')->with(['rfpData'=>$rfpData->first(),
               'title'=>'Edit Rfp', 'action'=>route('auth.rfp.update', $rfpId)
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
    public function update(Request $request, $rfpId)
    {
        $request->validate([
           'rfp_title'=>'required',
           'rfp_description'=>'required',
           'publish_date'=>'required',
           'closing_date'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {
          if($request->company_image->getClientOriginalName()){
            $ext = $request->company_image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->company_image->storeAs('public/rfp-company-logo',$file);
          }
          else
          {
            $file='';
          }


          if($request->attachment->getClientOriginalName()){
            $ext = $request->attachment->getClientOriginalExtension();
            $file1 = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->attachment->storeAs('public/rfp-attachment',$file1);
          }
          else
          {
            $file1='';
          }
           
           $data = [
               'rfp_title' => $request->input('rfp_title'),
               'rfp_description' => $request->input('rfp_description'),
               'publish_date' => Carbon::parse($request->input('publish_date'))->format('Y-m-d'),
               'closing_date' => Carbon::parse($request->input('closing_date'))->format('Y-m-d'),
               'company_image' => $file,
               'organisation' => $request->input('organisation'),
               'attachment' => $file1,
               'posted_by' => $userId
           ];          
           
           if($rs){
               $message = array('flag'=>'alert-success', 'message'=>'Job Updated Successfully');
               return redirect()->route('auth.rfp.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to update new job, Please try again');
           return redirect()->route('auth.rfp.index')->with(['message'=>$message]); 
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
