@extends('layouts.web.indexPedido')
@section('conteudo')
    <div class="register">
        <div class="container">
            <form>
                <div class="register-top-grid">

                    <div>
                        <span>Data<label>*</label></span>
                        <input type="text" name="data"></br></br>
                    </div>
                    <div>
                        <span>Estado<label>*</label></span>
                        <input type="text" name="estado"></br></br>
                    </div>
                    <div>
                        <span>Tipo pedido<label>*</label></span>
                        <select>
                            <option>Entregavel</option>
                            <option>Local</option>
                            <option>Encomenda</option>
                        </select>
                    </div>
                    <div>

                        <span>Restaurante<label>*</label></span>
                        <select>
                            <option>Cristal</option>
                            <option>Mimos</option>
                            <option>Royal</option>
                        </select>
                    </div>
                    <div>
                        </br></br>
                        <span>Tipo pagamento<label>*</label></span>
                        <select>
                            <option>Electronico</option>
                            <option>Fisico</option>
                            <option>Cheque</option>
                        </select>
                    </div>
                    <div>
                        </br></br>
                        <span>Cliente<label>*</label></span>
                        <select>
                            <option>Ronaldo</option>
                            <option>Manuel</option>
                            <option>Joao</option>
                        </select></br></br></br></br></br></br></br></br>
                        {{--<input type="text" name="cliente"></br></br></br></br></br></br></br></br>--}}
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
