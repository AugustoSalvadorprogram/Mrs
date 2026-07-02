<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/course.css">
    <title>Document</title>
</head>
<body>

<main class="container1">
    
    
    <form action="/addcourse" method="post" enctype="multipart/form-data">
        @csrf
        <img src="/images/courses/{{ $Courses->image }}" alt="" width="100px">
        <input type="file" name="video" id="image">
        <input type="number" name="id" id="id" value="{{ $Courses->id }}" hidden>

        <label for="course_name">Titulo:</label>
        <input type="text" id="course_name" name="title" required><br><br>
        <a href="/">Voltar</a>
    
        <button type="submit" id="add">Adicionar Aula</button><br><br>

    </form>
    <p class="msg">
        @if (session('msg'))
            {{ session('msg') }}        
        @endif
    </p>

    
</main>

<main>

    <table border="1" cellspacing="10" cellspadding="10" width="100%" style="color: white; font-size: 16pt;">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Video-Aula</th>
            <th>Ações</th>
        </tr>
        
        <tr>
            <td>1</td>
            <td>Aula - 01 do Curso de Laravel (Instalando Visual Studio)</td>
            <td>
                <video src="/video/marketing.mp4" controls width="120px"></video>
            </td>
            <td>
                <a href="editcourse/{{ $Courses->id }}" id="edit">Editar</a>
                <form action="/addcourse/{{ $Courses->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="del">Eliminar</button>
                </form>
            </td>
        </tr>
    </table>
    
</main>

</body>
</html>