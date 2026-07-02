<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/course.css">
    <title>Document</title>
</head>
<body>

<main class="container1">
    
    
    <form action="/addcourseindex" method="post" enctype="multipart/form-data">
        @csrf
        
        <input type="file" name="image" id="image">
        <input type="number" name="id" id="id" value="0" hidden>

        <label for="course_name">Nome do Curso:</label>
        <input type="text" id="course_name" name="title" required><br><br>
    
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" required></textarea><br><br>
    
        <label for="description">Instrutor:</label>
        <input id="description" name="instructor" required></input><br><br>
    
        <label for="duration">Data do Lançamento:</label>
        <input type="date" id="duration" name="date" required><br><br>
        
        <label for="duration">Duração (in hours):</label>
        <input type="number" id="duration" name="duration" required><br><br>
        <a href="/">Voltar</a>
    
        <button type="submit" id="add">Adicionar Curso</button><br><br>

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
            <th>Descrição</th>
            <th>Instrutor</th>
            <th>Data</th>
            <th>Duração</th>
            <th>Ações</th>
        </tr>
        @foreach ($Cursos as $Curso)
        
        <tr>
            <td>{{ $Curso->id }}</td>
            <td>{{ $Curso->title }}</td>
            <td>{{ $Curso->description }}</td>
            <td>{{ $Curso->instructor }}</td>
            <td>{{ $Curso->date }}</td>
            <td>{{ $Curso->duration }} Horas</td>
            <td>
                <a href="#" id="add" 
                style="width: 100%; padding: 10px; background: #0275b8; border: none; color: white; font-size: 16px; border-radius: 5px; cursor: pointer;">Ver</a>
                <a href="editcourse/{{ $Curso->id }}" id="edit">Editar</a>
                <form action="/addcourse/{{ $Curso->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="del">Eliminar</button>
                </form>
            </td>
        </tr>
    
        @endforeach
    </table>
    
</main>

</body>
</html>