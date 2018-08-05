<?php

namespace App\Http\Controllers;

use App\ClassDay;
use App\ClassDayUser;
use App\Plan;
use App\PlanUser;
use App\User;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verification');
    }


    public function show($id) {

        //checking session
        if (session()->has('plan')) {

            //checking that user has enrolled
            if (Auth::user()->plans->where('id', session('plan'))->count()) {

                $plan = Plan::find(session('plan'));
                $day = $plan->days()->where('day', $id)->first();

                //checking if that user has watched
                if (ClassDayUser::all()->where('day_id', $day->id)->where('user_id', Auth::user()->id)->count()) {
                } else {
                    //TODO#1: Udurt zuwhun 1 planaaas 1 udriig n uzsend tootsdog bolgokh
                    foreach($plan->days()->orderByDesc('day')->get() as $day2) {
                        if ($day2->watched()) {
                            if (date('Y-m-d', strtotime($day2->check()->created_at)) == date('Y-m-d')) {
                                return view('plan.home', compact('plan', 'day'));
                            } else {
                                ClassDayUser::create(['user_id'=>Auth::user()->id, 'day_id'=>$day->id]);
                                return view('plan.home', compact('plan', 'day'));
                            }
                        }
                    }
                    ClassDayUser::create(['user_id'=>Auth::user()->id, 'day_id'=>$day->id]);

                }
                return view('plan.home', compact('plan', 'day'));

            }

        }

    }


    public function index() {
        return view('plans');
    }


    public function home($id) {

        if (Auth::user()->plans->where('id', $id)->count()) {
            session()->put('plan', $id);
            foreach (Plan::find($id)->days()->orderByDesc('id')->get() as $day) {
                if($day->watched()) {
                    if (ClassDay::all()->where('class_id', $id)->where('day', $day->day + 1)->count()) {
                        if(date('Y-m-d', strtotime($day->check()->created_at)) == date('Y-m-d')) {
                            return redirect(route('day', ['id'=>$day->day]));
                        }
                        return redirect(route('day', ['id'=>$day->day +1]));
                    }
                    return redirect(route('day', ['id'=>$day->day]));
                }
            }
            return redirect(route('day', ['id'=>1]));
        } else {
            return redirect('404');
        }

    }


    public function purchase() {
        if (session('purchase')) {
            $plan = Plan::find(session('purchase'));
            if (PlanUser::all()->where('user_id', Auth::user()->id)->where('plan_id', $plan->id)->count() > 0) {
                redirect(route('plans'));
            }
            return view('purchase', compact('plan'));
        } else {
            redirect()->back();
        }
    }


    public function cancel_purchase() {
        session()->forget('purchase');
        return redirect(route('home'));
    }


    public function proceed_purchase() {
        $plan = Plan::find(session('purchase'));
        if (PlanUser::all()->where('user_id', Auth::user()->id)->where('plan_id', $plan->id)->count() == 0) {
            if (Auth::user()->wallet - $plan->price >= 0) {
                $wallet = Auth::user()->wallet - $plan->price;
                Auth::user()->update(['wallet' => $wallet]);
                PlanUser::create(['plan_id'=>$plan->id, 'user_id'=>Auth::user()->id]);
                return redirect(route('plans'));
            } else {
                session()->flash('not_enough');
                return redirect(route('purchase'));
            }

        } else {
            return redirect(route('plans'));
        }

    }



}