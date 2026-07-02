<style>
    /* Reset básico */
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Arial, sans-serif;
    min-height: 100vh;
    background: rgba(26, 32, 44, 0.95);
    text-align: center;
    overflow-y: hidden;
}

#a {
    color: #fff;
    padding: 6px 14px;
    border-radius: 6px;
    background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
    font-weight: bold;
    text-decoration: none;
    transition: background 0.3s;
}
#a:hover {
    background: linear-gradient(90deg, #43cea2 0%, #185a9d 100%);
}

.content2 {
    background: url(/img/fundo.png) center;
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
    width: 90vw;
    max-width: 1200px;
    min-height: 80vh;
    margin: 10px auto;
    border-radius: 18px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    padding: 2% 2%;
    gap: 2%;
}

.content .video {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

video {
    width: 100%;
    height: 400px;
    border-radius: 12px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.25);
    border: none;
    background: #000;
}

.list {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    height: 400px;
    overflow-y: auto;
    background: rgba(34, 40, 49, 0.95);
    border-radius: 12px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.18);
    padding: 24px 18px;
    gap: 18px;
}

.listvideo {
    display: flex;
    align-items: center;
    gap: 14px;
    width: 100%;
    padding: 10px 0;
    border-bottom: 1px solid #333;
    cursor: pointer;
    transition: background 0.2s;
}
.listvideo:last-child {
    border-bottom: none;
}
.listvideo:hover {
    background: rgba(102, 126, 234, 0.08);
    border-radius: 8px;
}

.listvideo img {
    width: 80px;
    height: 48px;
    object-fit: cover;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.12);
    background-size: cover;
    background-position: center;
}

.listvideo .title {
    font-size: 1.1rem;
    color: #000000ff;
    font-weight: 500;
}

@media (max-width: 900px) {
    .content2 {
        flex-direction: column;
        width: 98vw;
        padding: 2% 1%;
    }
    .content .video, .list {
        width: 100%;
        height: 260px;
    }
    video {
        height: 220px;
    }
}
</style>

    <main class="content2">
        <h2 style="color: white; width: 100%; text-align: center;">Introdução ao Curso de {{ $Courses->title }}<h2><br>
        <section class="video">
            <video src="/video/palestra.mp4" controls ></video>
        </section>   
        
        <a href="/" style="color: black; text-decoration: none; width: 100%; text-align: center; box-shadow: 10px 10px solid black;">
            <abbr title="Home">
                <img src="/img/Hand Cursor.png" alt="" id="a"  style="transform: rotate(180deg); width: 80px;">
            </abbr>
        </a>

        <section class="list">
            
            <section class="listvideo">
                <img src="/images/courses/{{ $Courses->image }}" alt="">
                <a href="#" id="a">Aula - 01 do Curso de {{ $Courses->title }} (Instalando Visual Studio)</a>
            </section>

            
        </section>  
        
        
    </main>