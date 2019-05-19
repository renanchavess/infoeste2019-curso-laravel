@extends('layout.main')

@section('conteudo')
<div class="row">
    <div class="col-12">
        <table class="table table-active table-bordered table-dark">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NOME</td>
                    <td>VALOR</td>
                    <td>ESTOQUE</td>
                    <td colspan="3">Ação</td>                    
                </tr>
            </thead>
            <tbody>
               @foreach($produtos as $p)
               <tr>
                   <td>{{$p->id}}</td>
                   <td>{{$p->nome}}</td>
                   <td>{{$p->valor}}</td>
                   <td>{{$p->estoque}}</td>
                   <td>
                       <a href="{{route('produto.edit', ['id' => $p->id])}}" 
                           class="btn btn-warning">Editar</a>
                    </td>
                    <td>
                       <form action="{{route('produto.destroy', [$p->id])}}" method="POST">
                           @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Excluir</button>
                       </form>
                    </td>
                    <td>
                        <a href="{{route('produto.fotos', [$p->id])}}" 
                            class="btn btn-light">Fotos</a>
                    </td>
               </tr>
               @endforeach

            </tbody>
        </table>        
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-6 col-md-3 col-lg-2">
        {{ $produtos->links() }}
    </div>
</div>
@endsection

@section('js')
@endsection