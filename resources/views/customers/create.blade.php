@extends('layouts.main')

@section('page-title')
    Criar novo cliente
@stop

@section('content')

    {!! Form::open(['url' => 'foo/bar']) !!}
        @include('customers.partials.form')
    {!! Form::close() !!}

@stop