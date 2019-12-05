@extends('layouts.app')

@section('content')
    <div class="container-fluid" >
        <div class="row">
                <div class="col-md-2" id="menuLateral">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/upload/perfil">Meu perfil</a>
                            <a class="nav-link" href="/upload/trabalhos">Meus trabalhos</a>
                            <a class="nav-link" href="/upload/novotrabalho">Enviar novo trabalho</a>
                            <a class="nav-link" href="/upload/aceitarnovotrabalho">Aceitar novo trabalho</a>
                            <a class="nav-link" href="/upload/novocadastro">Aceitar novo cadastro</a>
                            <a class="nav-link" href="#">Dashboard</a>
                        </li>
                     </ul>
                </div>
                <div class="col-md-1" id="cont">
                    <img id='imgProf' src="{{ asset('img/icon-profile/icon-login-default.png') }}">
                </div>
                <div class="col-md-8" id="campos">
                    <form action="" method="POST">
                        <p id="texto"> Nome</p>
                        <input type="text" id="campoProf" readonly placeholder="Nome do usuário" required>

                        <p id="texto"> Matricula</p>
                        <input type="number" id="campoProf" readonly placeholder="Matricula do usuário" required>
                        
                        
                        <p id="texto"> Email</p>
                        <input type="email" id="campoProf" placeholder="Email do usuário" required>

                        <p id="texto"> Data de nascimento</p>
                        <input type="date" id="campoProf" readonly required>

                        <p id="texto"> Siape</p>
                        <input type="text" id="campoProf" placeholder="Siape do usuário">
                        
                        <p id="texto"> Lattes</p>
                        <input type="text" id="campoProf" placeholder="Lattes do usuário">

                        <p id="texto"> Artigos publicados</p>
                        <input type="text" id="campoProf" readonly placeholder="Número de artigos publicados">

                        <p id="texto"> Visualizações</p>
                        <input type="text" id="campoProf" readonly placeholder="Número de visualizações">

                        <p id="texto"> Downloads</p>
                        <input type="text" id="campoProf" readonly placeholder="Número de downloads">
                        
                        <p id="texto"> Aterar foto</p>
                        <input name="userfile" id="campoProf" type="file" />

                        <button type="submit" id="buttonSalv" class="btn btn-success">Salvar</button>
                    </form>                
                </div>
        </div>
    </div>
@endsection