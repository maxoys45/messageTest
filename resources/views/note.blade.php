@extends('layouts.app')

@section('content')

    <h3>{{ $note->title }}</h3>

    <div class="note__container">

		<img class="note__thumb" src="http://via.placeholder.com/128x128" />

		<div class="note__content">

			<div class="note__data">
			
				<div class="note__author">{{ $note->name }}</div>

				<div class="note__date">{{ date('d/m/y \a\t H:i', strtotime($note->created_at)) }}</div>
			
			</div>

			<div class="note__copy">{{ $note->note }}</div>

		</div>

    </div>

    <a href="{{ route('home') }}" class="form__cancel float-left">Back to overview</a>

@endsection
