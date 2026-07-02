<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
      font-family: Arial, sans-serif;
      background: #0f172a;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      overflow-x: hidden;
    }

    .container1 {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      width: 300px;
      text-align: left;
    }

    h2 {
      margin-bottom: 1rem;
      color: #333;
    }

    .form-group{
      padding: 200px;
    }

    input,textarea {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #0275b8;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    
    #edit {
      width: 100%;
      padding: 10px;
      background: #059c00;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }
    
    #del {
      width: 100%;
      padding: 10px;
      background: #df0000;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background: #0f172a;
    }

    a {
      width: 100%;
      display: block;
      margin-top: 10px;
      color: #0f172a;
      text-decoration: none;
      font-size: 14px;
    }

    a:hover {
      text-decoration: underline;
    }
    </style>
</head>
<body>

<main class="container1">
    
    
    <form action="/update/{{ $Courses->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="file" name="image" id="image" value="">
        
        <input type="number" name="id" id="id" value="{{ $Courses->id }}" hidden>

        <img src="/images/courses/{{ $Courses->image }}" alt=""><br>

        <label for="course_name">Nome do Curso:</label>
        <input type="text" id="course_name" name="title" required value="{{ $Courses->title }}"><br><br>
    
        <label for="description">Descrição:</label>
        <textarea id="description" name="description" required placeholder="{{ $Courses->description }} "></textarea><br><br>
    
        <label for="description">Instrutor:</label>
        <input id="description" name="instructor" required value="{{ $Courses->instructor }}"></input><br><br>
    
        <label for="duration">Data do Lançamento:</label>
        <input type="date" id="duration" name="date" required value="{{ $Courses->date }}"><br><br>
        
        <label for="duration">Duração (in hours):</label>
        <input type="number" id="duration" name="duration" required value="{{ $Courses->duration }}"><br><br>
        <a href="/">Voltar</a>
    
        <button type="submit" id="edit">Editar Curso</button><br><br>

    </form>
    <p class="msg">
        @if (session('msg'))
            {{ session('msg') }}        
        @endif
    </p>

    
</main>

