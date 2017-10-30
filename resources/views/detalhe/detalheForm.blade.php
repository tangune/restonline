@extends('layouts.web.indexDetalhe')
@section('conteudo')
    <div class="register">
        <div class="container">
            <form>
                <div class="register-top-grid">

                    <div>
                        <span>Quantidade<label>*</label></span>
                        <input type="text"></br></br>
                    </div>
                    <div>
                        <span>Preco unitario<label>*</label></span>
                        <input type="text"></br></br>
                    </div>
                    <div>
                        <span>Preco venda <label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Pedido<label>*</label></span>
                        <input type="text">
                    </div>
                    <div>
                        <span>Produto<label>*</label></span>
                        <input type="text"></br></br></br></br></br></br></br></br>
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
