@extends('layout.main')

@section('conteudo')
<div class="row">
    <div class="col-12">
        <form action="{{route('produto.store')}}" method="post">
            @csrf
            <label for="">nome</label><br/>
            <input type="text" name="nome"><br/>
            <label for="">valor</label><br/>
            <input type="text" name="valor"><br/>
            <label for="">estoque</label><br/>
            <input type="text" name="estoque"><br/>
            <button type="submit">Gravar</button>
        </form>
    </div>
</div>
@endsection