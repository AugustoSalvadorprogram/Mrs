@extends('layout.layout')
@section('title', 'User')
@section('content')

<style>

    .conteudo{

    }

    /* Progresso */

    .conteudo .chilld{

    }

    .conteudo .chillds .progresso{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding-top: 2%;
    }
    
    .conteudo .chillds .progresso .caixa1{
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: center;
        padding: 1%;
    }

    .conteudo .chillds .progresso .caixa1 img{
        width: 200px;
        height: 220px;
        background-color: #01013aff;
        cursor: pointer;
        border-radius: 20px;
    }

    .conteudo .chillds .progresso .caixa1 img:hover{
        transform: rotate(20deg);
        transition: 0.1s all ease-in-out;
    }
    
    .conteudo .chillds .progresso .caixa1 a{
        background-color: #4eacf8ff;
        color: white;
        padding: 4%;
        border-radius: 10px;
    }

    .conteudo .chillds .progresso .caixa1 a:hover{
        background-color: #0d538bff;
        transition: 0.3s all ease-in-out;
    }



    /* Capacitações */

    .conteudo .chillds .capacita{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-image: url(img/fundo.png);
        background-position: right top;
        padding: 5%;
    }

    .conteudo .chillds .capacita img{
        width: 100px;
        border-radius: 50px;
    }
    
    .conteudo .chillds .capacita img:hover{
        transform: scale(2.1);
        transition: 1s all ease-in-out;
        border-radius: 0px;
    }
    
    .conteudo .chillds .capacita #capacita{
        color: #ffffffff;
        padding: 0%;
        font-size: large;
        font-weight: bolder;
    }

    /* Aviso */

    .conteudo .chillds .aviso{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 4%;
    }
    
    .conteudo .chillds .progresso .cursos .curso-box a{
        
        background-color: #4eacf8ff;
        color: white;
        padding: 4%;
        border-radius: 10px;

    }

</style>

    <main class="conteudo">

        <section class="chillds">

            <section class="progresso">

                <section class="caixa1">

                    <img src="img/marketing.png" alt=""><br>
                    <progress value="45" max="100"></progress><br>
                    <a href="#">Continuar</a>

                </section>
                
                <section class="caixa1">

                    <img src="img/html.png" alt=""><br>
                    <progress value="25" max="100">0%</progress><br>
                    <a href="#">Continuar</a>

                </section>
                
                <section class="caixa1">

                    <img src="img/pitao.png" alt=""><br>
                    <progress value="85" max="100">0%</progress><br>
                    <a href="#">Continuar</a>

                </section>

            </section>

            <section class="cursos" style="background: linear-gradient(-229deg, #0D1F4A, #004b8a); padding: 10%;">

                @for ($i = 0; $i <= 5; $i++)
                
                <section class="curso-box">
                    
                    <img src="img/laravel.png" alt="">
                    <h1>Laravel</h1>
                    <a href="#" id="ver">Ver Também</a>
                    
                </section>

                @endfor

            </section>

            <section class="capacita">
                <img src="icon/coding.png" alt="">
                <h1 style="color: white;">Capacitações</h1><br>
                <p id="capacita">FullStack: <b style="color: red;">Dev junior</b> </p>
                <p id="capacita">Programador: <b style="color: red;">Conceitos Básicos</b> </p>
                <p id="capacita">Designer: <b style="color: red;">Avançado</b> </p>
            </section>

            <section class="aviso">
                <h1>Veja antes de Tudo</h1><br>
                <iframe width="100%" height="415" src="https://www.youtube-nocookie.com/embed/PJvA-BVxxv8?si=zFksFh2PVcKcm977" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </section>

            <section class="novidades">

            </section>

        </section>
    </main>

@endsection