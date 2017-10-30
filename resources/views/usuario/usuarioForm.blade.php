@extends('layouts.web.indexRegisto')
@section('conteudo')
    <div class="">
        <div class="container">
            {{--<form action="{{url('/usuarios')}}" method="POST">--}}
              <form action="/" method="POST">


                  {!! csrf_field() !!}
                <div class="register-top-grid">

                    <div>
                        </br></br></br></br>

                        <span>Nome<label>*</label></span>
                        <input type="text" name="nome">
                    </div>
                    <div>
                        </br></br></br></br>
                        <span>Contacto<label>*</label></span>
                        <input type="number" name="contacto" ></br></br></br></br>

                    </div>
                    <div>

                        <span>Bairro<label>*</label></span>
                        <input type="text" name="bairro" >

                    </div>

                    <div>

                        <span>Perfil do usuario<label>*</label></span>
                        <input type="text" name="perfil" ></br></br></br></br>

                        {{--<select>--}}
                            {{--<option>Proprietario</option>--}}
                            {{--<option>Cliente</option>--}}


                        {{--</select>--}}

                    </div>


                </div>
                  <div>


                          <input type="submit" value="usuario" class="btn btn-success  ">
                          <div class="clearfix"> </div>
                  </div>


            </form>






            </div>
        </div>
    </div>
@endsection
