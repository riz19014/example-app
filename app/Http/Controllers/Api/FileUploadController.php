<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    

    public function upload(Request $request)
    {

      if(!empty($request['file']))
      {
            info('sdf');
            $mainFile = $request->file('file');
            $name = $mainFile->getClientOriginalName();
            $filename = pathinfo($name, PATHINFO_FILENAME);
            $extension = pathinfo($name, PATHINFO_EXTENSION);
            $filepath = $filename . '.' . strtolower($extension);
            $mainFile->storeAs($request['description'], $filepath, 'public');
            

            return 'success';
        }

        return 'error';


    }

    
}
