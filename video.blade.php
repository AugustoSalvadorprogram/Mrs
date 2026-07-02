<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Player de Vídeo Elegante</title>
  <style>
    :root{
      --bg:#0f1724;
      --card:#0b1220;
      --accent:#6ee7b7; /* verde suave */
      --accent-2:#60a5fa; /* azul suave */
      --glass: rgba(255,255,255,0.06);
      --muted: rgba(255,255,255,0.65);
      --radius: 14px;
    }

    /* Reset simples */
    *{box-sizing:border-box;margin:0;padding:0}
    html,body{height:100%;background:linear-gradient(180deg,#071126 0%, #0b1220 100%);font-family:Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;display:flex;align-items:center;justify-content:center;padding:32px;color:#e6eef8}

    /* Card do player */
    .video-card{
      width:min(980px, 94%);
      background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
      border-radius: calc(var(--radius) + 6px);
      box-shadow: 0 10px 30px rgba(2,6,23,0.75), inset 0 1px 0 rgba(255,255,255,0.02);
      padding:18px;
      display:grid;
      gap:14px;
      align-items:center;
    }

    /* Container responsivo do vídeo */
    .video-wrap{
      position:relative;
      overflow:hidden;
      border-radius: var(--radius);
      background: linear-gradient(135deg, rgba(6,9,22,0.9), rgba(12,18,28,0.9));
      box-shadow: 0 8px 24px rgba(3,8,20,0.6);
      aspect-ratio: 16/9;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    video{
      width:100%;
      height:100%;
      object-fit:cover;
      display:block;
      filter: contrast(1.02) saturate(1.05);
      border-radius: inherit;
      background: #000;
    }

    /* Overlay escuro para dar contraste aos botões */
    .video-overlay{
      position:absolute;inset:0;
      background: linear-gradient(180deg, rgba(0,0,0,0.0) 10%, rgba(0,0,0,0.35) 100%);
      pointer-events:none;
      border-radius:inherit;
    }

    /* Botão grande de play no centro */
    .play-btn{
      position:absolute;
      left:50%;
      top:50%;
      transform:translate(-50%,-50%);
      width:84px;height:84px;
      border-radius:50%;
      display:grid;
      place-items:center;
      background: linear-gradient(135deg, rgba(255,255,255,0.06), rgba(255,255,255,0.02));
      border: 1px solid rgba(255,255,255,0.06);
      box-shadow: 0 6px 20px rgba(2,6,23,0.6);
      cursor:pointer;
      transition:transform .18s ease, opacity .18s ease;
      pointer-events:auto;
      backdrop-filter: blur(6px);
    }
    .play-btn:hover{ transform:translate(-50%,-50%) scale(1.06) }
    .play-btn.hidden{ opacity:0; transform:translate(-50%,-50%) scale(.9 ); pointer-events:none }

    .play-icon{
      width:0;height:0;
      border-left:20px solid var(--accent);
      border-top:12px solid transparent;
      border-bottom:12px solid transparent;
      filter: drop-shadow(0 3px 8px rgba(0,0,0,0.5));
    }

    /* Barra de controles personalizada */
    .controls{
      display:flex;
      gap:12px;
      align-items:center;
      padding:10px;
      background: linear-gradient(180deg, rgba(255,255,255,0.01), rgba(255,255,255,0.02));
      border-radius: 12px;
      border: 1px solid rgba(255,255,255,0.03);
      box-shadow: 0 4px 18px rgba(3,8,20,0.5);
    }

    .left-controls, .center-controls, .right-controls{
      display:flex;align-items:center;gap:10px;
    }
    .left-controls{flex:0 0 auto}
    .center-controls{flex:1 1 auto; gap:8px}
    .right-controls{flex:0 0 auto}

    button.ctrl{
      background:var(--glass);
      border: none;
      color:var(--muted);
      padding:8px;
      border-radius:10px;
      display:inline-grid;place-items:center;
      cursor:pointer;
      min-width:40px;height:40px;
      transition:transform .12s ease, background .12s;
    }
    button.ctrl:hover{ transform:translateY(-2px); color:white }
    button.ctrl:active{ transform:translateY(0) }

    /* Barra de progresso */
    .progress{
      height:8px;
      background: rgba(255,255,255,0.06);
      border-radius:8px;
      position:relative;
      width:100%;
      overflow:hidden;
      cursor:pointer;
    }
    .progress .filled{
      height:100%;
      width:0%;
      background: linear-gradient(90deg, var(--accent) 0%, var(--accent-2) 100%);
      border-radius:8px;
      transition: width .08s linear;
    }

    /* Tempo / volume */
    .time{ font-size:13px;color:var(--muted); min-width:68px; text-align:center }
    input[type="range"]{
      height:6px;border-radius:6px;background:transparent;
    }
    input[type="range"]::-webkit-slider-thumb{
      -webkit-appearance:none;width:14px;height:14px;border-radius:50%;background:var(--accent);
      box-shadow:0 3px 10px rgba(0,0,0,0.45);
      border: 2px solid rgba(255,255,255,0.07);
    }

    /* Legenda pequena abaixo */
    .meta{
      display:flex;justify-content:space-between;align-items:center;gap:12px;color:rgba(255,255,255,0.75);
      font-size:13px;padding:0 4px;
    }

    /* Responsividade */
    @media (max-width:640px){
      .play-btn{ width:68px;height:68px }
      .time{ font-size:12px }
      button.ctrl{ min-width:36px;height:36px;padding:6px;border-radius:9px }
    }
  </style>
</head>
<body>
  <main class="video-card" aria-label="Player de Vídeo Elegante">
    <div class="video-wrap">
      <!-- Vídeo: o atributo controls está oculto; usaremos controles customizados -->
      <video id="video" preload="metadata" poster="poster.jpg" tabindex="0">
        <source src="lp.mp4" type="video/mp4">
        Seu navegador não suporta a tag de vídeo.
      </video>

      <div class="video-overlay" aria-hidden="true"></div>

      <!-- Botão play central -->
      <button class="play-btn" id="bigPlay" aria-label="Reproduzir">
        <span class="play-icon" aria-hidden="true"></span>
      </button>
    </div>

    <!-- Controles personalizados -->
    <div class="controls" role="region" aria-label="Controles do vídeo">
      <div class="left-controls">
        <button class="ctrl" id="playPause" title="Reproduzir / Pausar" aria-pressed="false">⏵/⏸</button>
      </div>

      <div class="center-controls">
        <div class="progress" id="progress" aria-label="Barra de progresso">
          <div class="filled" id="progressBar"></div>
        </div>
      </div>

      <div class="right-controls">
        <div class="time" id="time">00:00 / 00:00</div>
        <input type="range" id="volume" min="0" max="1" step="0.05" value="0.8" title="Volume" aria-label="Volume"/>
        <button class="ctrl" id="fsBtn" title="Tela cheia">⛶</button>
      </div>
    </div>

    <div class="meta">
      <div>🎬 Exemplo: Treinamento interno</div>
      <div style="opacity:.8;font-size:13px">Qualidade: 1080p • Duração adaptável</div>
    </div>
  </main>

  <script>
    // Seletores
    const video = document.getElementById('video');
    const bigPlay = document.getElementById('bigPlay');
    const playPause = document.getElementById('playPause');
    const progress = document.getElementById('progress');
    const progressBar = document.getElementById('progressBar');
    const timeDisplay = document.getElementById('time');
    const volume = document.getElementById('volume');
    const fsBtn = document.getElementById('fsBtn');

    // Util: formatar tempo em mm:ss
    function formatTime(s){
      if (!isFinite(s)) return '00:00';
      const m = Math.floor(s/60).toString().padStart(2,'0');
      const sec = Math.floor(s%60).toString().padStart(2,'0');
      return m + ':' + sec;
    }

    // Atualizar elementos quando metadata carregada
    video.addEventListener('loadedmetadata', () => {
      timeDisplay.textContent = `00:00 / ${formatTime(video.duration)}`;
    });

    // Play/pause comum
    function togglePlay(){
      if (video.paused || video.ended){
        video.play();
      } else {
        video.pause();
      }
    }

    bigPlay.addEventListener('click', () => {
      togglePlay();
    });

    playPause.addEventListener('click', () => {
      togglePlay();
    });

    // Atualizar UI quando play/pausa
    video.addEventListener('play', () => {
      bigPlay.classList.add('hidden');
      playPause.textContent = '⏸';
      playPause.setAttribute('aria-pressed','true');
    });
    video.addEventListener('pause', () => {
      bigPlay.classList.remove('hidden');
      playPause.textContent = '⏵';
      playPause.setAttribute('aria-pressed','false');
    });

    // Atualizar progresso
    video.addEventListener('timeupdate', () => {
      const pct = (video.currentTime / video.duration) * 100;
      progressBar.style.width = pct + '%';
      timeDisplay.textContent = `${formatTime(video.currentTime)} / ${formatTime(video.duration)}`;
    });

    // Clique na barra para seek
    progress.addEventListener('click', (e) => {
      const rect = progress.getBoundingClientRect();
      const pos = (e.clientX - rect.left) / rect.width;
      video.currentTime = pos * video.duration;
    });

    // Volume
    volume.addEventListener('input', (e) => {
      video.volume = parseFloat(e.target.value);
    });
    // Inicializar volume
    video.volume = parseFloat(volume.value);

    // Fullscreen
    fsBtn.addEventListener('click', async () => {
      const container = video.closest('.video-wrap');
      if (!document.fullscreenElement) {
        if (container.requestFullscreen) await container.requestFullscreen();
        else if (container.webkitRequestFullscreen) container.webkitRequestFullscreen();
      } else {
        if (document.exitFullscreen) await document.exitFullscreen();
      }
    });

    // Teclas de atalho básicas
    document.addEventListener('keydown', (e) => {
      const tag = document.activeElement.tagName.toLowerCase();
      if (tag === 'input') return; // não atrapalha sliders
      if (e.key === ' ' || e.key === 'k') { e.preventDefault(); togglePlay(); }
      if (e.key === 'ArrowRight') video.currentTime = Math.min(video.duration, video.currentTime + 5);
      if (e.key === 'ArrowLeft') video.currentTime = Math.max(0, video.currentTime - 5);
      if (e.key === 'f') {
        fsBtn.click();
      }
      if (e.key === 'm') video.muted = !video.muted;
    });

    // Esconder bigPlay se o usuário clicar no próprio vídeo
    video.addEventListener('click', togglePlay);

    // Acessibilidade: focus styles
    document.querySelectorAll('button, input').forEach(el=>{
      el.addEventListener('focus', ()=> el.style.outline = '2px solid rgba(96,165,250,0.18)');
      el.addEventListener('blur', ()=> el.style.outline = 'none');
    });

    // Em dispositivos móveis, remover pointer cursor dos botões para toque mais natural
    document.addEventListener('touchstart', function(){ document.documentElement.style.cursor = 'default'; }, {passive:true});
  </script>
</body>
</html>
