<?php

namespace App\Http\Controllers\Admin;

use App\Advertisement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Advertisement::orderBy('created_at', 'desc')->get();       
        return view('admin.pages.advertisement.index')->with(['title'=>'Advertisement List', 'content'=>$content]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('admin.pages.advertisement.create')->with(['title' => 'Add Advertisement', 
           'action'=> route('auth.advertisement.store')
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
           'title'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {
          if($request->image->getClientOriginalName()){
            $ext = $request->image->getClientOriginalExtension();
            $file = date('YmdHis').rand(1,99999).'.'.$ext;     
            $request->image->storeAs('public/advertisement',$file);
          }
          else
          {
            $file='';
          }
           
//            $result = $this->uploadImage($request, 'company_image', 'company_image');
//            if($result['flag'] == 1) $companyImage = $result['image_name'];
                      
//            $result = $this->uploadImage($request, 'attachment', 'attachment');
//            if($result['flag'] == 1) $attachment = $result['image_name'];
           
           $rs = Advertisement::create([
                'title' => $request->input('title'),
                'image' => $file
            ]); 
           
           if($rs)
           {
               $message = array('flag'=>'alert-success', 'message'=>'New Advertisement Added Successfully');
               return redirect()->route('auth.advertisement.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to add new Advertisement, Please try again');
           return redirect()->route('auth.advertisement.index')->with(['message'=>$message]); 
           
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
    public function edit(Request $request, $advertisementId)
    {
       try
       {
           // Get Temporary jon with job id
           
           $advertisementData = Advertisement::where('id', $advertisementId)->get();
           
           if($advertisementData->isEmpty())
           {
               $message = array('flag'=>'alert-danger', 'message'=>'No advertisement found with provided id');
               return back()->with(['message'=>$message]);
           }
           
           return view('admin.pages.advertisement.edit')->with(['advertisementData'=>$advertisementData->first(),
               'title'=>'Edit Advertisement', 'action'=>route('auth.advertisement.update', $advertisementId)
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
    public function update(Request $request, $advertisementId)
    {
        $request->validate([
           'title'=>'required',
       ]);
       
       $userId = Auth::user()->id;
       
       try 
       {
        if(isset($request->image) && $request->image->getClientOriginalName()){
          $ext = $request->image->getClientOriginalExtension();
          $file = date('YmdHis').rand(1,99999).'.'.$ext;     
          $request->image->storeAs('public/advertisement',$file);
        }
        else
        {
            $file='';
        }
           
           $data = [
               'title' => $request->input('title'),
               'image' => $file
           ];
           
           $rs = Advertisement::where(['id'=> $advertisementId])->update($data);
           
           if($rs){
               $message = array('flag'=>'alert-success', 'message'=>'Advertisement Updated Successfully');
               return redirect()->route('auth.advertisement.index')->with(['message'=>$message]);
           }
           
           $message = array('flag'=>'alert-danger', 'message'=>'Unable to update new advertisement, Please try again');
           return redirect()->route('auth.advertisement.index')->with(['message'=>$message]); 
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
