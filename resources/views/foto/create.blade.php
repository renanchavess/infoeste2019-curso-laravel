@extends('layout.main')

@section('conteudo')
<div class="row">
    <div class="col-12 col-sm-8 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
        <h1>{{$produto->nome}}</h1>
        <form action="{{route('foto.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="produto_id" value="{{$produto->id}}">
            <input type="file" name='arquivo' id='arquivo' class="form-control-file">
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-info" type="submit">Salvar</button>
                    <a href="/produto" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>    
</div>
@endsection