@extends('layout.base')

@section('titulo', 'Cadastro de usuário')

@section('conteudo')
    <form action="{{ route('salvar') }}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
            @if ( $errors->has ('nome') )
                @foreach ($errors->get('nome') as $erro)    
                    <strong class="error">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>
        <div class="field">
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="email">
        </div>
        <div class="field">
            <label for="">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div class="btn">
            <button type="submit">Salvar</button>
        </div>
    </form>
@endsection