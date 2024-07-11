<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class PublicController extends Controller
{
    public function index()
    {
        return view('pages.public.index');
    }

    public function download_resume()
    {
        $resumePath = 'CV David Le.pdf';

        if (Storage::disk('resumes')->exists($resumePath)) {
            return Storage::disk('resumes')->download($resumePath);
        } else {
            abort(404);
        }
    }
}
