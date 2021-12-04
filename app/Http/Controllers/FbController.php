<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class FbController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookSignin()
    {
        try {
    
            $user = Socialite::driver('facebook')->user();
            $facebookId = User::where('facebook_id', $user->id)->first();
     
            if($facebookId){
                Auth::login($facebookId);
                return redirect('http://127.0.0.1:8000/');
            }else{
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                   'provider_id'=> $user->id,
                    'provider'=> 'facebook',
                    'password' => encrypt('my-facebok')
                ]);
    
                Auth::login($createUser);
                return view('Frontend.master');
            }
    
        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}

