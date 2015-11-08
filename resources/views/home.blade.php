@extends('app')

@section('content')

    <div class="content">
        <h1>List of users</h1>
        @if ($users)
        <ul>
            @foreach ($users as $user)
                <li>{{ $user->first_name  }} {{ $user->surname }}</li>
            @endforeach
        </ul>
        @else
            <p>No users found</p>
        @endif
    </div>

@stop
