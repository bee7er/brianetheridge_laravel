@extends('app')

@section('content')

    <div class="content">
        <div class="title">Resources</div>
    
        <div>Four ways of building urls</div>

        @foreach($resources as $resource)

            <h2>1. <a href="/resources/{{ $resource->id }}">{{ $resource->name }}</a></h2>
            <h2>2. <a href="{{ action('ResourcesController@show', [$resource->id]) }}">{{ $resource->name }}</a></h2>
            <h2>3. <a href="{{ url('/resources', $resource->id) }}">{{ $resource->name }}</a></h2>

            <h2>4. <a href="{{ route('show_route', $resource->id) }}">{{ $resource->name }}</a></h2>

            <div class="body">{{ $resource->description }}</div>

        @endforeach
    </div>

@stop