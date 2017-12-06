<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\Leases;
use View;
Use Validator;
use Session;
use Illuminate\Support\Facades\Input;
class LeaseController extends Controller
{

  public function index()
    {
        // get all the nerds
        $nerds = Leases::all();

        // load the view and pass the nerds
        return View::make('leases.index')
            ->with('nerds', $nerds);
    }
    public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('leases.create');
    }
     public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'property'       => 'required',
            'lease_amount'       => 'required',
            'lease_expiration'       => 'required',
            'secruity_deposit'       => 'required',
            'last_month'       => 'required',
            'grace_period'       => 'required',
            'late_payment_fee'       => 'required',
            'next_rental_increase'       => 'required',
            'increase_amount'       => 'required',
            
            
            


        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('leases/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $nerd = new Leases;
            $nerd->property       = Input::get('property');
            $nerd->lease_amount      = Input::get('lease_amount');
            $nerd->lease_expiration = Input::get('lease_expiration');

            $nerd->secruity_deposit = Input::get('secruity_deposit');

            $nerd->last_month = Input::get('last_month');


            $nerd->grace_period = Input::get('grace_period');


            $nerd->late_payment_fee = Input::get('late_payment_fee');


            $nerd->next_rental_increase = Input::get('next_rental_increase');



            $nerd->increase_amount = Input::get('increase_amount');
            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully created!');
            return Redirect::to('leases');
        }
    }
  public function edit($id)
    {
        // get the nerd
        $nerd = Leases::find($id);

        // show the edit form and pass the nerd
        return View::make('leases.edit')
            ->with('nerd', $nerd);
    }

 public function update($id)
    {
    
            $nerd = Leases::find($id);
           $nerd->property = Input::get('property');
           $nerd->lease_amount      = Input::get('lease_amount');
            $nerd->lease_expiration = Input::get('lease_expiration');

            $nerd->secruity_deposit = Input::get('secruity_deposit');

            $nerd->last_month = Input::get('last_month');


            $nerd->grace_period = Input::get('grace_period');


            $nerd->late_payment_fee = Input::get('late_payment_fee');


            $nerd->next_rental_increase = Input::get('next_rental_increase');



            $nerd->increase_amount = Input::get('increase_amount');
            $nerd->save();

            return Redirect::to('leases');
            
       }
              
              
              
              

    
    
       



        public function destroy($id)
    {
        // delete
        $nerd = Leases::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        return Redirect::to('leases');
    }
}

