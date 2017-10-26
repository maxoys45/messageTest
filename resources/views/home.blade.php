@extends('layouts.app')

@section('content')

    <h3>Notes overview</h3>

    @include('incs.messages')

    <div class="notes__container">

        <div class="notes__table">

            <div class="row row__heading">
                <div class="col">Created by</div>
                <div class="col">Title</div>
                <div class="col">Date</div>
            </div>

            @if(count($notes) > 0)
                @foreach($notes as $note)
                    <a class="row note__link" href="/note/{{ $note->id }}">
                        <div class="col notes__cell">{{$note->name}}</div>
                        <div class="col notes__cell">{{$note->title}}</div>
                        <div class="col notes__cell">{{ date('d/m/y \a\t H:i', strtotime($note->created_at)) }}</div>
                    </a>
                @endforeach
            @endif

        </div>

        <a href="/create-a-new-note" class="btn--default">Create a new note</a>

    </div>

@endsection
