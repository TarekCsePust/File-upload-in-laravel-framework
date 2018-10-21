<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
    public function index()
    {
    	return view('upload.upload');
    }

    public function store(request $request)
    {
    	
    	if($request->hasFile('img'))
    	{
    		$request->file('img');
    		//return $request->img->path();
    		//return $request->img->extension();
    		//return $request->img->store('public');
    		//return Storage::putFile('public/new',$request->file('img'));
            return $request->img->storeAs('public','pic.jpg');
    	}
    	else
    	{
    		return "No file select";
    	}
    }

    public function show()
    {
    	//return Storage::files('public'); get all files without new folder
    	//Storage::makeDirectory('public/make');
    	/*if(Storage::deleteDirectory('public/make'))
    		{
    			return "deleted";
    		}*/
    	//return Storage::allFiles('public');//get all files in public folder
        //return Storage::size('public/pic.jpg');
        //return Storage::lastModified('public/pic.jpg');
        //return Storage::copy('public/pic.jpg','pic.jpg');copy img to app folder 
        //return Storage::move('public/pic.jpg','pic.jpg');move img to app folder 
        /*$rawdata = Storage::get('pic.jpg');
        if(Storage::put('pic2.jpg',$rawdata))
            {
                return "file is created";
            }*/


         /*
        if(Storage::delete('public/pic2.jpg'))
            {
                return "file is deleted";
            }*/

        /*
        if(Storage::delete('public/pic2.jpg','public/pic.jpg'))
            {
                return "both file are deleted";
            }*/
        $url=Storage::url('pic.jpg');
        return $url;
        return "<img src='".$url."' />";
    }

}
