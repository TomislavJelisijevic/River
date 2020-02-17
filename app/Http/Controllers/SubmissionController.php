<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;

class SubmissionController extends Controller
{
    public function createForm()
    {
        return view('submissions.createForm', [
            'submissions' => Submission::all()
        ]);
    }

    public function all()
    {
        return  Submission::all();
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'message' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i'
        ]);
        Submission::forceCreate([
            'name' => request('name'),
            'message' => request('message'),
            'date' => request('date') . ' ' . request('time')
        ]);
        return ['message' => 'Submission created'];
    }

}
