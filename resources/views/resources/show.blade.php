@extends('app')

@section('content')

    <div class="content">
        <div class="title">Resources</div>
    
        @if($resource)
            <h2>{{ $resource->id }}</h2>
            <div class="body">{{ $resource->description }}</div>
        @else
            Not found
        @endif

    </div>

@stop
