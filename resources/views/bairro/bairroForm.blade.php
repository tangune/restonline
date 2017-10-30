
@extends('layouts.web.indexBairro')
@section('conteudo')
    <div class="register">
        <div class="container">
            <form>
                <div class="register-top-grid">

                    <div>
                        <span>Nome<label>*</label></span>
                        <input type="text"></br></br>
                    </div>
                    <div>
                        <span>Distrito<label>*</label></span>
                        <input type="text"></br></br>
                    </div>
                    {{--<div>--}}
                        {{--<span>Cidade <label>*</label></span>--}}
                        {{--<input type="text"></br></br></br></br></br></br></br></br></br></br>--}}
                    {{--</div>--}}

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

