<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Storage;
class fileUploadController extends Controller
{
    public function showFrom()
    {
    	return view('upload.savefile');
    }

    public function storeFile(request $request)
    {
    	if($request->hasFile('img'))
    	{
    		$filename = $request->img->getClientOriginalName();
	    	$filesize = $request->img->getClientSize();
	    	$request->img->storeAs('public',$filename);
	    	$file = new File;
	    	$file->name = $filename;
	    	$file->size = $filesize;
	    	$file->save();
	    	return "save";
    	}
    	else
    	{
    		return "no";
    	}
    	
    }

    public function storeMultFile(request $request)
    {
        //return $request->all();
        if($request->hasFile('img'))
        {
            foreach ($request->img as $img) {
                $filename =$img->getClientOriginalName();
                $filesize =$img->getClientSize();
                //return $filename;
                $img->storeAs('public',$filename);
                $fileModel = new File;
                $fileModel->name = $filename;
                $fileModel->size = $filesize;
                $fileModel->save();
                //return $filename;
            }
            
            return "save";
        }
        else
        {
            return "no";
        }
        
    }
}
