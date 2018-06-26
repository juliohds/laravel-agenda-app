@extends('template.app')


@section('content')

    <div class="col md 12">
        <h3>Novo contato</h3>
    </div>

    <div class="col md 6 well">
        <form action="{{ url('pessoas/store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form group col md 4">
                <label class="control-label">Nome</label>
                    <input type="text" class="form-control" name="nome">
            </div>
            <div class="form group col md 4">
                <label class="control-label">DDD</label>
                    <input type="text" class="form-control" name="ddd">
            </div>
            <div class="form group col md 8">
                <label class="control-label">Telefone</label>
                    <input type="text" class="form-control" name="telefone">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection