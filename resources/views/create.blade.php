@extends('layouts.app')

@section('content')

	<h3>New note</h3>

	@include('incs.messages')

	<form method="POST" action="create/submit">
    {{ csrf_field() }}

		<div class="form__group">

			<label class="form__label" for="title">Title: <span class="required">*</span></label>
        	<input class="form__input" id="title" type="text" name="title" autofocus>

		</div>

		<div class="form__group">

			<label class="form__label" for="note">Note: <span class="required">*</span></label>
        	<textarea class="form__textarea" id="note" cols="50" rows="10" name="note"></textarea>

		</div>

		<div class="form__group btn__group">

			<a href="/home" class="form__cancel float--left">Cancel</a>

			<input class="form__submit float--right" type="submit" value="Add note">

		</div>

	</form>

@endsection