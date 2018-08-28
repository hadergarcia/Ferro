@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
            {{ $ticket->name}}
            <a href="{{ route('tickest.edit', $ticket->id) }}" class="btn btn-default pull-right">Editar</a>
        </h2>
        <p>
            {{$ticket->short}}
        </p>
        {!! $ticket->body !!}
        


    </div>
    <div class="col-sm-4">
    @include('tickest.fragment.aside')
    </div>
@endsection