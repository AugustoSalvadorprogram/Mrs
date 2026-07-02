@extends('layout.layout')
@section('title', 'Detalhes do Curso')
@section('content')

<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        height: 80vh;
    }
    .container3 {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        background-color: #f4f4f4;
    }

    video {
        width: 40%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
</style>

<main class="container3">
    
    <video src="img/curso.mp4"></video>
        
</main>

@endsection
