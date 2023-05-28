<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    

    public function upload(Request $request)
    {



        // return $request->all();

    	if (!is_null($request['file'])) 
    	{
            $folderName = $request['description'];
    		$file = $request['file'];
		    $file->storeAs($folderName, $file, 'public'); 

		    return 'success';

		}

		return 'false';


    }

    
}
