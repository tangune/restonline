@extends('layouts.web.indexEndereco')
@section('conteudo')
    <div class="register">
        <div class="container">
            <form>
                <div class="register-top-grid">

                    <div>
                        <span>Distrito<label>*</label></span>
                        <input type="text" name="distrito"></br></br>
                    </div>
                    <div>
                        <span>Bairro<label>*</label></span>
                        <input type="text" name="bairro"></br></br>
                    </div>
                    <div>
                        <span>Avenida<label>*</label></span>
                        <input type="text" name="avenida">
                    </div>
                    <div>
                        <span>Rua<label>*</label></span>
                        <input type="text" name="rua">
                    </div>
                    <div>
                        <span>Numero da rua<label>*</label></span>
                        <input type="text" name="nemeroRua">
                    </div>
                    <div>
                        <span>Cliente<label>*</label></span>
                        <select>
                            <option>Ronaldo</option>
                            <option>Manuel</option>
                            <option>Joao</option>
                        </select>
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
