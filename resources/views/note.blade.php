@extends('layouts.app')

@section('content')

    <h3>This is a note</h3>

    <div class="notes__container">

		<img class="note__thumb" src="http://via.placeholder.com/128x128" />

		<div class="note__content">
			
			<h4 class="note__author">{{ $note->name }}</h4>

			<div class="note__date">{{ $note->date }}</div>

			<div class="note__copy">{{ $note->note }}</div>

		</div>

    </div>

    <a href="/home" class="form__cancel float-left">Back to overview</a>

@endsection
