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
    
    
    <form action="/addcourse" method="post" enctype="multipart/form-data">
        @csrf
        
        <input type="file" name="image" id="image">
        <input type="number" name="id" id="id" value="0" hidden>

        <label for="course_name">Nome do Curso:</label>
        <input type="text" id="course_name" name="title" required><br><br>
    
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" required rows="10"></textarea><br><br>
        
        <label for="instructor">Instrutor:</label>
        <input id="instructor" name="instructor" required><br><br>
        
        <label for="duration">Data do Lançamento:</label>
        <input type="datetime-local" id="duration" name="datetime" required><br><br>
        
        <label for="duration">Duração (in hours):</label>
        <input type="number" id="duration" name="duration" required><br><br>
        <a href="/">Voltar</a>
    
        <button type="submit" id="add">Adicionar Curso</button><br><br>

    </form>
    <p class="msg" style="    background-color: #01b77a; color: white; padding: 4%;">
        @if (session('msg'))
            {{ session('msg') }}        
        @endif
    </p>

    
</main>

<main>

    <table border="1" cellspacing="10" cellspadding="10" width="100%" style="color: white; font-size: 16pt;">
        <tr>
            <th>ID</th>
            <th>Imagem</th>
            <th>Titulo</th>
            <th>Descrição</th>
            <th>Instrutor</th>
            <th>Data</th>
            <th>Duração</th>
            <th>Ações</th>
        </tr>
        @foreach ($Courses as $Course)
        
        <tr>
            <td>{{ $Course->id }}</td>
            <td><img src="/images/courses/{{ $Course->image }}" alt="" width="100px"></td>
            <td>{{ $Course->title }}</td>
            <td>{{ $Course->description }}</td>
            <td>{{ $Course->instructor }}</td>
            <td>{{ $Course->datetime }}</td>
            <td>{{ $Course->duration }} Horas</td>
            <td>
                <a href="addaula/{{ $Course->id }}" id="add" 
                style="width: 100%; padding: 10px; background: #0275b8; 
                border: none; color: white; font-size: 16px; border-radius: 5px; cursor: pointer;">Aulas</a>
                <a href="editcourse/{{ $Course->id }}" id="edit">Editar</a>
                <form action="/addcourse/{{ $Course->id }}" method="post">
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