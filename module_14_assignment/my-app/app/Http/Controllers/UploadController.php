<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $originalFilename = $file->getClientOriginalName();
            $file->move(public_path('uploads'), $originalFilename);

            // Additional logic or database storage here

            return 'File uploaded successfully.';
        }

        return 'No file uploaded.';
    }
}
