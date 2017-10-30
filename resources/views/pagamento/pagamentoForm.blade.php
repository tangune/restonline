@extends('layouts.web.indexPagamento')
@section('conteudo')
    <div class="register">
        <div class="container">
            <form>
                <div class="register-top-grid">

                    <div>
                        <span>Nome<label>*</label></span>
                        <input type="text" name="nome"></br></br>
                    </div>
                    <div>
                        <span>Descricao<label>*</label></span>
                        <input type="text" name="descricao"></br></br></br></br></br></br></br></br>
                    </div>

                </div>


            </form>
            <div class="clearfix"> </div>
            <div class="register-but">
                <form>
                    <input type="submit" value="registar">
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
@endsection
