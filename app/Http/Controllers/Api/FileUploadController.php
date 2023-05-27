<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    

    public function upload(Request $request)
    {

    	if ($request->hasFile('file')) 
    	{
            $folderName = $request->description;
    		$file = $request->file;
    		$name = $file->getClientOriginalName();
            $filename = pathinfo($name, PATHINFO_FILENAME);
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $filepath = $filename . '.' . strtolower($extension);
		    $file->storeAs($folderName, $filepath, 'public'); 

		    return 'success';

		}

		return 'false';


    }

    
}
