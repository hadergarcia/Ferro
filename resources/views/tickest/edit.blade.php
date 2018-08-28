@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
            Editar Ticket
            <a href="{{ route('tickest.index', $ticket->id) }}" class="btn btn-default pull-right">Listado</a>
        </h2>
       
        @include('tickest.fragment.error')

        {!! Form::model($ticket, ['route' => ['tickest.update', $ticket->id], 'method' => 'PUT']) !!}
   
            @include('tickest.fragment.form')

        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
    @include('tickest.fragment.aside')
    </div>
@endsection