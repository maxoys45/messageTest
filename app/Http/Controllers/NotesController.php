<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Auth;

class NotesController extends Controller
{
	public function submit(Request $request) {
		
		$this->validate($request, [
			'title' => 'required',
			'note' => 'required'
		]);

		// Create a new note
		$note = new Note;
		$note->title = $request->input('title');
		$note->note = $request->input('note');
		$note->name = Auth::user()->name;

		// Save note

		$note->save();

		// Redirect

		return redirect('/home')->with('success', 'Your note has been created.');

	}

	public function getNotes() {

		$notes = Note::all();

		return view('home')->with('notes', $notes);

	}

	public function showNote() {

		// echo Note::all();

		return view('note');

	}
}
