@extends('layouts.web.indexCozinha')
@section('conteudo')
    <div class="register">
        <div class="container">
            <div class="row">

        <div >
            <form class="form" action="/cozinhas" method="post">

                {!! csrf_field() !!}

                    <div class="form-group">
                        <span>Nome<label>*</label></span>
                        <input type="text" name="nome" class="form-control">
                    </div>

                    <div class="form-group">
                        <span>Descricao<label>*</label></span>
                        <input type="text" name="descricao" class="form-control">
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

        </div>
    </div>
@endsection
