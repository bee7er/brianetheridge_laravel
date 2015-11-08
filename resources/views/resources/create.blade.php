@extends('app')

@section('content')

    <div class="content">
        <div class="title">New Resources</div>

        {!! Form::open() !!}
            <div class="form-group">
                {!! Form::label('seq', 'Seq:') !!}
                {!! Form::text('seq', null, ['class' => 'form-control']) !!}

                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
        {!! Form::close() !!}

    </div>

@stop