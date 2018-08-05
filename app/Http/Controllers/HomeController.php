<?php

namespace App\Http\Controllers;

use App\ClassDay;
use App\Health;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($id = session('purchase')) {
            return redirect(route('purchase'));
        }
        $user = Auth::user();
        $measurements = Auth::user()->healths->sortBy('id');
        return view('home', compact( 'measurements', 'user'));
    }
    public function create(Request $request) {
        $request['user_id'] = Auth::user()->id;
        $input = $request->except(['_token']);
        Health::create($input);
        return redirect('home');
    }
}
