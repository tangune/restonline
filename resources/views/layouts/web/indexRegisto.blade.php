<!DOCTYPE HTML>
<html>
<head>
    <title>Fast Food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/menu_jquery.js')}}"></script>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            {{--<h1><a href="{{url('/')}}"> <img src="{{asset('images/logokuda1.png')}}"  alt=""/></a></h1>--}}
            <h1> Registo de usuarios do sistema</h1>
        </div>
        <div class="top_right">
            <ul>
                {{--<li><a href="{{url('registar')}}">Regista-se</a></li>|--}}
                <li class="login" >
                    <div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
                        <div id="loginBox">
                            <form id="loginForm">
                                <fieldset id="body">
                                    <fieldset>
                                        <label for="nome">Nome </label>
                                        <input type="text" name="nome" id="">
                                    </fieldset>
                                    <fieldset>
                                        <label for="perfil">Perfil</label>
                                        <input type="text" name="perfil" id="">
                                    </fieldset>
                                    <input type="submit" id="login" value="Entrar">
                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Lembra me</i></label>
                                </fieldset>
                                <span><a href="#">Esqueceu seu password?</a></span>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--Conteudo-->
@yield('conteudo')

</div>
</body>
</html>