@extends('layout.layouts')
@section('title', 'title')
@section('contents')

<style>

    .contents{
        width: 100%;
        margin: 4% 0% 3% 0%;
    }

    .contents .chilldren{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
    }

    .contents .chilldren .box{
        width: 30%;
        padding: 2%;
        border: 1px solid #999a9c33;
        margin-top: 2%;
        text-align: center;
        transition: 0.3s all ease-in-out;
        border-radius: 20px;
    }
    
    .contents .chilldren .box:hover{
        background: #0D1F4A;
        color: #fff;
        cursor: pointer;
    }

    .contents .chilldren .box img{
        width: 200px;
    }

    .contents .chilldren .box img:hover{
        transform: scale(1.3);
        transition: 0.3s all ease-in-out;
    }

    .contents .chilldren .box h1{
        color: #0D1F4A;
    }

    .contents .chilldren .box a{
        background: #1c85e7;
    color: white;
    padding: 2%;
    border-radius: 3px;
    text-decoration: none;
    font-weight: bold;
    transition: background 0.3s;
    }

    .contents .chilldren .box a:hover{
        transform: scale(2.1);
    }

</style>

    <main class="contents">
        <h1 style="background-color: #0D1F4A; color: white; padding: 2%; text-align: center;">Os nossos Cursos</h1>
            <section class="chilldren">
            @foreach ($Courses as $courses)
                
                <div class="box">
                    <img src="images/courses/{{ $courses->image }}" alt="Curso 1" width="80">
                    <h1><!--Curso de Programação-->{{ $courses->title }}</h1>
                    <p>Formador: {{ $usuario['name'] }}</p>
                    <p>Data de Lançamento: {{ $courses->date }}</p>
                    <p><!--Aprenda lógica, algoritmos e as principais linguagens do mercado.--> {{ $courses->description }}</p>
                    <p>Duração: {{ $courses->duration }} Horas</p><br>
                    <a href="/{{ $courses->id }}" class="explorar">Saiba Mais</a>
                </div>

                @endforeach
        </section>
        <section>
            <script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"MRS-COLABORADORES","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"244956648722","welcomeMessage":"Entre em Contato Connosco","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
      
        </section>
    </main>

@endsection