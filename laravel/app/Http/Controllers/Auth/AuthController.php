<?php

namespace App\Http\Controllers\Auth;

use DB;

use Hash;

use App\Tagg;

use URL;
use Redirect;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logOut']);
    }

    

    //for the log in redirect to the route bellow.
    protected $loginPath = 'account/signIn';


    //routes.
    public function getIndex(){

        $title = 'Home.';

        return View('accounts.index')
        ->with('title', $title);
    }

    //create users' account.
    public function createAccount(){

        $title = 'Create Account.';

        return View('accounts.createAccount')
        ->with('title', $title);
    }

    //sign in users'
    public function signIn(){

        $title = 'Sign In.';

        return View('accounts.signIn')
        ->with('title', $title);
    }
    
    //register user and send mail to account.
    public function storeAccount(Request $request){

        //in here we are passing in the data gathered from the form
        //using the post method.
        $this->validate($request,[
            'firstname'       => 'required',
            'lastname'        => 'required',
            'badgeNumber'     => 'required|min:10|max:10',
            'emailAddress'    => 'required|email|max:50|unique:users',
            'username'        => 'required|min:6|max:50',
            'password'        => 'required|min:8',
            'confirmPassword' => 'required|same:password|min:8',
        ]);

        //throw errors if field are not validated properly.
        if ($request->fails) {
            # code...
            return Redirect::route('createAccount')
            ->withInput()
            ->withErrors($request);
        }
        else{

            //get all our inputs.
            $firstname     = $request->get('firstname');
            $lastname      = $request->get('lastname');
            $badgeNumber   = $request->get('badgeNumber');
            $emailAddress  = $request->get('emailAddress');
            $username      = $request->get('username');
            $password      = $request->get('password');
            

            //lets generate a random 60 length character code.
            $code = str_random(60);

            $data = User::create([
                'firstname'      => $firstname,
                'lastname'       => $lastname,
                'badgeNumber'    => $badgeNumber,
                'emailAddress'   => $emailAddress,
                'username'       => $username,
                'password'       => hash::make($password),
                'role'           => 0,
                'active'         => 0,
                'code'           => $code,
            ]);

            //automatically create categories profiles..

            //we need to create a mail functionallity so as to send the user a link to the sign in page.
            if ($data) {
                # code...
                Mail::send('mail.activate', ['link'=> URL::route('activateAccount', $code), 'username'=> $username], function($message) use ($data) {
                    $message-> to($data->emailAddress, $data->username) ->subject('Activate your Account.');       
                });

                //re direct accordingly.
                return Redirect::route('home')
                ->with('global', '<p style="font:16px book antiqua; width:410px; margin-top:90px; text-align:center" class="alert alert-info alert-dismissible pull-right" role="alert">' . 'Profile Created' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
            }

            //just incase.
            return Redirect::route('account-signIn')
            ->with('global', '<p style="font:16px arial; width:410px; margin-top:90px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'Your Profile has not been created.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
        }

    }  

    //activate the account/profile.
    public function activateAccount($code){

        $data = User::where('code','=',$code)-> where('active','=',0);

        if ($data-> count()) {
            # code...
            $data = $data-> first();

            $data ->code   ='';
            $data ->active = 1;

            if ($data-> save()) {
                # code...
                //we reroute our user to the sign in route.
                return Redirect::route('signIn')
                -> with('global', '<p style="font:16px arial; width:410px; margin-top:90px; text-align:center" class="alert alert-info alert-dismissible pull-right" role="alert">' . 'Your account has been Activated.Sign in.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
            }
        }

        //error message incase the above was unsuccessful.
        return Redirect::route('home')
                -> with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'We couldn\'t for some reason activate your account.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
    }

    //sign in.
    public function postSignIn(Request $request){

        $this->validate($request,[
            'emailAddress'    => 'required|email',
            'password'        => 'required|min:8',
        ]);

        //throw errors if field are not validated properly.
        if ($request->fails) {
            # code...
            return Redirect::route('signIn')
            ->withInput()
            ->withErrors($request);
        }

        //login the user.
        if (!Auth::attempt($request->only(['emailAddress', 'password']))) {
            # code...
            return Redirect::route('signIn')
            -> with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'Ensure you\'ve provided correct Email and or Password' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');               
        }
        else{

            $test = Auth::user()->username;

            $active = Auth::user()->active;

            $role = Auth::user()->role;

            if ($role == 1) {
                # code...
                return Redirect::to('admin/dashboard')
                -> with('global', '<p style="font:16px arial; width:470px; margin-top:80px; text-align:center" class="alert alert-success alert-dismissible pull-right" role="alert">' . 'Welcome Admin.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
            }
            elseif ($role == 0) {
                # code...
                return Redirect::to('profile/'. Auth::user()->id)
                -> with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-success alert-dismissible pull-right" role="alert">' . 'You are now logged in.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
            }           
        }
    }

    //log the user out.
    public function logOut(){

        //log out this user.
        auth()->logout();

        //redirect accordingly.
        return Redirect::to('account/signIn')
        -> with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-info alert-dismissible pull-right" role="alert">' . 'You are now logged out.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
    }
}
