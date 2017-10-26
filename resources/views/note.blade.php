@extends('layouts.app')

@section('content')

    <h3>This is a note</h3>

    <div class="notes__container">

		<img class="note__thumb" src="http://via.placeholder.com/128x128" />

		<div class="note__content">
			
			<h4 class="note__author">Max</h4>

			<div class="note__date">Today at 12:00</div>

			<div class="note__copy">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos fugit tempore qui rerum neque, fuga. Voluptatum consequatur nemo animi. Sit consectetur aperiam nemo hic perspiciatis sunt, veniam odio illo. Velit!</div>

		</div>

    </div>

    <a href="/home" class="form__cancel float-left">Back to overview</a>

@endsection
