<?php

class LogboekAdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $logboek = Logboek::all()->last();

        View::share('entries', $logboek->entry()->getResults());
        View::share('logboek', $logboek);
		return View::make('logboek.admin.index');
	}


    public function stub(){

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $types = EntryType::all();
        $typesArray = array();
        foreach($types as $type){
            $typesArray[$type->id] = $type->naam;
        }
        View::share('types', $typesArray);
        return View::make('logboek.admin.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'omschrijving'    => 'required',
            'tijd'    => 'required',
            'datum' => 'required',
            'entrytype' => 'required'
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('admin/logboek/create')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::all()); // send back the input so that we can repopulate the form
        } else {
            $logboek = Logboek::all()->last();

            $entryType = EntryType::find(Input::get('entrytype'));

            $entry = new Entry();
            $entry->omschrijving = Input::get('omschrijving');
            $entry->datum = Input::get('datum');
            $entry->tijd = Input::get('tijd');
            $entry->entryType()->associate($entryType);
            $entry->logboek()->associate($logboek);
            $entry->save();

            return Redirect::to('admin/logboek');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
