<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class PublicController extends Controller
{
    public function index()
    {
        return view('pages.public.index');
    }
}
