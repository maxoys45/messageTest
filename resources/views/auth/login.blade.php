@extends('layouts.app')

@section('content')

<h3>Login</h3>

<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form__group {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="form__label" for="email">Email:</label>
        <input class="form__input" id="email" type="text" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <div class="help-block">
                {{ $errors->first('email') }}
            </div>
        @endif
    </div>

    <div class="form__group {{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="form__label" for="password">Password:</label>
        <input class="form__input" id="password" type="password" name="password" required>

        @if ($errors->has('password'))
            <div class="help-block">
                {{ $errors->first('password') }}
            </div>
        @endif
    </div>

    <div class="form__group">
        <button type="submit" class="form__submit">Login</button>
    </div>

</form>

@endsection
