<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller {
	public function index() {
		$users = DB::table('users')->count();
		$jobs = DB::table('jobs')->count();
		$advertisements = DB::table('advertisements')->count();
		$applications = DB::table('applications')->count();
		return view('admin.pages.dashboard')->with(['users' => $users, 'jobs' => $jobs, 'applications' => $applications, 'advertisements' => $advertisements]);
	}

	public function change_password() {
		return view('admin.pages.auth.change_password')->with(['title' => 'Change Password']);
	}

	public function update_password(Request $request) {
		$loggedInUser = Auth::guard('admin')->user();

		$request->validate([
			'old_password' => 'required',
			'new_password' => 'required',
			're_new_password' => 'required',

		]);

		$oldpass = $request->input('old_password');
		$newpass = $request->input('new_password');
		$renewpass = $request->input('re_new_password');

		if (!Hash::check($oldpass, $loggedInUser['password'])) {
			$message = array('flag' => 'alert-danger', 'message' => 'Your old password does not match with our records !!!');
			$request->session()->flash('message', $message);
			return redirect()->route('admin.password.change');
		}

		if ($newpass != $renewpass) {
			$message = array('flag' => 'alert-danger', 'message' => 'Password and confirm password does not match, please check !!!');
			$request->session()->flash('message', $message);
			return redirect()->route('admin.password.change');
		}

		$newpass = Hash::make($newpass);
		DB::enableQueryLog();
		$rs = Admin::where(['_id' => $loggedInUser['_id']])->update(['password' => $newpass]);

		if ($rs) {
			$message = array('flag' => 'alert-success', 'message' => 'Password changed successfully !!!');
			$request->session()->flash('message', $message);
			return redirect()->route('admin.password.change');
		} else {
			$message = array('flag' => 'alert-danger', 'message' => 'OOPS ! Please try again later !!!');
			$request->session()->flash('message', $message);
			return redirect()->route('admin.password.change');
		}
	}
}
