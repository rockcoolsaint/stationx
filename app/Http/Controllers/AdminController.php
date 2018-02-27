<?php

namespace App\Http\Controllers;

//use App\Http\Requests;
//use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct() {

		//$this->middleware('auth');
	}

    public function index() {
    	$today = [
    		'today' => 'Today',
    	];
    	return view('admin')->with($today);
    }

    public function overview(Request $request) {
        if ($request->session()->has('username')) {
            $name = $request->session()->get('username');

            return view('analytics.overview.index')->with('username', $name);
        }

    	//return view('analytics.overview')->with('username', $username);
        $message = 'Sorry your session has expired please sign in again';
        return redirect('/login')->with('cookie_expired', $message);

    }

    public function stock() {
        return view('analytics.stock');
    }

    public function expense() {
        return view('analytics.expense');
    }

    public function stock_summary() {
        return view('analytics.summary.stock');
    }

    public function expense_summary() {
        return view('analytics.summary.expense');
    }
}
