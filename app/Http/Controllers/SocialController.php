<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Log;
use Mail;
use Socialite;

class SocialController extends Controller {
	/* facebook page redirect function */

	public function redirectToFacebook() {

		return Socialite::driver('facebook')->redirect();
		\Log::info('socialite driver error');
	}

/* facebook login user create and check existence of user */

	public function handleFacebookCallback() {
		try
		{
			$user = Socialite::driver('facebook')->stateless()->user();
			$existUser = User::where('email', $user->email)->first();

			if (!empty($existUser)) {
				Auth::loginUsingId($existUser->id);
				$userInfo = $existUser->id;
			} else {

				$userModel = new User;
				$userModel->name = $user->name;
				$getFullName = explode(' ', $user->name);

				$userModel->first_name = $getFullName[0];
				$userModel->last_name = $getFullName[1];
				$userModel->user_type = User::TYPE_MEMBER;
				$userModel->email = $user->email;
				$userModel->user_image = $user->getAvatar();
				$userModel->password = bcrypt('12345678');
				$userModel->facebook_id = $user->getId();
				$createdUser = $userModel->save();
				$lastId = \DB::getPdo()->lastInsertId();
				$userInfo = $lastId;
				if (!is_null($user->email)) {

					$data = array();
					$data['name'] = $user->name;
					$data['email'] = $user->email;

					Mail::send('mail.welcome', $data, function ($message) use ($data) {
						$message->to($data['email']);
						$message->subject('Welcome to your new CSR membership');
					});
				}

				Auth::loginUsingId($lastId);
				return redirect()->route('updateProfile', ['user_id' => base64_encode($userInfo)]);

			}

		} catch (Exception $e) {
			return redirect()->route('user.login');
		}
	}

/* google page redirect function */

	public function redirectToGoogle() {

		return Socialite::driver('google')->redirect();
	}

/* google login user create and check existence of user */
	public function handleGoogleCallback() {

		try {
			$googleUser = Socialite::driver('google')->stateless()->user();
			// dd($googleUser);
			$existUser = User::where('email', $googleUser->email)->first();
			if (!empty($existUser)) {
				Auth::loginUsingId($existUser->id);
				$userInfo = $existUser->id;

				//request()->session()->put('userdata', $existUser);
			} else {
				$user = new User;
				$user->name = $googleUser->name;
				// $user->name = $user->name;
				$getFullName = explode(' ', $googleUser->name);

				$user->first_name = $getFullName[0];
				$user->last_name = $getFullName[1];
				$user->user_type = User::TYPE_MEMBER;
				echo $user->email = $googleUser->email;
				$user->user_image = $googleUser->email;
				$user->google_id = $googleUser->id;
				$user->password = bcrypt('12345678');
				$user->save();
				$lastId = \DB::getPdo()->lastInsertId();
				$userInfo = $lastId;
				if (!is_null($user->email)) {
					$data = array();
					$data['name'] = $user->name;
					$data['email'] = $user->email;
					Mail::send('mail.welcome', $data, function ($message) use ($data) {
						$message->to($data['email']);
						$message->subject('Welcome to your new CSR membership');
					});
				}
				Auth::loginUsingId($lastId);

				//request()->session()->put('userdata', $user);

				//dd(\Auth::user()->id);
				return redirect()->route('updateProfile', ['user_id' => base64_encode($userInfo)]);
			}
		} catch (Exception $e) {
			return redirect()->route('user.login');
		}
	}

	public function redirectToLinkedin() {
		return Socialite::driver('linkedin')->redirect();
	}

	public function handleLinkedinCallback() {
		try
		{

			$users = Socialite::driver('linkedin')->stateless()->user();
			//dd($users);
			$existUser = User::where('email', $users->email)->first();

			if (!empty($existUser)) {
				// Auth::loginUsingId($existUser->id);
				Auth::loginUsingId($existUser->id);
				$userInfo = $existUser->id;

			} else {
				$user = new User;

				$user->name = $users->first_name . '' . $users->last_name;
				$user->first_name = $users->first_name;
				$user->last_name = $users->last_name;
				$user->user_type = User::TYPE_MEMBER;
				$user->email = $users->email;
				$user->user_image = $users->avatar;
				$user->linkedin_id = $users->id;
				$user->password = bcrypt('12345678');
				$user->save();
				$lastId = \DB::getPdo()->lastInsertId();
				$userInfo = $lastId;
				$data = array();
				$data['name'] = $users->first_name . '' . $users->last_name;
				$data['email'] = $users->email;

				Mail::send('mail.welcome', $data, function ($message) use ($data) {
					$message->to($data['email']);
					$message->subject('Welcome to your new CSR membership');
				});
				Auth::loginUsingId($users->id);

			}
			return redirect()->route('updateProfile', ['user_id' => base64_encode($userInfo)]);
		} catch (Exception $e) {
			return redirect()->route('user.login');
		}
	}

	public function updateProfile(Request $request) {
		$id = base64_decode($request->user_id);
		$userInfo = User::with('UserInterest')->where('id', $id)->first();
		$UserInterest = $userInfo['UserInterest'];

		//dd($userInfo,$request->user_id);
		return view('front.updateProfile', compact('userInfo', 'UserInterest'));
	}

}
