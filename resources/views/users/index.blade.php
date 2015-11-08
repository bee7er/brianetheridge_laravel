@extends('app')

@section('content')

    <div class="content">
        <h1>List of users</h1>
        @if ($users)
        <ul>
            @foreach ($users as $user)
                <li>{!! link_to_action('UsersController@show', ($user->first_name . ' ' . $user->surname), $parameters = ['id' => $user->id], $attributes = []) !!}</li>
            @endforeach
        </ul>
        @else
            <p>No users found</p>
        @endif
    </div>

@stop
