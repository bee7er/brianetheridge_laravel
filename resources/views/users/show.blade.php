@extends('app')

@section('content')

    <div class="content">
        <div class="title">Show User Details</div>
    
        @if($user)
            <h2>User id: {{ $user->id }}</h2>
            <div class="body">{{ $user->first_name }} {{ $user->surname }}</div>
            <div class="body">{{ $user->email }}</div>
        @else
            Not found
        @endif

    </div>

@stop
