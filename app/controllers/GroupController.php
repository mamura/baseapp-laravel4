<?php

class GroupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		$data = array(
	        
	    );
		
		return View::make("user/group/index", [
				'title'  		=> 'Grupos',
	        	'description' 	=> 'Grupos de usuários',
	        	'list' 		=> Group::all()
			]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		
		$form = new GroupForm();
    	
    
    	return View::make("user.group.add", [
       		"form" => $form,
       		'title'  		=> 'Grupo',
        	'description' 	=> 'Adicione um novo Grupo de usuários',
    	]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		
		$rules = array(
			'name'	=> 'required'
		);
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			
			return Redirect::route('groups/create')
				->withErrors($validator)
                ->withInput(Input::except('name'));
		} else {

			 Group::create(['name' => Input::get('name')]);

			 return Redirect::route("groups.index");
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
