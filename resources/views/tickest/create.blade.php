@extends('layout')

@section('content')
    <div class="col-sm-8">
        <h2>
           Nuevo Tickect
           <a href="{{ route('tickest.index') }}" class="btn btn-default pull-right">Listado</a> 
        </h2>    

        @include('tickest.fragment.error')

        {!! Form::open( ['route' => 'tickest.store']) !!}
   
            @include('tickest.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('tickest.fragment.aside')
    </div>

@endsection