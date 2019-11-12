<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/administrator/schemes';
        
    public function index()
    {
        return view('admin.pages.auth.login');
    }
    
    public function secure_login(Request $request)
    {        
        $this->validate($request, [
            '_username'   => 'required|email',
        ]);
        
        $credentials = array('email' => $request->input('_username'), 'password' => $request->input('_password'));
        
        if (Auth::attempt($credentials)) {
           
            return redirect()->route('auth.dashboard');
        }
                
        $messageArr = array(
            'flag' => 'alert-danger',
            'message' => 'Invalid username or password.'
        );
        
        $request->session()->flash('message', $messageArr);
//         if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    public function forgot_password()
    {
        return view('admin.pages.auth.forgot_password');
    }
    
    public function reset_password($token)
    {
        return view('admin.pages.auth.reset_password');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
