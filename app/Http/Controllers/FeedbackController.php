<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index() {
        $feedbacks = Feedback::paginate(5);
        return view('feedbacks.index',compact(['feedbacks']));
    }

    public function edit($id) {
        $feedbacks = Feedback::find($id);
        return view('feedbacks.edit',compact(['feedbacks']));
    }

    public function update(Request $request,$id) {
        $feedbacks = Feedback::find($id);
        $feedbacks->update($request->all());
        return redirect('/feedback');
    }
}
