@extends('layout.main')

@section('conteudo')
<div class="row">
    <div class="col-12 text-center">
        <h1 id='link' style="margin-top:150px; font-size: 100px">Curso Laravel Infoeste 2019</h1>
</div>
@endsection

@section('js')

<script>
    document.getElementById('link').onclick = function(){
        window.open('https://github.com/renanchavess/infoeste2019-curso-laravel', '_newblank')
    }
</script>
@endsection