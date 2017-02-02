<?php

namespace App\Http\Controllers;

use App\Question;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('ask');
    }

    public function home() {
        //$lastQuestion = DB::table('questions')->orderBy('created_at', 'desc')->first();
        $lastQuestion = Question::orderBy('created_at', 'desc')->first();
        return view('pages.home', compact('lastQuestion'));
    }

    public function questions() {
        $questions = Question::all();
        $users = User::all();
        return view('pages.questions', compact('questions'), compact('users'));
    }

    public function ask() {
        return view('pages.ask');
    }
}
