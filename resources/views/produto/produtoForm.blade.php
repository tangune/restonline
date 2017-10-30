@extends('layouts.web.indexProduto')
@section('conteudo')
    <div class="produto">
        <div class="container">
            <form action="/produtos" method="POST">

                {!! csrf_field() !!}

                {{--<div class="register-top-grid">--}}

                             <div class="form-group">
                                <span>Nome<label>*</label></span>
                                <input type="text" name="nome" class="form-control">
                             </div>

                             <div class="form-group">
                                <span>Descricao<label>*</label></span>
                                <input type="text" name="descricao" class="form-control">
                             </div>

                             <div class="form-group">
                                 <span>imagem<label>*</label></span>
                                 <input type="text" name="imagem" class="form-control">
                             </div>

                             <div class="form-group">
                                <span>Estado<label>*</label></span>
                                <input type="text" name="estado" class="form-control">
                             </div>



                             <div class="form-group">
                                 <span>Restaurante<label>*</label></span>
                                 <input type="text" name="idrestaurante" list="lista1" class="form-control">
                                 <datalist id="lista1">
                                   @foreach($restaurante as $i)
                                       <option>{{$i->nome}}</option>
                                   @endforeach
                                 </datalist>
                             </div>

                <div class="form-group">

                    <span>Categoria<label>*</label></span>
                    <input type="text" name="idcategoria" list="lista" class="form-control">

                    <datalist id="lista">
                        @foreach($categoria as $i)
                            <option>{{$i->nome}}</option>
                        @endforeach
                    </datalist>

                </div>

                            <div class="form-group">
                                <span>Preco<label>*</label></span>
                                <input type="number" name="preco" class="form-control">
                            </div>

                {{--</div>--}}
                            <div class="form-group" >
                                <input type="submit" value="Produto" class="btn btn-success">

                            </div>


            </form>
        </div>
    </div>
@endsection