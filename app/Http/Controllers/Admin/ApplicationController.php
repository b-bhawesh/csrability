<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = Application::orderBy('created_at', 'desc')->get();       
        return view('admin.pages.application.index')->with(['title'=>'Application List', 'content'=>$content]);
    }
}
