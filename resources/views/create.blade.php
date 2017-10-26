@extends('layouts.app')

@section('content')

	<h3>New note</h3>

	@include('incs.messages')

	{!! Form::open(['url' => 'create/submit']) !!}
    
		<ul class="form__group">

			<li class="form__item">

				{{Form::label('title', 'Title:', ['class' => 'form__label'])}}
				{{Form::text('title', '', ['class' => 'form__input'])}}

			</li>

			<li class="form__item">

				{{Form::label('note', 'Note:', ['class' => 'form__label'])}}
				{{Form::textarea('note', '', ['class' => 'form__input'])}}

			</li>

			<li class="form__item">

				<a href="/home" class="form__cancel float-left">Cancel</a>

				{{Form::submit('Add note', ['class' => 'form__submit float-right'])}}

			</li>

		</ul>

	{!! Form::close() !!}

@endsection