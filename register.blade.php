<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/MRS-Logo1.png" type="image/x-icon">
    <title>M.R.S</title>
    <style>
        @keyframes scroll
{
    from{
        transform: scale(1.5);
        opacity: 0;
        scale: 0.5;
    }
    top{
        opacity: 1;
        scale: 1;
    }
}

@keyframes faid{
    from{
        opacity: 0;
        scale: 10.5;
        translate: 100vw 0;
    }
    to{
        opacity: 1;
        scale: 1;
        translate: 0 0;
    }
}
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            animation: scroll linear;
            animation-timeline: view();
            animation-range: entry 0 cover 50%;
            animation: faid 2s;
        }
        body{
            background: linear-gradient(-29deg, #0D1F4A, #004b8a);
            background-position: left;
            background-repeat: no-repeat;
            background-size: 100%;
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
            line-height: 2;
            margin: auto;
            
        }
        .container{
            display: flex;
            background-color: rgb(248, 255, 255);
            width: 80%;
            height: 80vh;
            border-radius: 40px;
            box-shadow: 100px 200px 200px rgba(0, 0, 0, 0.404);
        }
        
        .container .imag{
            background-image: url(img/IMG-20250623-WA0009.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
            width: 60%;
            height: 80vh;
            border-radius: 40px;
            opacity: 90%;
        }

        .container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 500px;
            padding: 4%;
        }

        .input{
            border-radius: 10px;
            width: 300px;
            height: 40px;
            background-position: right;
            background-repeat: no-repeat;
            background-size: 20px;
            border: 1px solid #aeb2b663;
        }
        
        .input::selection{
            transition: 2s;
            
        }
        
        .email{
            background-image: url(img/User.png);            
        }

        .senha{
            background-image: url(img/Password.png);            
        }
        .nif{
            background-image: url(img/aplicativo.png);
            background-color: transparent;
            background-position: right;
            background-repeat: no-repeat;
            background-size: 20px;
            border: none;  
            border-bottom: 3px solid #00000063;    
            height: 40px;
        }

        .nif:checked{
            border: none;
        }

        .container form h1{
            color: #0D1F4A;
            font-size: 40pt;
            font-variant: small-caps;
        }

        button{
            height: 50px;
            width: 300px;
            background-color: #0D1F4A;
            border-radius: 100px;
            color: white;
            cursor: pointer;
        }
        button:hover{
            background-color: #3a3b3d;
            color: #ffffff;
            border: 0;
        }

        .container form .a{
            text-decoration: none;
            color: #76b5e9;
            border: 2px solid #76b5e9;
            border-radius: 40px;
            text-align: center;
        }
        .container form .a:hover{
            background-color: #76b5e9;
            color: white;
            transition: 1s;
        }
    </style>
</head>
<body>

    <section class="container">
        <section class="imag">

        </section>
        <form action="/register" method="post">
            @csrf
            <h1>Cadastro</h1><br>
            <a href="/" style="color: #0D1F4A;">Voltar</a>
            <a class="a" href="login.html">Entrar</a><br>
            <input type="number" name="id" id="" value="0" hidden>
            <label for="Name">Nome:</label>
            <input  class="input email" type="name" name="name" id="" placeholder="   Digite o seu Nome " required>
            <label for="Email">Email:</label>
            <input class="input senha" type="email" name="email" id="" placeholder="   Digite o Seu Email " required>
            <label for="Password">Senha:</label>
            <input class="nif" type="password" name="password" id="" placeholder="   Digite a Sua Senha" required><br>
            <button type="submit">Cadastrar-se</button><br>
            <section style="width: 100%; text-align: center;">
                <a class="rec" href="recuperar.html" style="color: #0D1F4A" >Esqueceu a Sua Senha?</a>
            </section>
        </form>
    </section>
    
</body>
</html>