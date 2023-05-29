<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    

    public function upload(Request $request)
    {



      if($request->has('file')){
        dd('sdf');
         $main = $request->file('file');
            $fileName = microtime() . '.' . $main->getClientOriginalExtension();
            $img = Image::make($main->getRealPath());
            $img->resize(400, 400);
            $img->stream();
            Storage::disk('local')->put( $fileName, $img, 'public');
            // $blog->image_path = "/storage/blogs/" . $fileName;
        }



        return $request->all();

  //   	if (!is_null($request['file'])) 
  //   	{
  //           $folderName = $request['description'];
  //   		$file = $request['file'];
		//     $file->storeAs($folderName, $file, 'public'); 

		//     return 'success';

		// }

		// return 'false';


    }

    
}
