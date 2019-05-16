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
                </tr>
            </thead>
            <tbody>
               @foreach($produtos as $p)
               <tr>
                   <td>{{$p->id}}</td>
                   <td>{{$p->nome}}</td>
                   <td>{{$p->valor}}</td>
                   <td>{{$p->estoque}}</td>
               </tr>
               @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
@endsection