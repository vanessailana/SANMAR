<?php

namespace App\Http\Controllers;
use Session;
use Redirect;

use Illuminate\Http\Request;
use App\Accounts;
use View;
use Input;

class AccountController extends Controller
{
    public function index()
    {
        // get all the nerds
        $nerds = Accounts::all();

        // load the view and pass the nerds
        return View::make('payments.index')
            ->with('nerds', $nerds);
    } 

        public function create()
    {
        // load the create form (app/views/nerds/create.blade.php)
        return View::make('payments.create');
    } 

     public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        
            $nerd = new Accounts;
            $nerd->property       = Input::get('property');


            $nerd->company      = Input::get('company');
            $nerd->rents_to_collect = Input::get('rents_to_collect');

             $nerd->January       = Input::get('January');


             $nerd->February       = Input::get('February');

              $nerd->March      = Input::get('March');

              $nerd->April      = Input::get('April');

                $nerd->May      = Input::get('May');


                $nerd->June    = Input::get('June');

                $nerd->July    = Input::get('July');

                 $nerd->August  = Input::get('August');

                 $nerd->September  = Input::get('September');

                 $nerd->October = Input::get('October');

                 $nerd->November  = Input::get('November');
                 $nerd->December  = Input::get('December');




            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully created an account');
            return Redirect::to('accounts');
        }

         public function edit($id)
    {
        // get the nerd
        $nerd = Accounts::find($id);

        // show the edit form and pass the nerd
        return View::make('payments.edit')
            ->with('nerd', $nerd);
    }

    public function update($id) {

            $nerd = Accounts::find($id);
              $nerd = new Accounts;
             
           $nerd->property       = Input::get('property');


            $nerd->company      = Input::get('company');
            $nerd->rents_to_collect = Input::get('rents_to_collect');

             $nerd->January       = Input::get('January');


             $nerd->February       = Input::get('February');

              $nerd->March      = Input::get('March');

              $nerd->April      = Input::get('April');

                $nerd->May      = Input::get('May');


                $nerd->June    = Input::get('June');

                $nerd->July    = Input::get('July');

                 $nerd->August  = Input::get('August');

                 $nerd->September  = Input::get('September');

                 $nerd->October = Input::get('October');

                 $nerd->November  = Input::get('November');
                 $nerd->December  = Input::get('December');




            $nerd->save();

            // redirect
            Session::flash('message', 'Successfully updated');
            return Redirect::to('accounts');
        }

          public function destroy($id)
    {
        // delete
        $nerd = Accounts::find($id);
        $nerd->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the Entry');
        return Redirect::to('accounts');
    }

    }

    //
