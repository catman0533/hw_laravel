<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        $name = $request->input('file_name');
        $file = $request->file('uploaded_file');

        $tempPath = $file->getRealPath();
        $newFileName = $name . '.' . $file->getClientOriginalExtension();

        $file->move('public/uploads', $newFileName);

        $file->move('public/uploads', $newFileName);
        echo $request->header('host') . '/public/uploads/' . $newFileName;

    }
}
