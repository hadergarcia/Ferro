@extends('layout')

@section('content')
    <div class="col-sm-8">
       <h2>
        Listado de tickets
        <a href="{{ route('tickest.create')}}" class=" btn btn-primary pull-right">Nuevo</a>
        </h2>
        @include('tickest.fragment.info')
       
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">ID</th>
                    <th>Problema</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tickest as $ticket)
                <tr>
                    <td>{{ $ticket->id }}</td>
                    <td>
                        <strong>{{ $ticket->name }}</strong>
                        {{ $ticket->short }}
                    </td>
                    <td>
                        <a href="{{ route('tickest.show', $ticket->id) }}" class="btn btn-link">ver</a>
                    </td>
                    <td>
                        <a href="{{ route('tickest.edit', $ticket->id) }}" class="btn btn-link">editar</a>
                    </td>
                    <td>
                        <form action="{{ route('tickest.destroy', $ticket->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-link">borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $tickest->links() !!}

    </div>
    <div class="col-sm-4">
        @include('tickest.fragment.aside')
    </div>
@endsection