@extends('layout.main')

@section('conteudo')
<div class="row justify-content-lg-center">
    <div class="col-12 col-lg-4">
        <form action="{{route('produto.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                @if($errors->has('nome'))
                    <label class="danger">{{$errors->first('nome')}}</label>
                @endif
                <input type="text" name="nome" value="{{old('nome')}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="valor">Valor</label>
                @if($errors->has('valor'))
                    <label class="danger">{{$errors->first('valor')}}</label>
                @endif
                <input type="text" name="valor" value="{{old('valor')}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="estoque">Estoque</label>
                @if($errors->has('estoque'))
                    <label class="danger">{{$errors->first('estoque')}}</label>
                @endif
                <input type="text" name="estoque" value="{{old('estoque')}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Gravar</button>
            <a href="{{ route('produto.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
</div>
@endsection