<?php
/*
 * @author Kailash
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;

use Exception;

use App\User;

class UserController extends Controller
{
    public function index()
    {        
        $userId = Auth::user()->id;
        $users = User::where('id', '!=', $userId)->where('is_deleted', 0)
        ->whereNull('google_id')
        ->whereNull('facebook_id')
        ->whereNull('linkedin_id')
        ->get();
              
        $socialUsers = User::where('id', '!=', $userId)->where('is_deleted', 0)
        ->where(function($q){
            $q->orWhereNotNull('google_id');
            $q->orWhereNotNull('facebook_id');
            $q->orWhereNotNull('linkedin_id');
        })        
        ->get();
               
        return view('admin.pages.user.index')->with(['title'=>'User List', 'users'=>$users, 'socialusers'=>$socialUsers]);
    }
    
    
    public function social()
    {
        $userId = Auth::user()->id;
        $users = User::where('id', '!=', $userId)->where('is_deleted', 0)
        ->whereNull('google_id')
        ->whereNull('facebook_id')
        ->whereNull('linkedin_id')
        ->get();
        
        $socialUsers = User::where('id', '!=', $userId)->where('is_deleted', 0)
        ->where(function($q){
            $q->orWhereNotNull('google_id');
            $q->orWhereNotNull('facebook_id');
            $q->orWhereNotNull('linkedin_id');
        })
        ->get();
        
        return view('admin.pages.user.index')->with(['title'=>'User List', 'users'=>$socialUsers, 'socialusers'=>$socialUsers]);
    }
    
    public function create()
    {
        return view('admin.pages.user.create')->with(['title' => 'Add User', 'action'=> route('auth.users.store')]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',            
            'user_type' => 'required'

        ]);
        
        try 
        {
            $rs = User::create([
                'name' =>$request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make('Password@123'), 
                'user_type' => $request->input('user_type')

            ]);
            
            if($rs)
            {
                # Send OTP in email after successful registration
                $data = array();
                
                $data['name'] = $request->input('name');
                $data['email'] = $request->input('email');
                                
                Mail::send('mail.welcome', $data, function ($message) use ($data) {
                    $message->to($data['email']);
                    $message->subject('Welcome to your new CSR membership');
                });
    
                $message = array('flag'=>'alert-success', 'message'=>'User Created Successfully');
                return redirect()->route('auth.users.index')->with(['message'=>$message]);    
            }
            
            $message = array('flag'=>'alert-danger', 'message'=>'Unable to Create User, Please try again');
            return redirect()->route('auth.users.index')->with(['message'=>$message]); 
        }
        catch (Exception $e) 
        {
            $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
            return back()->with(['message'=>$message]);
        }
    }


    public function storeUser(Request $request)
    {
        // dd($request->all());
        try{
        $user=new User;
        $user->name=$request->first_name.''.$request->last_name;
        $user->first_name=$request->first_name;
        $user->last_name=$request->last_name;
        $user->email=$request->email;
        $user->password=Hash::make('Password@123');
        $user->user_type=User::TYPE_MEMBER;
        $user->save();
            $lastId = \DB::getPdo()->lastInsertId();
            $userInfo = $lastId;
                $data = array();
                $data['name'] = $request->first_name.''.$request->last_name;
                $data['email'] = $request->email;
                Mail::send('mail.welcome', $data, function ($message) use ($data) {
                 $message->to($data['email']);
                 $message->subject('Welcome to your new CSR membership');
                });
        return redirect()->route('updateProfile',['user_id'=>base64_encode($userInfo)]);
    }
         catch (Exception $e) {
            $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
            return back()->with(['message'=>$message]);
         }
}
    
    public function delete(Request $request, $userId)
    {
        try 
        {
            //$rs = User::where('id', $userId)->update(['is_deleted'=>1]);
            $rs = User::destroy('id', $userId);
            
            if($rs)
            {
                $message = array('flag'=>'alert-success', 'message'=>'User deleted Successfully');
                return redirect()->route('auth.users.index')->with(['message'=>$message]);
            }
            
            $message = array('flag'=>'alert-danger', 'message'=>'Unable to delete User, Please try again');
            return redirect()->route('auth.users.index')->with(['message'=>$message]); 
        } 
        catch (Exception $e) 
        {
            $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
            return back()->with(['message'=>$message]);
        }   
    }
    
    public function resetPassword(Request $request, $userId)
    {
        try
        {
            $rs = User::where('id', $userId)->update(['password'=>Hash::make('Password@123')]);
            
            if($rs)
            {
                $message = array('flag'=>'alert-success', 'message'=>'User Password Changed to Default Password Successfully');
                return redirect()->route('auth.users.index')->with(['message'=>$message]);
            }
            
            $message = array('flag'=>'alert-danger', 'message'=>'Unable to Change User Password, Please try again');
            return redirect()->route('auth.users.index')->with(['message'=>$message]);
        }
        catch (Exception $e)
        {
            $message = array('flag'=>'alert-danger', 'message'=>$e->getMessage());
            return back()->with(['message'=>$message]);
        }   
    }
}
