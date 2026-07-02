<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Apresentação do Curso — Domine X</title>
  <style>
    /* ====== Reset básico ====== */
    *{box-sizing:border-box;margin:0;padding:0}
    html,body{height:100%}
    body{
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
      color:#0f172a; /* quase preto */
      background: linear-gradient(-229deg, #0D1F4A, #004b8a);
      -webkit-font-smoothing:antialiased;
      -moz-osx-font-smoothing:grayscale;
      line-height:1.5;
      padding:24px;
      display:flex;
      justify-content:center;
    }

    /* Container central */
    .container{
      width:100%;
      max-width:1100px;
      background:linear-gradient(180deg, rgba(255,255,255,0.85), rgba(255,255,255,0.95));
      border-radius:14px;
      box-shadow:0 10px 30px rgba(2,6,23,0.08);
      overflow:hidden;
    }

    /* ===== Header / Hero ===== */
    .hero{
      display:grid;
      grid-template-columns:1fr 420px;
      gap:24px;
      padding:48px;
      align-items:center;
    }

    .hero-left h1{
      font-size:clamp(28px,4vw,38px);
      line-height:1.05;
      color:#062244;
      margin-bottom:12px;
    }
    .badge{
      display:inline-flex;align-items:center;gap:8px;padding:6px 10px;border-radius:999px;
      background:linear-gradient(90deg,#eef2ff,#e6f7ff);
      color:#0f172a;font-weight:600;font-size:13px;margin-bottom:14px;
    }
    .hero p{color:#334155;margin-bottom:18px}

    .cta-group{display:flex;gap:12px;flex-wrap:wrap}
    .btn{
      display:inline-block;padding:12px 18px;border-radius:10px;font-weight:700;text-decoration:none;cursor:pointer;
      transition:transform .15s ease, box-shadow .15s ease;
      box-shadow:none;border:0;
    }
    .btn-primary{background:linear-gradient(90deg,#2563eb,#7c3aed);color:white}
    .btn-primary:hover{transform:translateY(-3px);box-shadow:0 8px 24px rgba(99,102,241,0.18)}
    .btn-ghost{background:transparent;border:1px solid rgba(15,23,42,0.06);color:#062244;padding:11px 16px}

    /* Card right */
    .card{
      background:linear-gradient(180deg,#ffffff,#fbfdff);
      border-radius:12px;padding:18px;border:1px solid rgba(2,6,23,0.04);
      box-shadow:0 6px 18px rgba(2,6,23,0.04);
    }
    .price{font-size:20px;font-weight:800;color:#0b5cff}
    .meta{font-size:13px;color:#64748b;margin-top:6px}

    /* ===== Features / Curriculum ===== */
    .content{
      padding:36px 48px 48px 48px;display:grid;grid-template-columns:1fr 340px;gap:28px;
    }

    .section{margin-bottom:22px}
    .grid-cards{display:grid;grid-template-columns:repeat(2,1fr);gap:14px}
    .feature{
      background:linear-gradient(180deg,#ffffff,#fbfdff);padding:14px;border-radius:10px;border:1px solid rgba(2,6,23,0.04);
      display:flex;gap:12px;align-items:start;
    }
    .feature svg{flex-shrink:0;margin-top:3px}
    .feature strong{display:block;color:#062244}
    .feature small{display:block;color:#64748b}

    /* Right column */
    .aside{position:relative}
    .instructor{display:flex;gap:12px;align-items:center;margin-bottom:14px}
    .avatar{width:64px;height:64px;border-radius:10px;background:linear-gradient(135deg,#7c3aed,#06b6d4);display:flex;align-items:center;justify-content:center;color:white;font-weight:800}
    .instructor small{display:block;color:#64748b}

    .list{background:#fff;border-radius:10px;padding:12px;border:1px solid rgba(2,6,23,0.04)}
    .list li{padding:10px 0;border-bottom:1px dashed rgba(2,6,23,0.03);color:#334155}
    .list li:last-child{border-bottom:0}

    /* Testimonials */
    .testimonials{margin-top:18px;display:grid;grid-template-columns:1fr 1fr;gap:12px}
    .testimonial{background:linear-gradient(180deg,#fbfbff,#ffffff);padding:12px;border-radius:10px;border:1px solid rgba(2,6,23,0.03)}
    .stars{color:#f59e0b;font-weight:800}

    /* Footer */
    footer{padding:18px 48px;background:linear-gradient(180deg,#f7fbff,transparent);display:flex;justify-content:space-between;align-items:center;border-top:1px solid rgba(2,6,23,0.02)}

    /* Responsividade */
    @media (max-width:980px){
      .hero{grid-template-columns:1fr;}
      .content{grid-template-columns:1fr;}
      .grid-cards{grid-template-columns:1fr}
      .testimonials{grid-template-columns:1fr}
    }

  </style>
</head>
<body>
  <div class="container" role="main" aria-label="Apresentação do curso">

    <!-- HERO -->
    <header class="hero">
      <div class="hero-left">
        
        <div class="badge">Novo • Curso</div><br>
        <img src="images/courses/{{ $Courses->image }}" alt="" width="100px">
        <h1>CURSO DE {{ $Courses->title }}</h1>
        <p><!-- Um curso prático com projetos reais, suporte ao aluno e material atualizado. Ideal para quem quer entrar no mercado e construir um portfólio. --><br>{{ $Courses->description }} </p>

        <div class="cta-group">
          <a class="btn btn-primary" href="/screencourse/{{ $Courses->id }}">Inscrever-se</a>
          <a class="btn btn-ghost" href="#programa">Ver programa</a>
          <a class="btn btn-primary" href="/">Voltar</a>
        </div>
      </div>

      <aside class="card">
        <div style="display:flex;justify-content:space-between;align-items:center">
          <div>
            <div class="price">$129</div>
            <div class="meta">Pagamento único • Acesso vitalício</div>
          </div>
          <div style="text-align:right">
            <svg width="56" height="56" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
              <path d="M12 2L15 8H9L12 2Z" fill="#7c3aed"/>
              <path d="M12 22L9 16H15L12 22Z" fill="#06b6d4"/>
              <circle cx="12" cy="12" r="3" fill="#0ea5e9"/>
            </svg>
          </div>
        </div>

        <hr style="margin:12px 0;border:none;border-top:1px solid rgba(2,6,23,0.03)">

        <div style="display:flex;gap:10px;align-items:center;justify-content:space-between">
          <div style="font-weight:700">Vagas Limitadas</div>
          <div style="font-size:13px;color:#64748b">Início: {{ $Courses->date }}</div>
        </div>

        <ul class="list" style="margin-top:14px">
          <li>8 módulos práticos</li>
          <li>Projetos semanais</li>
          <li>Certificado digital</li>
        </ul>

      </aside>
    </header>

    <!-- CONTENT -->
    <section class="content">
      <div>
        <div class="section">
          <h2 style="margin-bottom:10px;color:#062244">O que você vai aprender</h2>
          <div class="grid-cards">
            <div class="feature">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><circle cx="12" cy="12" r="10" stroke="#c7d2fe" stroke-width="2"/><path d="M8 12l2 2 4-4" stroke="#4f46e5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <div>
                <strong>Fundamentos sólidos</strong>
                <small>Conceitos essenciais para começar com confiança.</small>
              </div>
            </div>

            <div class="feature">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><rect x="3" y="3" width="18" height="14" rx="2" stroke="#c7f9ff" stroke-width="2"/><path d="M7 17v2h10v-2" stroke="#06b6d4" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <div>
                <strong>Projetos práticos</strong>
                <small>Trabalhe em tarefas com aplicabilidade real.</small>
              </div>
            </div>

            <div class="feature">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M12 2l3 7h-6l3-7z" fill="#fde68a"/><path d="M12 22l-3-7h6l-3 7z" fill="#f97316"/></svg>
              <div>
                <strong>Mentoria ao vivo</strong>
                <small>Encontros semanais para tirar dúvidas.</small>
              </div>
            </div>

            <div class="feature">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="M4 7h16v10H4z" stroke="#e2e8f0" stroke-width="2"/><circle cx="12" cy="12" r="1.8" fill="#60a5fa"/></svg>
              <div>
                <strong>Comunidade ativa</strong>
                <small>Grupo para trocar ideias e parcerias.</small>
              </div>
            </div>
          </div>
        </div>

        <div id="programa" class="section">
          <h2 style="margin-bottom:10px;color:#062244">Programa do curso</h2>
          <ol style="padding-left:18px;color:#334155;line-height:1.8">
            <li>Módulo 1 — Introdução e ferramentas</li>
            <li>Módulo 2 — Conceitos básicos e prática guiada</li>
            <li>Módulo 3 — Projeto 1 (aplicação real)</li>
            <li>Módulo 4 — Técnicas avançadas</li>
            <li>Módulo 5 — Projeto final</li>
            <li>Módulo 6 — Preparação para o mercado</li>
          </ol>
        </div>

        <div class="section">
          <h2 style="margin-bottom:10px;color:#062244">Depoimentos</h2>
          <div class="testimonials">
            <div class="testimonial">
              <div class="stars">★★★★★</div>
              <p style="margin-top:8px;color:#334155">"O curso mudou minha forma de trabalhar — consegui um emprego 2 meses depois."</p>
              <small style="display:block;margin-top:8px;color:#64748b">— Marta S., ex-aluna</small>
            </div>

            <div class="testimonial">
              <div class="stars">★★★★★</div>
              <p style="margin-top:8px;color:#334155">"Conteúdo direto ao ponto, tudo prático e aplicável."</p>
              <small style="display:block;margin-top:8px;color:#64748b">— João P., Freelancer</small>
            </div>
          </div>
        </div>

      </div>

      <!-- COLUNA DIREITA -->
      <aside class="aside">
        <div class="instructor">
          <div class="avatar">AS</div>
          <div>
            <div style="font-weight:800;color:#062244">{{ $usuario['name'] }}</div>
            <small>Instrutor principal • 10+ anos de experiência</small>
          </div>
        </div>

        <div class="card" style="padding:12px;margin-bottom:14px">
          <h3 style="margin-bottom:8px;color:#062244">Inclui</h3>
          <ul style="color:#334155;list-style:none;padding-left:0">
            <li>✅ Aulas gravadas</li>
            <li>✅ Material em PDF</li>
            <li>✅ Acesso ao grupo fechado</li>
            <li>✅ Certificado digital</li>
          </ul>
        </div>

        <div class="card" style="padding:12px">
          <h3 style="margin-bottom:8px;color:#062244">Detalhes</h3>
          <div style="font-size:14px;color:#334155">
            <strong>Formato:</strong> Online • Assíncrono + Mentoria ao vivo<br>
            <strong>Duração:</strong> {{ $Courses->duration }} Semanas<br>
            <strong>Nível:</strong> Iniciante → Avançado
          </div>
        </div>

      </aside>
    </section>

    <footer>
      <div>
        <strong>Domine X</strong>
        <div style="font-size:13px;color:#64748b">Transforme conhecimento em resultados</div>
      </div>

      <div style="display:flex;gap:12px;align-items:center">
        <a class="btn btn-ghost" href="#">Termos</a>
        <a class="btn btn-ghost" href="#">Contato</a>
      </div>
    </footer>

  </div>
</body>
</html>
