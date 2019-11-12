<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Job;
use App\User;

class JobController extends Controller
{
    public function jobList(Request $request)
    {
        $content = Job::orderBy('updated_at', 'desc')->paginate(6);
        return view('front.pages.job.index')->with(['title'=>'CSR Jobs', 'content'=>$content]);
    }
    
    public function login(Request $request)
    {
        return view('front.login');
    }
    
    public function loginAccess(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
        try 
        {
            $credentials = array('email' => $request->input('email'), 'password' => $request->input('password'));
            
            if (Auth::attempt($credentials)) {
                
                //return redirect()->route('user.dashboard');
                return redirect()->route('updateProfile',['user_id'=>base64_encode(\Auth::user()->id)]);
            }
            
            $message = array(
                'flag' => 'alert-danger',
                'message' => 'Invalid username or password.'
            );
            
            $request->session()->flash('message', $message);            
            return redirect()->back()->withInput($request->only('email', 'remember'));
        }
        catch (Exception $e)        
        {
            return back();
        }
        
    }


    public function register(Request $request)
    {
        try {
                
            $rs = User::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'email' => $request->input('email'),
                'password' => \Hash::make($request->input('password')),
                'user_type' => 4
            ]);

            if($rs)
            {


                return back()->with('message', "Registration successfull");

            }

            return back()->with('message', "Unable to register");

        } catch (Exception $e) {
            \Log::error($e->getMessage());
            return back();
        }
    }
    
    public function saveProfile(Request $request)
    {
        if($request->ajax())
        {
            try 
            {
                $userId = Auth::user()->id;


                $name = $request->input('name');
                $location = $request->input('location');

                $rs = User::where('id', $userId)->update(['name'=>$request->input('name')]);
                $rs = User::where('id', $userId)->update(['location'=>$request->input('location')]);

                if($rs) return response()->json(['message'=>'Update Sucessfully']);
                return response()->json(['message'=>'Updated Failed']);
            } 
            catch (Exception $e) {
                \Log::error($e->getMessage());
            }
        }
        return;
    }


    public function saveProfile1(Request $request)
    {
        if($request->ajax())
        {
            try 
            {
                $userId = Auth::user()->id;

                $expyear = $request->input('expyear');
                $avail = $request->input('avail');
                $citizen = $request->input('citizen');
                $language = $request->input('language');

                $rs = User::where('id', $userId)->update(['expyear'=>$request->input('expyear')]);
                $rs = User::where('id', $userId)->update(['avail'=>$request->input('avail')]);
                $rs = User::where('id', $userId)->update(['citizen'=>$request->input('citizen')]);
                $rs = User::where('id', $userId)->update(['language'=>$request->input('language')]);
                
                if($rs) return response()->json(['message'=>'Update Sucessfully']);
                return response()->json(['message'=>'Updated Failed']);
            } 
            catch (Exception $e) {
                \Log::error($e->getMessage());
            }
        }
        return;
    }


    public function saveProfile2(Request $request)
    {
        if($request->ajax())
        {
            try 
            {
                $userId = Auth::user()->id;

                $skills = $request->input('skills');
                $expertise = $request->input('expertise');

                $rs = User::where('id', $userId)->update(['skills'=>$request->input('skills')]);
                $rs = User::where('id', $userId)->update(['expertise'=>$request->input('expertise')]);
                
                if($rs) return response()->json(['message'=>'Update Sucessfully']);
                return response()->json(['message'=>'Updated Failed']);
            } 
            catch (Exception $e) {
                \Log::error($e->getMessage());
            }
        }
        return;
    }


    public function saveProfile3(Request $request)
    {
        if($request->ajax())
        {
            try 
            {
                $userId = Auth::user()->id;

                $email = $request->input('email');
                $contact = $request->input('contact');

                $rs = User::where('id', $userId)->update(['email'=>$request->input('email')]);
                $rs = User::where('id', $userId)->update(['contact'=>$request->input('contact')]);
                
                if($rs) return response()->json(['message'=>'Update Sucessfully']);
                return response()->json(['message'=>'Updated Failed']);
            } 
            catch (Exception $e) {
                \Log::error($e->getMessage());
            }
        }
        return;
    }


    public function saveProfile4(Request $request)
    {
        if($request->ajax())
        {
            try 
            {
                $userId = Auth::user()->id;

                $referrer = $request->input('referrer');

                $rs = User::where('id', $userId)->update(['referrer'=>$request->input('referrer')]);
                
                if($rs) return response()->json(['message'=>'Update Sucessfully']);
                return response()->json(['message'=>'Updated Failed']);
            } 
            catch (Exception $e) {
                \Log::error($e->getMessage());
            }
        }
        return;
    }




    public function updateImage(Request $request)
    {
        if($request->ajax())
        {
            try 
            {                
                if($request->hasFile('user-image'))
                {
                    $userId = Auth::user()->id;
                    $file = $request->file('user-image');
   
                    //Move Uploaded File
                    $destinationPath = 'uploads';
                    $file->move($destinationPath, $file->getClientOriginalName());

                    $rs = User::where('id', $userId)->update(['user_image'=> $file->getClientOriginalName()]);

                    if($rs) return response()->json(['message'=>'Update Sucessfully']);
                    return response()->json(['message'=>'Updated Failed']);
                }

            } 
            catch (Exception $e) {
                \Log::error($e->getMessage());
            }
        }
    }


    public function dashboard()
    {
        return view('front.dashboard');
    }
}
