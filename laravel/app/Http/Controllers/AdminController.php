<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Cat;

use DB;

use Response;

use Redirect;

use Input;

use Auth;

use App\Http\Controllers\Controller;

class AdminController extends Controller {
    
    public function getDashboard() {

        //get all the users'
        $user = DB::table('users')->get();

        //admin dashboard.
        $title = 'Dashboard.';

        return View('admin.dashboard', compact('user'))
        ->with('title', $title);
    }

    //assign roles.
    public function getRoles(){

        //get all users'
        $user = User::all();

    	$title = 'Roles.';

    	return View('admin.roles', compact('user'))
    	->with('title',$title);
    }

    //delete users
    public function destroyUser($id){

        //Ensure that an admin cannot delete self.
        $user = User::find($id);

        DB::table('users')
        ->where('id', $id)
        ->delete();
            
        return Redirect::route('dashboard')
        ->with('global', '<p style="font:bold 16px arial; width:470px; margin-top:80px; text-align:center" class="alert alert-danger alert-dismissible pull-right" role="alert">' . 'You have Deleted a user' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
    }

    //change roles.
    public function getUser(Request $request, $id){

        $user = User::find($id);

        $title = 'User.';

        return View('admin.user', compact('user'))
        ->with('title', $title);
    }

    //store these roles.
    public function storeRoles(Request $request, $id){

        $this->validate($request,[
            'role'       => 'required',
        ]);

        //throw errors if field are not validated properly.
        if ($request->fails) {
            # code...
            return Redirect::route('changeRoles')
            ->withInput()
            ->withErrors($request);
        }

        $user = User::find($id);

        $role = Input::get('role');

        $user = DB::table('users')
            ->where('id', $id)
            ->update(['role' => $role]);

        //re route accordingly.
        return Redirect::route('dashboard')
        ->with('global', '<p style="font:16px arial; width:410px; margin-top:80px; text-align:center" class="alert alert-success alert-dismissible pull-right" role="alert">' . 'User\'s Role Updated.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
        
    }

    //create categories.
    public function getCat($id){

        //get the user's id.
        $user = User::find($id);

        $title = 'Categories.';

        return View('admin.cat', compact('user'))
        ->with('title',$title);
    }

    //store cats.
    public function storeCats(Request $request, $id){

        foreach(Input::file('motors') as $file){

            foreach(Input::file('cycles') as $file){
    
                $rules = array(
                    'motors' => 'required|image|max:5000',
                    'cycles' => 'required|image|max:5000'
                );

                $validator = \Validator::make(
                    array(
                    'motors' =>$file, 
                    'cycles' =>$file), 
                $rules);
                
                if($validator->passes()){
                    

                    $ext = $file->guessClientExtension(); // (Based on mime type)

                    //$ext = $file->getClientOriginalExtension(); // (Based on filename)
                    $filename = $file->getClientOriginalName();

                    $storagePath = 'uploads/' . Auth::user()->id .'/motors'. $filename;

                    $file->move($storagePath, $filename);
                    
                    //DATABASE..
                    $photo = new Cat([
                        'motors' => '/uploads/' . Auth::user()->id .'/motors/'. $filename.'/' .$filename,
                        'cycles' => '/uploads/' . Auth::user()->id .'/cycles/'. $filename.'/' .$filename,
                        ]);

                    $user = User::find($id);

                    $user = $user->getCat()->save($photo);

                    //redirect
                    return Redirect::route('dashboard')
                    ->with('global', '<p style="font:16px arial; width:470px; margin-top:90px; text-align:center" class="alert alert-success alert-dismissible pull-right" role="alert">' . 'Category Upload successful.' . '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . '</p>');
                }
                else{
                    # code...
                    return Redirect::route('category', $id)
                    ->withInput()
                    ->withErrors($validator);
                }
            }
        }
    }
}
