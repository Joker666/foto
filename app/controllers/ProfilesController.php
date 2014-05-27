<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /photos
	 *
	 * @return Response
	 */
	public function index()
	{
        $user = Auth::user();
        $user->load('photos');
        return View::make('profile.index')->with('photos', $user->photos);
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /photos/create
	 *
	 * @return Response
	 */
	public function getUpload()
	{
        return View::make('profile.upload');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /photos
	 *
	 * @return Response
	 */
	public function upload($userID)
	{

        $photo = new Photo;
        $user = User::find($userID);

        $image = Input::file('file');
        $assetPath = '/uploads/' . $user->username . '/';
        $destinationPath = public_path($assetPath);
        $thumbnailPath = $destinationPath. '/thumbnails/';
        $filename = date('Y-m-d-H-i-s-') . $image->getClientOriginalName();
        //make new directory for storing images intervention fault -_-
        if(!is_dir($destinationPath)){
            File::makeDirectory($destinationPath, 0777, true);
            //mkdir($destinationPath, 0777, true);
        }
        if(!is_dir($thumbnailPath)){
            File::makeDirectory($thumbnailPath, 0777, true);
            //mkdir($destinationPath. '/thumbnails/', 0777, true);
        }
        //Thumbnail Generation
        Image::make($image->getRealPath())
             ->resize(120, null, function ($constraint) {
                    $constraint->aspectRatio();
             })->save($destinationPath. '/thumbnails/' .$filename);


        $photo->image = $filename;
        $photo->user_id = $userID;
        $upload_success = $image->move($destinationPath, $filename);

        if( $upload_success ) {
            $photo->save();
            return Response::json('success', 200);
        } else {
            return Response::json('error', 400);
        }

    }

	/**
	 * Display the specified resource.
	 * GET /photos/{id}
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
	 * GET /photos/{id}/edit
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
	 * PUT /photos/{id}
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
	 * DELETE /photos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $upload_dir = public_path().'/uploads/' . Auth::user()->username . '/';
        $thumbnail_dir = public_path().'/uploads/' . Auth::user()->username . '/thumbnails/';
		$photo = Photo::find($id);
        File::delete($upload_dir . $photo->image);
        File::delete($thumbnail_dir . $photo->image);
        if (count(glob($thumbnail_dir . '*')) === 0 ) {
            File::deleteDirectory($thumbnail_dir);
        }
        if (count(glob($upload_dir . '*')) === 0 ) {
            File::deleteDirectory($upload_dir);
        }
        $photo->delete();
        return Redirect::back();
	}

}