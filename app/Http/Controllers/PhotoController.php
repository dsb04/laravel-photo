<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function photo(Request $request)

    {
        $request->photo->storeAs('public', 'file.jpg');
 
        return 'deu certo';

    }

    public function images(Request $request)
    {
        $request->image1->storeAs('public/images', 'file1.jpg');
        $request->image2->storeAs('public/images', 'file2.jpg');
        return 'ok';
    }
    public function document(Request $request)

    {
        $request->file->store('public.documents');

        $request->file->storeAs('public/documents',$request->file->name);
 
        return 'deu certo';

    }
}
