<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    //
    public function home($id) {
        if ($plan = Plan::find($id)) {
            session()->put('purchase', $plan->id);
        } else {
            return redirect('404');
        }

        if (Auth::check()) {
            return redirect(route('purchase', ['id'=>$plan->id]));
        } else {
            return redirect(route('login'));
        }
    }


}
