<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\PropInfo;
use View;
use Session;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class PropertyInfo extends Controller {

   
  public function index()
    {
        // get all the nerds
        $nerds = PropInfo::all();

        // load the view and pass the nerds
        return View::make('property.index')
            ->with('nerds', $nerds);
    }

      public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('property.create');
    }
       public function store()
    {
            $table->string('property');
    $table->string('unit');
    $table->string('unit_type');
    $table->string('SF');
    $table->string('Currentrent');
    $table->string('lease_starts');
    $table->string('lease_termination');
    $table->string('increases');
    $table->string('expenses');
    $table->string('remarks');

        $rules = array(
            'property'       => 'required',
            'unit'       => 'required',
            'unit_type'       => 'required',
            'SF'       => 'required',
            'Currentrent'  => 'required',
             'lease_starts'  => 'required',
             'lease_termination'  => 'required',
              'increases'  => 'required',
              'expenses'  => 'required',
              'remarks'  => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('property/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = new PropInfo;
             $nerd->property = Input::get('property');

             $nerd->unit       = Input::get('unit');


             $nerd->unit_type       = Input::get('unit_type');


            $nerd->SF      = Input::get('SF');
            $nerd->Currentrent = Input::get('Currentrent');
            $nerd->lease_starts = Input::get('lease_starts');
            $nerd->lease_termination = Input::get('lease_termination');

            $nerd->increases = Input::get('increases');

            $nerd->expenses = Input::get('expenses');

            $nerd->remarks = Input::get('remarks');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully added Information About a Property!');
            return Redirect::to('property');
        }
    }

     public function edit($id)
    {
        // get the nerd
        $nerd = PropInfo::find($id);

        // show the edit form and pass the nerd
        return View::make('property.edit')
            ->with('nerd', $nerd);
    }
     public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
       $rules = array(
            'property'       => 'required',
            'unit'       => 'required',
            'unit_type'       => 'required',
            'SF'       => 'required',
            'Currentrent'  => 'required',
             'lease_starts'  => 'required',
             'lease_termination'  => 'required',
              'increases'  => 'required',
              'expenses'  => 'required',
              'remarks'  => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('property/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = PropInfo::find($id);
            $nerd = new PropInfo;
             $nerd->property = Input::get('property');

             $nerd->unit       = Input::get('unit');


             $nerd->unit_type       = Input::get('unit_type');


            $nerd->SF      = Input::get('SF');
            $nerd->Currentrent = Input::get('Currentrent');
            $nerd->lease_starts = Input::get('lease_starts');
            $nerd->lease_termination = Input::get('lease_termination');

            $nerd->increases = Input::get('increases');

            $nerd->expenses = Input::get('expenses');

            $nerd->remarks = Input::get('remarks');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated!');
            return Redirect::to('property');
        }
    }

    public function destroy($id) {
    	$nerd=PropInfo::find($id);
    	$nerd->delete();

    Session::flash('message', 'Successfully deleted the Tenant!');
        return Redirect::to('tenant');
    }

}