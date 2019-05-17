@extends('layout.main')

@section('conteudo')
<div class="row">
    <div class="col-3">
        <a href="{{route('foto.create', [$produto->id])}}" class="btn btn-success">Novo</a>
    </div>
</div>
<div class="row">
    @foreach($produto->fotos as $foto)
        <div class="card">
            <div class="col-12 col-mb-4 shadow-sm he" style="background-color:black">
                <img src="/storage/{{ $foto->path }}" alt="image" class="img-fluid" style="height:140px;">
            </div>            
        </div>
    @endforeach
</div>
@endsection