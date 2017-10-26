@extends('layouts.app')

@section('content')

    <h3>Notes overview</h3>

    @include('incs.messages')

    <div class="notes__container">

        <table class="notes__table">

            <tr>
                <th class="notes__heading">Created by</th>
                <th class="notes__heading">Title</th>
                <th class="notes__heading">Date</th>
            </tr>

            @if(count($notes) > 0)
                @foreach($notes as $note)
                    <tr>
                        <td class="notes__cell">{{$note->name}}</td>
                        <td class="notes__cell"><a href="/note">{{$note->title}}</a></td>
                        <td class="notes__cell">{{ date('d/m/y \a\t H:i', strtotime($note->created_at)) }}</td>
                    </tr>
                @endforeach
            @endif

        </table>

        <a href="/create-a-new-note" class="btn--default">Create a new note</a>

    </div>

@endsection
