<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Tenant;
use View;
use Session;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class TenantController extends Controller {

   
  public function index()
    {
        // get all the nerds
        $nerds = Tenant::all();

        // load the view and pass the nerds
        return View::make('tenants.index')
            ->with('nerds', $nerds);
    }

      public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('tenants.create');
    }
       public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'tenant_name'       => 'required',
            'tenant_lastname'       => 'required',
            'email'      => 'required|email',
            'phone_number' => 'required',
            'currentlyat'       => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tenants/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = new Tenant;
             $nerd->tenant_name       = Input::get('tenant_name');

             $nerd->tenant_lastname       = Input::get('tenant_lastname');


            $nerd->email      = Input::get('email');
            $nerd->phone_number = Input::get('phone_number');
            $nerd->currentlyat = Input::get('currentlyat');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully created Tenant!');
            return Redirect::to('tenants');
        }
    }

     public function edit($id)
    {
        // get the nerd
        $nerd = Tenant::find($id);

        // show the edit form and pass the nerd
        return View::make('tenants.edit')
            ->with('nerd', $nerd);
    }
     public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'tenant_name'       => 'required',
            'email'      => 'required|email',
              'tenant_lastname'      => 'required',

              'phone_number'      => 'required',

               'currentlyat'      => 'required'
          
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('tenants/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = Tenant::find($id);
            $nerd->tenant_name       = Input::get('tenant_name');
            $nerd-> tenant_lastname = Input::get('tenant_lastname');
            $nerd->phone_number = Input::get('phone_number');
             $nerd->email = Input::get('email');
              $nerd->currentlyat = Input::get('currentlyat');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated Tenant!');
            return Redirect::to('tenants');
        }
    }

    public function destroy($id) {
    	$nerd=Tenant::find($id);
    	$nerd->delete();

    Session::flash('message', 'Successfully deleted the Tenant!');
        return Redirect::to('tenant');
    }

}