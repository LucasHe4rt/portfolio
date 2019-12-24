<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Lucas Bittencourt</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/ct-paper.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('css/examples.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

<nav class="navbar navbar-relative rnavbar-ct-transparent" role="navigation-demo" id="register-navbar">      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
            <ul class="nav navbar-nav">
                <a href="#home" class="btn btn-simple">Início</a>
                <a href="#experience" class="btn btn-simple">Experiência</a>
                <a href="#skills" class="btn btn-simple">Habilidades</a>
                <a href="#contact" class="btn btn-simple">Contato</a>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <a href="https://twitter.com/lucashe4rt" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple"><i class="fa fa-github"></i></a>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-->
</nav>

<div class="wrapper">
    @yield('content')
</div>

<footer class="footer-demo section-dark">
    <div class="container">
        <nav class="pull-left">
            <ul>

                <li>
                    <a href="http://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="http://www.creative-tim.com/product/rubik">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
          LucasBittencourt &copy; 2020
        </div>
    </div>
</footer>

</body>

<script src="{{asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-ui-1.10.4.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/main.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>

<!--  Plugins -->
<script src="{{asset('js/ct-paper-checkbox.js')}}"></script>
<script src="{{asset('js/ct-paper-radio.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.js')}}"></script>

<script src="{{asset('js/ct-paper.js')}}"></script>

</html>
