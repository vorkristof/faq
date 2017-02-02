<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Http\Request;

class AnswersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request, Question $question)
    {
        $this->validate(request(), [
           'text'=> 'required'
        ]);

        $question->add(
            new Answer([
                'text' => request('text'),
                'user_id' => auth()->id()
            ])
        );

        return back();
    }

    public function edit(Question $question, Answer $answer) {
        return view('answers.edit', compact('question'), compact('answer'));
    }

    public function update(Request $request, Question $question, Answer $answer) {
        $this->validate(request(), [
            'text'=> 'required'
        ]);

        $answer->update([
            'text' => request('text')
        ]);

        return redirect('question/'.$question->id);
    }

    public function delete(Question $question, Answer $answer) {
        return view('answers.delete', compact('question'), compact('answer'));
    }

    public function destroy(Request $request, Question $question, Answer $answer) {
        $answer->delete();

        return redirect('question/'.$question->id);
    }

}
