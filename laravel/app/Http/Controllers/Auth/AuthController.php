<?php namespace App\Http\Controllers\Auth;

use DB;

use App\User;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
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

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}


	/*
	* get the form and submit users' details.
	*/
	public function createAccount(){

		$title = 'Create Account.';

		return View('accounts.createAccount')
        ->with('title', $title);
	}

	public function submitAccount(){

		//in here we are passing in the data gathered from the form
        //using the post method.
        $this->validate($request,[
            'name'     => 'required',
            'username' => 'required|min:6|max:50',
            'password' => 'required|min:8',
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
            $name     = $request->get('name');
            $username = $request->get('username');
            $password = $request->get('password');
            

            //lets generate a random 60 length character code.
            //$code = str_random(60);

            $data = User::create([
                'name'     => $name,
                'username' => $username,
                'password' => hash::make($password)
            ]);

            //re direct accordingly.
            return Redirect::route('createAccount')
            ->with('global', '<p style="font:16px book antiqua; width:410px; margin-top:90px; text-align:center" class="alert alert-info alert-dismissible pull-right" role="alert">' . 'Account Created.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
	
        }
	}

	//handle cases.
	public function createCases(){

		$title = 'Case.';

		return View('accounts.cases')
		->with('title', $title);
	}

	//store cases.
	public function submitCases(){

		//in here we are passing in the data gathered from the form
        //using the post method.
        $this->validate($request,[
            'names'    => 'required',
            'idNumber' => 'required',
            'case'     => 'required',
            'station'  => 'required',
        ]);

        //throw errors if field are not validated properly.
        if ($request->fails) {
            # code...
            return Redirect::route('createCases')
            ->withInput()
            ->withErrors($request);
        }
        else{

            //get all our inputs.
            $names    = $request->get('names');
            $idNumber = $request->get('idNumber');
            $case     = $request->get('case');
            $station  = $request->get('station');

            $data = User::create([
                'names'   => $names,
                'idNumber'=> $idNumber,
                'case'    => $case,
                'station' => $station
            ]);

            //re direct accordingly.
            return Redirect::route('createCases')
            ->with('global', '<p style="font:16px book antiqua; width:410px; margin-top:90px; text-align:center" class="alert alert-info alert-dismissible pull-right" role="alert">' . 'Case Created.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
		}

		//re direct accordingly.
            return Redirect::route('createCases')
            ->with('global', '<p style="font:16px book antiqua; width:410px; margin-top:90px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'No Cases Created.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
	}


	/*
	* fetch data from users' table
	*/
	public function fetchData(){

		//get all the users'
        $user = DB::table('users')->get();

        //admin dashboard.
        $title = 'Fetch.';

        return View('accounts.fetchData', compact('user'))
        ->with('title', $title);
	}

	//fetch cases.
	public function fetchCases(){

		//get all the users'
        $user = DB::table('cases')->get();

        //admin dashboard.
        $title = 'Fetch Cases.';

        return View('accounts.fetchCases', compact('user'))
        ->with('title', $title);
	}
}
