<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOABCODE | Tecnología con Propósito</title>
    <meta name="description" content="MOABCODE ofrece tecnología empresarial con desarrollo web, facturación electrónica, automatización y soporte técnico premium.">
    <meta name="keywords" content="Desarrollo de software en Perú, Facturación electrónica SUNAT, Automatización de procesos, Página web corporativa, Soporte técnico empresarial, Hosting y dominios">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta property="og:title" content="MOABCODE | Tecnología con Propósito">
    <meta property="og:description" content="Soluciones tecnológicas premium para empresas, con desarrollo web, facturación electrónica, automatización y soporte integral.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1200&q=80">
    <meta name="theme-color" content="#0A1F44">
    <style>
        :root {
            --brand-primary: #0A1F44;
            --brand-accent: #D4AF37;
            --brand-accent-dark: #b38f2c;
            --bg-surface: #f8fafc;
            --bg-muted: #eff3f7;
            --text-default: #0f172a;
            --text-muted: #64748b;
            --radius: 24px;
            --gutter: 24px;
            --transition: 250ms ease;
            --max-width: 1240px;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin:0; font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; color: var(--text-default); background: #f8fafc; }
        img { max-width:100%; display:block; }
        a { color: inherit; text-decoration:none; }
        .container { width:min(100%, calc(100% - 40px)); max-width: var(--max-width); margin:0 auto; }
        header { position:sticky; top:0; z-index:30; backdrop-filter: blur(18px); background: rgba(255,255,255,0.88); border-bottom:1px solid rgba(15,23,42,0.08); }
        .nav-header { display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 0; flex-wrap:wrap; }
        .nav-brand { display:flex; align-items:center; gap:12px; flex:0 1 auto; min-width:0; }
        .nav-brand img { max-width:190px; max-height:90px; width:auto; height:auto; object-fit:contain; }
        .nav-menu { display:flex; align-items:center; gap:24px; flex-wrap:wrap; }
        .nav-link { color: var(--text-default); font-weight:600; transition: color var(--transition); }
        .nav-link:hover { color: var(--brand-accent); }
        .nav-actions { display:flex; gap:12px; flex-wrap:wrap; }
        .menu-toggle { display:none; border:none; background: rgba(10,31,68,0.08); color: var(--brand-primary); width:48px; height:48px; border-radius:16px; cursor:pointer; align-items:center; justify-content:center; flex-shrink:0; margin-left:auto; }
        .menu-toggle span { display:block; width:22px; height:2px; background: currentColor; position:relative; transition: transform var(--transition); }
        .menu-toggle span::before, .menu-toggle span::after { content:''; position:absolute; width:22px; height:2px; background: currentColor; left:0; transition: transform var(--transition); }
        .menu-toggle span::before { top:-7px; }
        .menu-toggle span::after { top:7px; }
        .hero { position:relative; background: linear-gradient(180deg, rgba(10,31,68,0.88), rgba(10,31,68,0.72)), url('https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat; color:#fff; overflow:hidden; }
        .hero::after { content:''; position:absolute; inset:0; background: radial-gradient(circle at 20% 20%, rgba(212,175,55,0.18), transparent 14%), radial-gradient(circle at 85% 15%, rgba(255,255,255,0.12), transparent 14%); pointer-events:none; }
        .hero-content { position:relative; z-index:1; padding: 100px 0 84px; }
        .hero-badge { display:inline-flex; align-items:center; gap:10px; padding:12px 18px; border-radius:999px; background: rgba(255,255,255,0.16); color:#f8fafc; font-size:0.95rem; letter-spacing:0.05em; text-transform:uppercase; }
        .hero h1 { margin:24px 0 18px; max-width:760px; font-size: clamp(2.7rem, 5vw, 4.4rem); line-height:1.02; letter-spacing:-0.04em; }
        .hero p { margin:0 auto 32px; max-width:700px; color: rgba(255,255,255,0.9); font-size:1.05rem; line-height:1.85; }
        .hero-actions { display:flex; flex-wrap:wrap; gap:16px; justify-content:center; }
        .btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; padding:16px 24px; border-radius:16px; font-weight:700; border:1px solid transparent; transition: transform var(--transition), box-shadow var(--transition), background var(--transition), color var(--transition); text-decoration:none; }
        .btn:hover { transform: translateY(-2px); box-shadow:0 20px 30px rgba(10,31,68,0.18); }
        .btn-primary { background: var(--brand-primary); color:#fff; }
        .btn-secondary { background: rgba(10,31,68,0.08); color: var(--brand-primary); border-color: transparent; }
        .btn-secondary:hover { background: rgba(10,31,68,0.12); }
        .hero-actions .btn { min-width:180px; }
        .hero-panel { margin-top:48px; display:grid; place-items:center; }
        .hero-card { width:min(100%, 760px); border-radius: 28px; background: rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.16); padding:32px 34px; box-shadow: 0 40px 90px rgba(15,23,42,0.16); backdrop-filter: blur(18px); }
        .hero-card p { margin:0; font-size:1rem; color: rgba(255,255,255,0.92); }
        .hero-metrics { display:grid; grid-template-columns: repeat(4,minmax(0,1fr)); gap:18px; margin-top:64px; }
        .hero-metric { padding:26px 22px; border-radius: 26px; background: rgba(255,255,255,0.08); border:1px solid rgba(255,255,255,0.14); text-align:center; }
        .hero-metric strong { display:block; font-size:2.35rem; line-height:1; margin-bottom:10px; color:#fff; }
        .hero-metric span { display:block; color: rgba(255,255,255,0.8); font-size:0.95rem; }
        .section { padding: 100px 0; }
        .section.title-top { padding-top: 120px; }
        .section-title { text-align:center; max-width:760px; margin:0 auto 48px; }
        .section-title h2 { margin:0; font-size: clamp(2rem, 3vw, 3rem); line-height:1.05; }
        .section-title p { margin:16px auto 0; color: var(--text-muted); font-size:1rem; line-height:1.8; }
        .glass-card { background: rgba(255,255,255,0.82); border:1px solid rgba(255,255,255,0.68); backdrop-filter: blur(18px); border-radius:28px; box-shadow:0 28px 80px rgba(15,23,42,0.12); }
        .grid-3 { display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:24px; }
        .grid-2 { display:grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap:24px; }
        .service-card, .case-card, .faq-card, .process-card, .plan-card { position:relative; overflow:hidden; border-radius:28px; background:#fff; border:1px solid rgba(15,23,42,0.08); box-shadow:0 24px 64px rgba(15,23,42,0.06); padding:30px; transition: transform var(--transition), box-shadow var(--transition); }
        .service-card:hover, .case-card:hover, .plan-card:hover { transform: translateY(-6px); box-shadow:0 34px 90px rgba(15,23,42,0.12); }
        .service-icon, .value-mark, .process-step { width:60px; height:60px; border-radius:18px; display:grid; place-items:center; background: linear-gradient(135deg,var(--brand-primary),#1f3f70); color:#fff; font-size:1.4rem; margin-bottom:18px; }
        .service-card h3, .case-card h3, .plan-card h3, .process-card h3 { margin:0 0 16px; font-size:1.2rem; color: var(--brand-primary); }
        .service-card p, .case-card p, .plan-card p, .process-card p { margin:0; color: var(--text-muted); line-height:1.75; }
        .tag { display:inline-flex; align-items:center; gap:8px; padding:10px 16px; border-radius:999px; background:#eef2ff; color:#1f3f70; font-size:0.9rem; font-weight:700; }
        .benefits-grid, .client-grid, .tech-grid, .faq-grid { display:grid; gap:24px; }
        .benefits-grid { grid-template-columns: repeat(3,minmax(0,1fr)); }
        .client-carousel { display:flex; gap:20px; overflow:hidden; scroll-behavior:smooth; padding:12px 0; }
        .client-slide { min-width:170px; min-height:110px; border-radius:24px; background:#fff; border:1px solid rgba(15,23,42,0.08); display:grid; place-items:center; color:#334155; font-weight:700; letter-spacing:0.08em; text-transform:uppercase; }
        .client-line { display:flex; gap:20px; animation: slideClients 30s linear infinite; }
        @keyframes slideClients { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
        .stats-grid { display:grid; grid-template-columns: repeat(4,minmax(0,1fr)); gap:20px; }
        .stats-card { padding:26px 24px; border-radius:28px; background: linear-gradient(180deg, #0A1F44, #153662); color:#fff; box-shadow:0 24px 60px rgba(10,31,68,0.18); }
        .stats-card span { display:block; font-size:1.4rem; color: rgba(255,255,255,0.8); margin-top:10px; }
        .stats-count { font-size:2.8rem; font-weight:800; }
        .tech-grid { grid-template-columns: repeat(5,minmax(0,1fr)); }
        .tech-pill { padding:14px 18px; border-radius:999px; background:#fff; border:1px solid rgba(15,23,42,0.08); color:#0f172a; font-weight:700; text-align:center; }
        .faq-grid { grid-template-columns: repeat(2,minmax(0,1fr)); }
        .faq-card h3 { margin-bottom:14px; }
        .faq-card p { color: var(--text-muted); }
        .plan-card { display:flex; flex-direction:column; gap:18px; }
        .plan-card strong { display:block; font-size:3rem; color: var(--brand-primary); }
        .plan-card ul { list-style:none; margin:0; padding:0; display:grid; gap:12px; }
        .plan-card li { display:flex; align-items:center; gap:10px; color: var(--text-muted); }
        .plan-card li::before { content:'✔'; color: var(--brand-accent); }
        .map-frame { width:100%; min-height:320px; border:0; border-radius:28px; }
        .footer-grid { display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:32px; padding:64px 0 24px; }
        .footer-brand p { margin:18px 0 0; color: var(--text-muted); max-width:360px; }
        .footer-list { list-style:none; margin:0; padding:0; display:grid; gap:12px; }
        .footer-list li { margin:0; }
        .footer-list a { color: var(--text-muted); }
        .footer-list a:hover { color: var(--brand-accent); }
        .footer-note { padding:24px 0 40px; color: var(--text-muted); text-align:center; border-top:1px solid rgba(15,23,42,0.08); }
        .floating-wa { position:fixed; right:20px; bottom:28px; z-index:50; display:inline-flex; align-items:center; gap:10px; padding:14px 18px; border-radius:999px; background: #25D366; color:#fff; font-weight:700; box-shadow:0 24px 50px rgba(10,31,68,0.18); text-decoration:none; }
        .floating-wa svg { width:22px; height:22px; fill:#fff; }
        .process-grid { display:grid; grid-template-columns: repeat(5,minmax(0,1fr)); gap:24px; }
        .back-to-top { position: fixed; right:20px; bottom:100px; z-index:40; width:48px; height:48px; border-radius:50%; border:none; background: var(--brand-primary); color:#fff; display:grid; place-items:center; cursor:pointer; box-shadow:0 20px 40px rgba(10,31,68,0.16); opacity:0; visibility:hidden; transition: opacity var(--transition), visibility var(--transition); }
        .back-to-top.show { opacity:1; visibility:visible; }
        .aos { opacity:0; transform:translateY(28px); transition: opacity 0.9s ease, transform 0.9s ease; }
        .aos-animate { opacity:1; transform: translateY(0); }
        .glass-card { background: rgba(255,255,255,0.85); }
        .contact-grid { display:grid; grid-template-columns: 1.2fr 0.8fr; gap:24px; }
        .contact-card { min-height:320px; }
        .contact-form input, .contact-form textarea { width:100%; padding:16px 18px; border:1px solid rgba(15,23,42,0.16); border-radius:18px; background:#fff; color:#0f172a; }
        .contact-form textarea { min-height:180px; resize:vertical; }
        .hero .label-pill { padding:12px 18px; }
        @media (max-width:1080px) { .hero-metrics, .stats-grid { grid-template-columns: repeat(2,minmax(0,1fr)); } .grid-3, .benefits-grid, .client-grid, .tech-grid, .faq-grid { grid-template-columns: repeat(2,minmax(0,1fr)); } .process-grid { grid-template-columns: repeat(2,minmax(0,1fr)); } }
        @media (max-width:780px) { .nav-header { flex-direction:row; align-items:center; justify-content:space-between; } .nav-brand { flex:0 0 auto; } .menu-toggle { display:flex; } .nav-menu { display:none; width:100%; flex-direction:column; gap:14px; border-top:1px solid rgba(15,23,42,0.08); padding-top:16px; margin-top:16px; } .nav-menu.open { display:flex; } .nav-actions { display:none; width:100%; flex-direction:column; gap:14px; margin-top:16px; } .nav-actions.open { display:flex; } .nav-actions .btn { width:100%; } .hero h1 { font-size:2.8rem; } .hero-metrics, .stats-grid, .grid-3, .benefits-grid, .tech-grid, .faq-grid, .process-grid, .contact-grid, .footer-grid { grid-template-columns: 1fr; } .contact-grid { grid-template-columns: 1fr; } .footer-grid { gap:22px; } }
        @media (max-width:520px) { .hero { padding: 88px 0 60px; } .hero h1 { font-size:2.4rem; } .nav-actions .btn, .btn { width:100%; justify-content:center; } }
    </style>
</head>
<body>
    <a class="floating-wa" href="https://wa.me/51912354795?text=Hola%20MOABCODE%20quiero%20una%20cotización" target="_blank" rel="noopener">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.52 3.48a11.8 11.8 0 0 0-16.68 0 11.92 11.92 0 0 0 0 16.85l-1.5 5.5 5.69-1.49a11.96 11.96 0 0 0 6.53 1.93 11.88 11.88 0 0 0 8.43-3.49 11.82 11.82 0 0 0 0-16.84Zm-2.49 14.33c-.68.68-3.95 1.94-6.95.82a9.05 9.05 0 0 1-5.33-5.34c-1.1-2.98.12-6.28.81-6.96.68-.67 2.04-.25 3.95 1.19a3.65 3.65 0 0 1 2.46 3.87 3.65 3.65 0 0 1-1.52 2.37c-.45.3-.64.39-1.16.16a11.2 11.2 0 0 1-2.9-1.86c-.2-.17-.43-.28-.22-.55.18-.24.4-.55.57-.74.18-.21.36-.45.54-.67.18-.22.28-.37.45-.51a1.26 1.26 0 0 0 .1-.13c.18-.23.07-.4-.05-.56-.12-.16-1.3-3.13-1.78-4.05-.46-.87-1-.76-1.35-.77-.35-.02-.75-.02-1.15-.02a1.51 1.51 0 0 0-1.08.5 1.68 1.68 0 0 0-.44 1.14c0 .7.58 1.81 1.24 2.22.69.43 1.9 2.05 2.05 2.23.15.18.25.37.05.62-.2.24-.32.38-.6.6-.28.22-.58.49-.82.74-.25.25-.55.43-.34.82.22.39.96 1.56 2.06 2.55 1.38 1.28 2.55 1.64 2.94 1.81.41.18.82.15 1.13.09.34-.07 1.67-.68 1.9-.84.23-.16 1.45-.87 1.69-1.3.23-.43.23-.8.16-.88-.07-.08-.94-.14-1.62-.46Z"/></svg>
        WhatsApp
    </a>
    <header>
        <div class="container nav-header">
            <a class="nav-brand" href="{{ url('/') }}" aria-label="MOABCODE">
                <img src="{{ asset('images/logo.png') }}" alt="MOABCODE logo">
            </a>
            <button class="menu-toggle" aria-expanded="false" aria-controls="nav-menu" type="button" id="mobileMenuToggle">
                <span></span>
            </button>
            <nav class="nav-menu" aria-label="Menú principal" id="nav-menu">
                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                <a class="nav-link" href="#servicios">Servicios</a>
                <a class="nav-link" href="#proceso">Proceso</a>
                <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                <a class="nav-link" href="#contacto">Contacto</a>
            </nav>
            <div class="nav-actions">
                <a class="btn btn-secondary" href="https://wa.me/51912354795?text=Hola%20MOABCODE%20quiero%20una%20cotización" target="_blank" rel="noopener">WhatsApp</a>
                <a class="btn btn-primary" href="#contacto">Solicitar Cotización</a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container hero-content">
                <span class="hero-badge">Tecnología con propósito</span>
                <h1 class="aos" data-aos="fade-up">Soluciones tecnológicas empresariales que impulsan ventas, productividad y operaciones.</h1>
                <p class="aos" data-aos="fade-up" data-aos-delay="120">Desarrollo web premium, facturación electrónica SUNAT, automatización de procesos y soporte técnico para empresas que buscan rendimiento real.</p>
                <div class="hero-actions aos" data-aos="fade-up" data-aos-delay="220">
                    <a class="btn btn-primary" href="#servicios">Ver servicios</a>
                    <a class="btn btn-secondary" href="#contacto">Cotizar ahora</a>
                </div>
                <div class="hero-panel aos" data-aos="fade-up" data-aos-delay="320">
                    <div class="hero-card">
                        <p><strong>Diseño, desarrollo y resultados:</strong> soluciones a medida para empresas, con enfoque en crecimiento, seguridad y experiencia de usuario.</p>
                    </div>
                </div>
                <div class="hero-metrics aos" data-aos="fade-up" data-aos-delay="420">
                    <div class="hero-metric"><strong data-counter="15">0</strong><span>Empresas atendidas</span></div>
                    <div class="hero-metric"><strong data-counter="25">0</strong><span>Proyectos realizados</span></div>
                    <div class="hero-metric"><strong data-counter="5">0</strong><span>Años de experiencia</span></div>
                    <div class="hero-metric"><strong data-counter="24">0</strong><span>Soporte 24/7</span></div>
                </div>
            </div>
        </section>

        <section id="servicios" class="section">
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Servicios corporativos diseñados para crecer</h2>
                    <p>Soluciones tecnológicas integrales con calidad premium, estrategia y soporte continuo para pymes, empresas y organizaciones.</p>
                </div>
                <div class="grid-3">
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="120">
                        <div class="service-icon">💻</div>
                        <h3>Desarrollo web a medida</h3>
                        <p>Plataformas personalizadas para ventas, CRM, logística y operaciones que potencian tu flujo comercial.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="180">
                        <div class="service-icon">🧾</div>
                        <h3>Facturación electrónica</h3>
                        <p>Integración SUNAT con factura, boleta y notas de crédito automáticas, seguridad fiscal y validación en tiempo real.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="240">
                        <div class="service-icon">⚙️</div>
                        <h3>Automatización empresarial</h3>
                        <p>Flujos, macros y sincronizaciones que eliminan tareas manuales y liberan tiempo para lo estratégico.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-icon">🌐</div>
                        <h3>Páginas corporativas</h3>
                        <p>Websites premium con imagen de marca, contenidos conversion-friendly y estructura SEO para posicionamiento.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="360">
                        <div class="service-icon">🛒</div>
                        <h3>E-commerce</h3>
                        <p>Tiendas online confiables, fáciles de administrar y conectadas con pagos, catálogo y stock.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="420">
                        <div class="service-icon">🛡️</div>
                        <h3>Soporte e infraestructura</h3>
                        <p>Hosting, dominios, servidores y atención técnica con disponibilidad, actualizaciones y confianza.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" style="background: var(--bg-surface);">
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Clientes y casos de éxito</h2>
                    <p>Empresas que crecieron con soluciones tecnológicas, procesos más eficientes y soporte especializado.</p>
                </div>
                <div class="client-carousel aos" data-aos="fade-up" data-aos-delay="120">
                    <div class="client-line">
                        <div class="client-slide">Banco</div>
                        <div class="client-slide">Retail</div>
                        <div class="client-slide">Logística</div>
                        <div class="client-slide">Educación</div>
                        <div class="client-slide">Salud</div>
                        <div class="client-slide">Industria</div>
                        <div class="client-slide">Agencia</div>
                        <div class="client-slide">Fintech</div>
                        <div class="client-slide">Banco</div>
                        <div class="client-slide">Retail</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="proceso" class="section">
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Proceso de trabajo</h2>
                    <p>Un camino claro desde la idea hasta la operación, con entregas constantes y enfoque en resultados.</p>
                </div>
                <div class="process-grid">
                    <article class="process-card aos" data-aos="fade-up" data-aos-delay="120">
                        <div class="process-step">1</div>
                        <h3>Descubrimiento</h3>
                        <p>Recolectamos requerimientos, objetivos y contexto para definir prioridades y alcance.</p>
                    </article>
                    <article class="process-card aos" data-aos="fade-up" data-aos-delay="180">
                        <div class="process-step">2</div>
                        <h3>Diseño</h3>
                        <p>UX, UI y experiencia estratégica que consolidan la propuesta visual y funcional.</p>
                    </article>
                    <article class="process-card aos" data-aos="fade-up" data-aos-delay="240">
                        <div class="process-step">3</div>
                        <h3>Desarrollo</h3>
                        <p>Construimos con metodologías ágiles, con calidad, pruebas y entregas parciales.</p>
                    </article>
                    <article class="process-card aos" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-step">4</div>
                        <h3>Implementación</h3>
                        <p>Despliegue seguro, configuración de entorno y pruebas de funcionamiento reales.</p>
                    </article>
                    <article class="process-card aos" data-aos="fade-up" data-aos-delay="360">
                        <div class="process-step">5</div>
                        <h3>Soporte</h3>
                        <p>Monitoreo, mantenimiento y mejoras continuas para mantener el rendimiento presente y futuro.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="nosotros" class="section" style="background: linear-gradient(180deg, rgba(255,255,255,1), rgba(248,250,252,1));">
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Sobre MOABCODE</h2>
                    <p>Una empresa tecnológica con propósito: creamos sistemas, páginas y automatizaciones para empresas que quieren crecer con seguridad.</p>
                </div>
                <div class="grid-3">
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="120">
                        <h3>Misión</h3>
                        <p>Impulsar el crecimiento digital con soluciones tecnológicas confiables, seguras y alineadas a los objetivos del negocio.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="180">
                        <h3>Visión</h3>
                        <p>Ser un partner tecnológico reconocido por su calidad, compromiso y capacidad para transformar ideas en resultados reales.</p>
                    </article>
                    <article class="service-card aos" data-aos="fade-up" data-aos-delay="240">
                        <h3>Valores</h3>
                        <p>Integridad, excelencia, servicio y propósito en cada proyecto y cada interacción con nuestros clientes.</p>
                    </article>
                </div>
                <div class="tech-grid aos" data-aos="fade-up" data-aos-delay="320">
                    <span class="tech-pill">PHP</span>
                    <span class="tech-pill">Laravel</span>
                    <span class="tech-pill">JavaScript</span>
                    <span class="tech-pill">MySQL</span>
                    <span class="tech-pill">Docker</span>
                    <span class="tech-pill">Linux</span>
                    <span class="tech-pill">WordPress</span>
                    <span class="tech-pill">API REST</span>
                    <span class="tech-pill">SUNAT</span>
                </div>
            </div>
        </section>

        // NOMBERTO Esta sección de planes empresariales está oculta por ahora, pero se puede activar fácilmente eliminando el atributo "hidden" y ajustando los contenidos según sea necesario.
        <section class="section" hidden>
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Planes empresariales</h2>
                    <p>Paquetes diseñados para dar respuesta inmediata a tu nivel de proyecto y presupuesto.</p>
                </div>
                <div class="grid-3">
                    <article class="plan-card aos" data-aos="fade-up" data-aos-delay="120">
                        <h3>Base</h3>
                        <strong>S/ 2,200</strong>
                        <p>Ideal para proyectos iniciales que requieren una presencia corporativa moderna.</p>
                        <ul>
                            <li>Landing page profesional</li>
                            <li>Soporte básico</li>
                            <li>Optimización SEO inicial</li>
                        </ul>
                        <a class="btn btn-primary" href="#contacto">Elegir plan</a>
                    </article>
                    <article class="plan-card aos" data-aos="fade-up" data-aos-delay="180">
                        <h3>Profesional</h3>
                        <strong>S/ 5,500</strong>
                        <p>Para empresas que necesitan sistemas a medida, facturación y soporte confiable.</p>
                        <ul>
                            <li>Web corporativa + integraciones</li>
                            <li>Facturación electrónica SUNAT</li>
                            <li>Soporte y mantenimiento</li>
                        </ul>
                        <a class="btn btn-primary" href="#contacto">Elegir plan</a>
                    </article>
                    <article class="plan-card aos" data-aos="fade-up" data-aos-delay="240">
                        <h3>Premium</h3>
                        <strong>S/ 8,900</strong>
                        <p>Solución completa para empresas que buscan automatización, infraestructura y crecimiento digital.</p>
                        <ul>
                            <li>Sistemas empresariales</li>
                            <li>Infraestructura y seguridad</li>
                            <li>Soporte 24/7</li>
                        </ul>
                        <a class="btn btn-primary" href="#contacto">Elegir plan</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="section" style="background: var(--bg-surface);">
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Preguntas frecuentes</h2>
                    <p>Respuestas claras para dudas comunes sobre nuestros servicios y procesos.</p>
                </div>
                <div class="faq-grid">
                    <article class="faq-card aos" data-aos="fade-up" data-aos-delay="120">
                        <h3>¿En cuánto tiempo entregan un proyecto?</h3>
                        <p>El tiempo varía según el alcance. Un proyecto web corporativo suele tomar 4-8 semanas y un sistema empresarial puede tomar más según integraciones.</p>
                    </article>
                    <article class="faq-card aos" data-aos="fade-up" data-aos-delay="180">
                        <h3>¿Trabajan con facturación electrónica SUNAT?</h3>
                        <p>Sí, integramos facturación electrónica con SUNAT en plataformas existentes o en soluciones nuevas, manteniendo cumplimiento fiscal.</p>
                    </article>
                    <article class="faq-card aos" data-aos="fade-up" data-aos-delay="240">
                        <h3>¿Qué soporte ofrecen después de la entrega?</h3>
                        <p>Ofrecemos planes de soporte técnico, mantenimiento, actualizaciones y acompañamiento operativo según tu necesidad.</p>
                    </article>
                    <article class="faq-card aos" data-aos="fade-up" data-aos-delay="300">
                        <h3>¿Cómo protegen los datos y sistemas?</h3>
                        <p>Implementamos buenas prácticas de seguridad, backups, accesos restringidos y infraestructura estable para reducir riesgos.</p>
                    </article>
                </div>
            </div>
        </section>

        <section id="contacto" class="section">
            <div class="container">
                <div class="section-title aos" data-aos="fade-up">
                    <h2>Contacto y cotización rápida</h2>
                    <p>Habla con nuestro equipo, solicita una propuesta y recibe un plan claro según tu empresa.</p>
                </div>
                <div class="contact-grid">
                    <article class="contact-card aos" data-aos="fade-up" data-aos-delay="120">
                        <h3>Información de contacto</h3>
                        <p><strong>WhatsApp:</strong> <a href="https://wa.me/51912354795?text=Hola%20MOABCODE%20quiero%20una%20cotización" target="_blank" rel="noopener">+51 912 354 795</a></p>
                        <p><strong>Correo ventas:</strong> <a href="mailto:ventas@moabcode.com">ventas@moabcode.com</a></p>
                        <p><strong>Soporte:</strong> <a href="mailto:soporte@moabcode.com">soporte@moabcode.com</a></p>
                        <p><strong>Ubicación:</strong> Lima, Perú</p>
                        <div style="margin-top:24px; display:grid; gap:14px;">
                            <span class="tag">Presencia regional</span>
                            <span class="tag">Soporte empresarial</span>
                            <span class="tag">Consultoría tecnológica</span>
                        </div>
                    </article>
                    <form id="quoteForm" class="contact-card contact-form aos" data-aos="fade-up" data-aos-delay="180" action="{{ route('clientescotizaron.store') }}" method="post">
                        @csrf
                        <div id="quoteMessage"></div>
                        @if(session('status'))
                            <div class="alert alert-success" style="margin-bottom:16px; padding:14px 18px; background:#e6ffed; border:1px solid #a7f3d0; color:#065f46; border-radius:16px;">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger" style="margin-bottom:16px; padding:14px 18px; background:#fee2e2; border:1px solid #fca5a5; color:#991b1b; border-radius:16px;">
                                <strong>Por favor corrige los siguientes campos:</strong>
                                <ul style="margin:8px 0 0 16px; padding:0; list-style: disc;">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="nombre">Nombre completo
                            <input id="nombre" name="nombre" type="text" placeholder="Tu nombre" value="{{ old('nombre') }}" required>
                        </label>
                        <label for="empresa">Empresa
                            <input id="empresa" name="empresa" type="text" placeholder="Tu empresa" value="{{ old('empresa') }}" required>
                        </label>
                        <label for="telefono">Teléfono
                            <input id="telefono" name="telefono" type="tel" placeholder="+51 9xx xxx xxx" value="{{ old('telefono') }}" required>
                        </label>
                        <label for="correo">Correo electrónico
                            <input id="correo" name="correo" type="email" placeholder="tu@empresa.com" value="{{ old('correo') }}">
                        </label>
                        <label for="mensaje">Mensaje
                            <textarea id="mensaje" name="mensaje" placeholder="Cuéntanos tu proyecto" required>{{ old('mensaje') }}</textarea>
                        </label>
                        <button class="btn btn-primary" type="submit">Enviar solicitud</button>
                    </form>
                </div>
                <div class="section-title" style="margin-top:56px;">
                    <h3>Ubicación</h3>
                </div>
                <iframe class="map-frame" src="https://www.openstreetmap.org/export/embed.html?bbox=-77.03%2C-12.08%2C-76.97%2C-12.03&amp;layer=mapnik" aria-label="Mapa de ubicación"></iframe>
            </div>
        </section>
    </main>

    <button class="back-to-top" id="backToTop" aria-label="Volver arriba">↑</button>

    @include('partials.footer')

    <script>
        const toggle = document.getElementById('mobileMenuToggle');
        const navMenu = document.getElementById('nav-menu');
        const navActions = document.querySelector('.nav-actions');
        const navLinks = document.querySelectorAll('.nav-menu .nav-link');
        const actionLinks = document.querySelectorAll('.nav-actions a');
        const backToTop = document.getElementById('backToTop');
        const aosElements = document.querySelectorAll('.aos');
        const counterEls = document.querySelectorAll('[data-counter]');
        const heroSection = document.querySelector('.hero');

        const setMenuState = (open) => {
            if (!navMenu) return;
            navMenu.classList.toggle('open', open);
            if (navActions) navActions.classList.toggle('open', open);
            if (toggle) toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        };

        if (toggle && navMenu) {
            toggle.addEventListener('click', () => {
                const isOpen = !navMenu.classList.contains('open');
                setMenuState(isOpen);
            });
        }

        [...navLinks, ...actionLinks].forEach((link) => {
            link.addEventListener('click', () => setMenuState(false));
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('aos-animate');
                    if (entry.target.hasAttribute('data-counter')) {
                        const target = +entry.target.getAttribute('data-counter');
                        const step = Math.ceil(target / 60);
                        let current = 0;
                        const interval = setInterval(() => {
                            current += step;
                            if (current >= target) {
                                entry.target.textContent = target;
                                clearInterval(interval);
                                return;
                            }
                            entry.target.textContent = current;
                        }, 20);
                    }
                }
            });
        }, { threshold: 0.2 });

        aosElements.forEach(el => observer.observe(el));
        counterEls.forEach(el => observer.observe(el));

        window.addEventListener('scroll', () => {
            const y = window.scrollY;
            if (heroSection) heroSection.style.backgroundPosition = `center ${y * 0.2}px`;
            if (backToTop) {
                if (y > 320) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            }
        });

        if (backToTop) {
            backToTop.addEventListener('click', () => {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }

        const quoteForm = document.getElementById('quoteForm');
        const quoteMessage = document.getElementById('quoteMessage');

        if (quoteForm) {
            quoteForm.addEventListener('submit', async (event) => {
                event.preventDefault();
                quoteMessage.innerHTML = '';

                const formData = new FormData(quoteForm);
                const token = quoteForm.querySelector('input[name="_token"]').value;

                try {
                    const response = await fetch(quoteForm.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token,
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: formData,
                    });

                    const data = await response.json();

                    if (!response.ok) {
                        const errors = data.errors ? Object.values(data.errors).flat() : [data.message || 'Ocurrió un error.'];
                        quoteMessage.innerHTML = `<div style="margin-bottom:16px; padding:14px 18px; background:#fee2e2; border:1px solid #fca5a5; color:#991b1b; border-radius:16px;"><strong>Por favor corrige los siguientes campos:</strong><ul style="margin:8px 0 0 16px; padding:0; list-style: disc;">${errors.map(error => `<li>${error}</li>`).join('')}</ul></div>`;
                        return;
                    }

                    quoteMessage.innerHTML = `<div style="margin-bottom:16px; padding:14px 18px; background:#e6ffed; border:1px solid #a7f3d0; color:#065f46; border-radius:16px;">${data.message}</div>`;
                    quoteForm.reset();
                } catch (error) {
                    quoteMessage.innerHTML = `<div style="margin-bottom:16px; padding:14px 18px; background:#fee2e2; border:1px solid #fca5a5; color:#991b1b; border-radius:16px;">Ocurrió un error al enviar la solicitud. Intenta de nuevo.</div>`;
                }
            });
        }
    </script>
</body>
</html>
