<?php

namespace App\Http\Controllers\API;

use App\Models\movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class MovieController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = movie::orderBy('title', 'asc')->with(['actor', 'trailer', 'director'])->get();
        foreach($movies as $movie) {
            $movie->movie_cover_picture = $this->getS3URL($movie->movie_cover_picture);
        }
        return $this->sendResponse($movies, 'Movies');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'movie_cover_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $movie = new movie;

        if ($request->hasFile('movie_cover_picture')) {
            $extension = request()->file('movie_cover_picture')->getClientOriginalExtension();
            $image_name = time() .'_movie_cover.' . $extension;
            $path = $request->file('movie_cover_picture')->storeAs(
                'images',
                $image_name,
                's3'
            );
            Storage::disk('s3')->setVisibility($path, "public");
            if(!$path) {
                return $this->sendError($path, 'Movie cover failed to upload.');
            }

            $movie->movie_cover_picture = $path;
        }

        $movie->title = $request['title'];
        $movie->description = $request['description'];

        $movie->save();

        if(isset($movie->movie_cover_picture)){
            $movie->movie_cover_picture = $this->getS3Url($movie->movie_cover_picture);
        }

        $success['movie'] = $movie;
        return $this->sendResponse($success, 'Movie successfully updated.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $movie = movie::findOrFail($id);
        $movie->title = $request['title'];
        $movie->description = $request['description'];
        $movie->save();

        if(isset($movie->movie_cover_picture)){
            $movie->movie_cover_picture = $this->getS3Url($movie->movie_cover_picture);
        }

        $success['movie'] = $movie;
        return $this->sendResponse($success, 'Movie successfully updated.');
    }


    public function updateMoviePicture(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'movie_cover_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $movie = movie::findOrFail($id);

        if ($request->hasFile('movie_cover_picture')) {
            $extension = request()->file('movie_cover_picture')->getClientOriginalExtension();
            $image_name = time() .'_movie_cover.' . $extension;
            $path = $request->file('movie_cover_picture')->storeAs(
                'images',
                $image_name,
                's3'
            );
            Storage::disk('s3')->setVisibility($path, "public");
            if(!$path) {
                return $this->sendError($path, 'Movie cover failed to upload.');
            }

            $movie->movie_cover_picture = $path;
        }

        $movie->save();

        if(isset($movie->movie_cover_picture)){
            $movie->movie_cover_picture = $this->getS3Url($movie->movie_cover_picture);
        }

        $success['movie'] = $movie;
        return $this->sendResponse($success, 'Movie picture successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = movie::findOrFail($id);
        Storage::disk('s3')->delete($movie->movie_cover_picture);
        $movie->delete();

        $success['movie']['id'] = $id;
        return $this->sendResponse($success, 'Movie Deleted');
    }
}
