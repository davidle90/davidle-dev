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
        $resumePath = 'resumes/CV David Le.pdf';

        if (Storage::disk('public')->exists($resumePath)) {
            return Storage::disk('public')->download($resumePath);
        } else {
            abort(404);
        }
    }
}
