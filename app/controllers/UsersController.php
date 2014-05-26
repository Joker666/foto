<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function getLogin()
	{
        return View::make('account.login');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function login()
	{
        $validator = Validator::make(Input::all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return Redirect::route('login')
                ->withErrors($validator)
                ->withInput();
        } else{
            $remember = (Input::has('remember')) ? true : false;

            if(Auth::attempt([
                'email' => Input::get('email'),
                'password' => Input::get('password'),
                'active' => 1
            ], $remember)){
                return Redirect::route('home')
                    ->with('successMessage', 'You are signed in');
            } else{
                return Redirect::route('login')
                    ->with('noticeMessage', 'Please use email : john@doe.com | password : johndoe');
            }
        }
	}

    public function logOut(){
        Auth::logout();
        return Redirect::route('login')
            ->with('noticeMessage', 'You are signed out');
    }

	/**
	 * Display the specified resource.
	 * GET /users/{id}
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
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}