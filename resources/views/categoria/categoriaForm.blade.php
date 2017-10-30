
@extends('layouts.web.indexCategoria')
@section('conteudo')
    <div class="register">
        <div class="container">
            <form class="form" action="/categorias" method="POST">

                {!! csrf_field() !!}

                    <div class="form-group">
                        <span>Nome<label>*</label></span>
                        <input type="text" name="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <span>Estado<label>*</label></span>
                        <input type="text" name="estado" class="form-control">
                    </div>

                <div class="form-group">
                    <br><br><br>
                    <input type="submit" value="Registar" class="btn btn-success">

                </div>



            </form>

        </div>
    </div>
@endsection


