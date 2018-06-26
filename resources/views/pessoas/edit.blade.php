@extends('template.app')


@section('content')

    <div class="col-md-12">
        <h3>Editar contato</h3>
    </div>

    <div class="col-md-6 well">
        <form action="{{ url('pessoas/update') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $pessoa->id }}">
            <div class="form group col md 4">
                <label class="control-label">Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ $pessoa->nome }}">
            </div>
            <div class="form group col md 4">
                <label class="control-label">DDD</label>
                    <input type="text" class="form-control" name="ddd" value="{{ $pessoa->telefones }}">
            </div>
            <div class="form group col md 8">
                <label class="control-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <div class="col-off-set-1 col-md-3">
        <div class="panel panel-info">
            <div class="panel-heading">
                {{$pessoa->nome}}
            </div>
            <div class="panel-body">
                @foreach($pessoa->telefones as $telefone)
                <p><strong>Telefones: </strong> {{ $telefone->ddd }} {{ $telefone->telefone }}</p>
                @endforeach
            </div>
        </div>
    </div>

@endsection