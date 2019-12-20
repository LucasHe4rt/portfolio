@extends('layouts/view')
@section('content')
    <div id="home" class="profile-background" style='background-image: url("{{asset('img/code.jpg')}}");'>
        <div class="filter-black"></div>
    </div>
    <div class="profile-content section-nude">
        <div class="container">
            <div class="row owner">
                <div class="col-md-2 col-md-offset-5 col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3 text-center">
                    <div class="avatar">
                        <img src="{{asset('img/me.jpg')}}" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                    </div>
                </div>
            </div>
            <div class="name text-center" style="margin-top: -30px">
                <h4>Lucas Bittencourt<br><small>Back-end Developer</small></h4>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center" style="margin-bottom: 10px">
                    <h5>
                        Desenvolvedor com alguns meses de experiência desenvolvendo aplicacões web com PHP e Framework Laravel. No tempo livre, leio alguns livros,
                        estudo conteúdos sobre programacão no geral e participo do projeto <a href="https://heartdevs.com/">He4rt Developers</a>, uma comunidade de
                        programadores que incita novos programadores a ensinar e colaborar em projetos open source.

                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div id="experience" class="section landing-section text-center">
        <div class="container">
            <h2>Experiência</h2>
            <div class="row">
                <div class="col-md-6 column">
                    <h4>Etec Professor Marcos Uchoas dos Santos Penchel - 11 meses</h4>
                    <p>Nesses 11 meses, atuei como monitor de programacão no projeto "Monitoria Volúntaria", ensinando e tirando dúvidas dos alunos
                        sobre o desenvolvimento de aplicacões para web. <strong> As principais linguagens abordadas foram: </strong> HTML5, CSS3, Framework Bootstrap, PHP e SQL.</p>

                </div>
            </div>
        </div>
    </div>

    <div id="skills" class="section section-dark text-center landing-section">
        <div class="container">
            <h2>Habilidades</h2>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="1 ano ~ 2 anos">PHP</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="60% de domínio" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;background-color: #777ab1">
                        <span class="sr-only">60% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="6 meses ~ 1 ano">Laravel</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="40% de domínio" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;background-color: #f6524a">
                        <span class="sr-only">40% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="6 meses ~ 1 ano">MySql</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="20% de domínio" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;background-color: #3765af">
                        <span class="sr-only">20% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="1 mês ~ 6 meses">Javascript</p>
                <div class="progress">
                    <div class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="20% de domínio" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;background-color: #f8e03e">
                        <span class="sr-only">20% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="1 mês ~ 6 meses">Jquery</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="20% de domínio" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;background-color: #1e2e3b">
                        <span class="sr-only">20% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="6 meses ~ 1 ano">Bootstrap</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="40% de domínio" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;background-color: #5a3f82">
                        <span class="sr-only">40% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="6 meses ~ 1 ano">MVC</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="55% de domínio" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;background-color: #5cc6bc">
                        <span class="sr-only">55% de domínio</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <p class="btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="1 ano ~ 2 anos">Linux</p>
                <div class="progress">
                    <div  class="progress-bar btn-tooltip" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="60% de domínio" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;background-color: #ff8c19">
                        <span class="sr-only">60% de domínio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center">Contato</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Nome</label>
                                <input id="name" class="form-control" placeholder="Nome">
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                                <label>Assunto</label>
                                <input id="subject" class="form-control" placeholder="Assunto">
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea id="message" class="form-control" rows="4"></textarea>
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="button" id="send" class="btn btn-default btn-block btn-lg btn-fill">Enviar mensagem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
