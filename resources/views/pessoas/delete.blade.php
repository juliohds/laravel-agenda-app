@extends('template.app')


@section('content')

    <div class="col md 6 well">
        <div class="col md 12">
            <h3>Deseja realmente excluir este contato?</h3>
            <div>
                <a class="btn btn-default" href="{{ url('pessoas/') }}">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                    Cencelar
                </a>
                <a class="btn btn-danger" href="{{ url("pessoas/$pessoas->id/destroy") }}">
                    <i class="glyphicon glyphicon-remove"></i>
                    Excluir
                </a>
            </div>
        </div>
    </div>

    <div class="col-off-set-1 col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                {{$pessoas->nome}}
            </div>
            <div class="panel-body">
                @foreach($pessoas->telefones as $telefone)
                <p><strong>Telefones: </strong> {{ $telefone->ddd }} {{ $telefone->telefone }}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection