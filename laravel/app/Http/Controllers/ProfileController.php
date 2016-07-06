<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Input;

use Auth;

use DB;

use Redirect;

use App\Chase;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    
    public function getProfile($id) {
        
        //show profile by id.
        $user =  User::find($id);

        $title = 'Profile';

        return View('profile.profile', compact('user'))
        ->with('title', $title);
    }

    //uploads form.
    public function getUploads($id) {

        //find the user by id.
        $user = User::find($id);

        $title = 'Cases.';

        return View('profile.uploads', compact('user'))
        ->with('title', $title);
    }

    //store the uploads
    public function storeUploads(Request $request, $id) {

        //in here we are passing in the data gathered from the form
        //using the post method.
        $this->validate($request,[
            'firstname' => 'required',
            'lastname'  => 'required',
            'idNumber'  => 'required|unique:cases',
            'case'      => 'required',
            'station'   => 'required'
        ]);

        //throw errors if field are not validated properly.
        if ($request->fails) {
            # code...
            return Redirect::route('uploads', $id)
            ->withInput()
            ->withErrors($request);
        }

        $firstname = $request->get('firstname');
        $lastname  = $request->get('lastname');
        $idNumber  = $request->get('idNumber');
        $case      = $request->get('case');
        $station   = $request->get('station');

        //get all our inputs.
        $data = new Chase([
            
               'firstname' => $firstname,
               'lastname' => $lastname,
               'idNumber' => $idNumber,
               'case'     => $case,
               'station'  => $station 
            ]);
        
        $user = User::find($id);

        $user->getChase()->save($data);                    
        

        if ($user) {
            # code...
            //we reroute our user to the sign in route.
            return Redirect::route('profile-account',$id)
            -> with('global', '<p style="font:16px arial; width:410px; margin-top:80px; text-align:center" class="alert alert-info alert-dismissible pull-right" role="alert">' . 'A new Case has been registered.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
        }
        else{

            //we reroute our user to the sign in route.
            return Redirect::route('uploads', $id)
            -> with('global', '<p style="font:16px arial; width:410px; margin-top:80px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'An Error Occurred.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
        }
    }
}
