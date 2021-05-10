<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request){
        $file =  $request->file('file');
        dd($file);
        $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) ;
        $fileExtension = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION) ;

        $encryptedFileName = md5($fileName);
        $file->storeAs('user-1', $encryptedFileName.'.'.$fileExtension, 'avatar');

    }
}
