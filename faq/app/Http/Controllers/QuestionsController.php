<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function show(Question $question) {
        return view('questions.question', compact('question'));
    }

    public function add(Request $request) {
        $this->validate(request(), [
            'title'=> 'required',
            'text'=> 'required'
        ]);

        $question = new Question([
            'title' => request('title'),
            'text' => request('text'),
            'user_id' => auth()->id()
        ]);

        $question->save();

        return redirect('questions/');
    }

    public function edit(Question $question) {
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request, Question $question) {
        $this->validate(request(), [
            'title'=> 'required',
            'text'=> 'required'
        ]);

        $question->update([
            'title' => request('title'),
            'text' => request('text')
        ]);

        return redirect('question/'.$question->id);
    }

    public function delete(Question $question) {
        return view('questions.delete', compact('question'));
    }

    public function destroy(Question $question) {
        $answers = $question->answers();

        $answers->delete();
        $question->delete();

        return redirect('questions');
    }

}
