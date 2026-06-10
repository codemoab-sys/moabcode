<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - MOABCODE</title>
    <meta name="description" content="Conoce la historia, misión, visión y valores de MOABCODE. Soluciones tecnológicas empresariales con propósito y resultados.">
    <style>
        :root { --bg: #f7f9fc; --surface: #ffffff; --text: #0f172a; --muted: #64748b; --brand-primary: #0B1F3A; --brand-accent: #D4AF37; --brand-dark: #071126; --transition: 200ms ease; }
        * { box-sizing:border-box; }
        html { scroll-behavior:smooth; }
        body { margin:0; font-family: Inter, system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif; color: var(--text); background: var(--bg); }
        img { max-width:100%; display:block; }
        a { color: inherit; text-decoration:none; }
        .container { width:min(100%, calc(100% - 40px)); max-width:1200px; margin:0 auto; }
        header { position: sticky; top:0; z-index:20; backdrop-filter: blur(14px); background: rgba(255,255,255,0.96); border-bottom:1px solid rgba(15,23,42,0.08); }
        .nav-header { display:flex; align-items:center; justify-content:space-between; gap:16px; padding:18px 0; flex-wrap:wrap; }
        .nav-top { display:flex; align-items:center; justify-content:space-between; width:100%; gap:16px; }
        .nav-brand { display:flex; align-items:center; gap:12px; }
        .nav-brand img,
        .footer-brand img {
            max-width:140px;
            max-height:72px;
            width:auto;
            height:auto;
            object-fit:contain;
        }
        .footer-brand { display:flex; flex-direction:column; gap:18px; align-items:flex-start; }
        .menu-toggle { display:none; border:none; background: rgba(10,31,68,0.08); color: var(--brand-primary); width:48px; height:48px; border-radius:16px; cursor:pointer; align-items:center; justify-content:center; }
        .menu-toggle span { display:block; width:22px; height:2px; background: currentColor; position:relative; transition: transform var(--transition); }
        .menu-toggle span::before, .menu-toggle span::after { content:''; position:absolute; width:22px; height:2px; background: currentColor; left:0; transition: transform var(--transition); }
        .menu-toggle span::before { top:-7px; }
        .menu-toggle span::after { top:7px; }
        .nav-menu { display:flex; gap:28px; flex-wrap:wrap; align-items:center; }
        .nav-menu.open { display:flex; }
        .nav-link { color: var(--text); font-weight:600; transition: color var(--transition); }
        .nav-link:hover { color: var(--brand-accent); }
        .nav-actions { display:flex; gap:12px; flex-wrap:wrap; }
        .nav-actions.open { display:flex; }
        .btn { display:inline-flex; align-items:center; justify-content:center; gap:10px; padding:14px 22px; border-radius:999px; font-weight:700; transition: transform var(--transition), background-color var(--transition); }
        .btn-primary { background: linear-gradient(135deg, var(--brand-accent), #b58f2a); color:#fff; }
        .btn-primary:hover { transform: translateY(-2px); }
        .btn-secondary { color: var(--brand-primary); border:2px solid var(--brand-primary); background:#fff; }
        .hero { padding: 88px 0 50px; }
        .hero-header { display:grid; grid-template-columns: 1.1fr 0.9fr; gap:40px; align-items:center; }
        .hero-title { margin:0; font-size: clamp(2.5rem, 4vw, 3.6rem); line-height:1.02; }
        .hero-text { margin:24px 0 0; max-width: 660px; color: var(--muted); font-size:1.05rem; line-height:1.9; }
        .hero-list { margin:24px 0 0; display:grid; gap:14px; }
        .hero-card { border-radius:28px; background: #fff; border:1px solid rgba(15,23,42,0.08); padding:32px; box-shadow:0 24px 48px rgba(15,23,42,0.06); }
        .section { padding: 72px 0; }
        .section-title { max-width:700px; margin-bottom:32px; }
        .section-title h2 { margin:0 0 14px; font-size: clamp(2rem, 3vw, 2.8rem); line-height:1.05; }
        .section-title p { margin:0; color: var(--muted); font-size:1rem; line-height:1.8; }
        .grid-2 { display:grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap:24px; }
        .grid-3 { display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:24px; }
        .feature-card { background:#fff; border-radius:24px; border:1px solid rgba(15,23,42,0.08); padding:28px; box-shadow:0 20px 40px rgba(15,23,42,0.05); }
        .feature-card h3 { margin:0 0 12px; color: var(--brand-primary); }
        .feature-card p { margin:0; color: var(--muted); line-height:1.75; }
        .label-pill { display:inline-flex; align-items:center; gap:8px; padding:10px 16px; border-radius:999px; background: rgba(212,175,55,0.12); color: #7c5c08; font-weight:700; font-size:0.95rem; }
        .list-clean { list-style:none; margin:0; padding:0; display:grid; gap:12px; }
        .list-clean li { padding-left:24px; position:relative; color: var(--text); line-height:1.8; }
        .list-clean li::before { content:'•'; position:absolute; left:0; color: var(--brand-accent); }
        .brand-swatches { display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:18px; }
        .swatch { border-radius:24px; padding:26px; color:#fff; min-height:160px; display:grid; gap:14px; }
        .swatch strong { display:block; font-size:1rem; letter-spacing:0.06em; }
        .footer { padding:48px 0 24px; background:#061226; color:#cbd5e1; }
        .footer-grid { display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:24px; }
        .footer-list { list-style:none; margin:0; padding:0; display:grid; gap:12px; }
        .footer-list a { color: #cbd5e1; text-decoration:none; }
        .footer-note { margin-top:28px; color:#94a3b8; font-size:0.95rem; }
        @media (max-width:960px) { .hero-header { grid-template-columns: 1fr; } .grid-2, .grid-3, .brand-swatches { grid-template-columns: 1fr; } }
        @media (max-width:720px) { .menu-toggle { display:flex; } .nav-menu { display:none; width:100%; flex-direction:column; gap:16px; margin-top:16px; border-top:1px solid rgba(15,23,42,0.08); padding-top:16px; } .nav-menu.open { display:flex; } .nav-actions { display:none; width:100%; flex-direction:column; gap:14px; margin-top:16px; } .nav-actions.open { display:flex; } .nav-actions .btn { width:100%; } .hero { padding-top:60px; } }
    </style>
</head>
<body>
    <header>
        <div class="container nav-header">
            <div class="nav-top">
                <a class="nav-brand" href="{{ url('/') }}" aria-label="MOABCODE">
                    <img src="{{ asset('images/logo.png') }}" alt="MOABCODE logo">
                </a>
                <button class="menu-toggle" aria-expanded="false" aria-controls="nav-menu" type="button" id="mobileMenuToggle">
                    <span></span>
                </button>
            </div>
            <nav class="nav-menu" aria-label="Menú principal" id="nav-menu">
                <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                <a class="nav-link" href="{{ url('/') }}#servicios">Servicios</a>
                <a class="nav-link" href="{{ url('/nosotros') }}">Nosotros</a>
                <a class="nav-link" href="{{ url('/') }}#contacto">Contacto</a>
            </nav>
            <div class="nav-actions">
                <a class="btn btn-secondary" href="https://wa.me/51912354795?text=Hola%20MOABCODE%20quiero%20una%20cotización" target="_blank" rel="noopener">WhatsApp</a>
                <a class="btn btn-primary" href="{{ url('/') }}#contacto">Solicitar Cotización</a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container hero-header">
                <div>
                    <span class="label-pill">Nosotros / Historia</span>
                    <h1 class="hero-title">Conoce el propósito y la visión que impulsa a MOABCODE.</h1>
                    <p class="hero-text">MOABCODE es una empresa de tecnología enfocada en el desarrollo de software, sistemas empresariales, páginas web corporativas y soluciones integrales para empresas de todos los tamaños. Nuestra prioridad es crear tecnología con propósito, seguridad y resultados.</p>
                    <div class="hero-list">
                        <p><strong>Identidad clara:</strong> profesionalismo, excelencia y confianza en cada proyecto.</p>
                        <p><strong>Equipo comprometido:</strong> experiencia técnica y servicio personalizado.</p>
                        <p><strong>Impacto real:</strong> soluciones que optimizan procesos y generan crecimiento.</p>
                    </div>
                </div>
                <div class="hero-card">
                    <h3>Marca y valores</h3>
                    <p>MOABCODE construye tecnología con propósito, integridad, servicio y excelencia. Cada solución está pensada para dar resultados claros y sostenibles a empresas, emprendedores e instituciones.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Nuestra Historia</h2>
                    <p>MOABCODE nace con el propósito de brindar soluciones tecnológicas confiables, innovadoras y orientadas a resultados. Fue fundado por un ingeniero con visión de servir y generar impacto positivo a través de la tecnología.</p>
                </div>
                <div class="grid-2">
                    <div class="feature-card">
                        <h3>Origen con propósito</h3>
                        <p>Después de una experiencia transformadora, nuestro fundador decidió emprender con una misión clara: desarrollar tecnología que no solo funcione, sino que también genere valor para las empresas y sus clientes.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Compromiso con el cliente</h3>
                        <p>Desde el primer proyecto, MOABCODE se ha enfocado en soluciones a medida, diseño estratégico, soporte técnico y un servicio cercano que brinda seguridad a cada cliente.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" style="background:#ffffff;">
            <div class="container">
                <div class="section-title">
                    <h2>Misión, Visión y Valores</h2>
                    <p>Con una propuesta sólida, MOABCODE se posiciona como socio tecnológico para empresas que requieren calidad, confianza y desarrollo sostenible.</p>
                </div>
                <div class="grid-2">
                    <div class="feature-card">
                        <h3>Misión</h3>
                        <p>Desarrollar soluciones tecnológicas innovadoras que impulsen el crecimiento de nuestros clientes, brindando calidad, confianza y un servicio personalizado.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Visión</h3>
                        <p>Ser reconocidos por transformar ideas en soluciones tecnológicas eficientes, contribuyendo al desarrollo digital de empresas y emprendedores.</p>
                    </div>
                </div>
                <div class="section-title" style="margin-top:48px;">
                    <h2>Valores Corporativos</h2>
                </div>
                <div class="grid-3">
                    <div class="feature-card">
                        <h3>Integridad</h3>
                        <p>Actuamos con ética, honestidad y coherencia profesional en cada decisión y entrega.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Servicio</h3>
                        <p>Ponemos nuestro conocimiento y experiencia al servicio de quienes confían en nosotros.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Excelencia</h3>
                        <p>Trabajamos con disciplina y compromiso para alcanzar los más altos estándares de calidad.</p>
                    </div>
                    <div class="feature-card">
                        <h3>Propósito</h3>
                        <p>Creemos que la tecnología debe generar valor, impulsar el crecimiento y dejar una huella positiva.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Servicios Principales</h2>
                    <p>Ofrecemos una suite de servicios pensada para empresas que buscan digitalizarse con respaldo profesional y enfoque estratégico.</p>
                </div>
                <div class="grid-3">
                    <div class="feature-card"><h3>Desarrollo Web a Medida</h3><p>Plataformas personalizadas para ventas, gestión y procesos internos.</p></div>
                    <div class="feature-card"><h3>Sistemas Empresariales</h3><p>Soluciones integradas para administrar finanzas, operaciones y clientes.</p></div>
                    <div class="feature-card"><h3>Facturación Electrónica SUNAT</h3><p>Implementación segura de facturas, boletas y notas de crédito.</p></div>
                    <div class="feature-card"><h3>Automatización de Procesos</h3><p>Reducimos tareas manuales con flujos automáticos y macros eficientes.</p></div>
                    <div class="feature-card"><h3>Desarrollo de Páginas Corporativas</h3><p>Websites profesionales con diseño premium y estructura SEO.</p></div>
                    <div class="feature-card"><h3>Tiendas Virtuales E-commerce</h3><p>Tiendas online seguras, escalables y fáciles de administrar.</p></div>
                    <div class="feature-card"><h3>Correos Corporativos</h3><p>Configuración profesional para comunicación confiable y segura.</p></div>
                    <div class="feature-card"><h3>Hosting y Dominios</h3><p>Registro, administración y alojamiento estable para tu negocio.</p></div>
                    <div class="feature-card"><h3>Soporte Técnico Empresarial</h3><p>Atención especializada para mantener tu operación online y estable.</p></div>
                </div>
            </div>
        </section>

        <section class="section" style="background:#ffffff;">
            <div class="container">
                <div class="section-title">
                    <h2>Público Objetivo</h2>
                    <p>Atendemos a empresas y organizaciones con necesidades reales de transformación digital, desde emprendedores hasta grandes compañías.</p>
                </div>
                <ul class="list-clean">
                    <li>Emprendedores</li>
                    <li>Pequeñas empresas</li>
                    <li>Medianas empresas</li>
                    <li>Grandes empresas</li>
                    <li>Instituciones educativas</li>
                    <li>Empresas comerciales</li>
                    <li>Empresas industriales</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Objetivo de la Web</h2>
                    <p>La página web debe inspirar confianza, atraer prospectos, mostrar autoridad profesional y convertir visitantes en clientes.</p>
                </div>
                <div class="grid-2">
                    <div class="feature-card"><h3>Generar confianza</h3><p>Contenido claro y diseño profesional para que tu marca sea percibida como experta.</p></div>
                    <div class="feature-card"><h3>Convertir leads</h3><p>Botones de acción y formularios estratégicos para facilitar la comunicación con clientes potenciales.</p></div>
                    <div class="feature-card"><h3>Mostrar autoridad</h3><p>Casos, estructura y mensajes alineados con empresas tecnológicas modernas.</p></div>
                    <div class="feature-card"><h3>Propuesta comercial</h3><p>Venta de servicios tecnológicos con un discurso empresarial convincente.</p></div>
                </div>
            </div>
        </section>

        <section class="section" style="background:#ffffff;">
            <div class="container">
                <div class="section-title">
                    <h2>SEO y Estrategia Digital</h2>
                    <p>Palabras clave enfocadas para buscar clientes en Perú que necesitan soluciones tecnológicas empresariales.</p>
                </div>
                <div class="list-clean">
                    <li>Desarrollo de software en Perú</li>
                    <li>Sistemas web a medida</li>
                    <li>Facturación electrónica SUNAT</li>
                    <li>Desarrollo web profesional</li>
                    <li>Páginas web empresariales</li>
                    <li>Automatización de procesos</li>
                    <li>Soporte técnico empresarial</li>
                    <li>Instalación de cámaras de seguridad</li>
                    <li>Hosting y dominios</li>
                    <li>Sistemas empresariales</li>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="hero-card">
                    <h2>¿Listo para digitalizar tu negocio?</h2>
                    <p>MOABCODE ofrece una propuesta integral para llevar tu empresa al siguiente nivel con soluciones tecnológicas seguras, escalables y hechas a medida.</p>
                    <div style="margin-top:24px; display:flex; flex-wrap:wrap; gap:14px;">
                        <a class="btn btn-primary" href="https://wa.me/51912354795?text=Hola%20MOABCODE%20quiero%20una%20cotización" target="_blank" rel="noopener">Cotizar ahora</a>
                        <a class="btn btn-secondary" href="mailto:ventas@moabcode.com">Escríbenos</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('partials.footer')
    <script>
        const toggle = document.getElementById('mobileMenuToggle');
        const navMenu = document.getElementById('nav-menu');
        const navActions = document.querySelector('.nav-actions');
        const navLinks = document.querySelectorAll('.nav-menu .nav-link');
        const actionLinks = document.querySelectorAll('.nav-actions a');

        const setMenuState = (open) => {
            if (!navMenu) return;
            navMenu.classList.toggle('open', open);
            if (navActions) navActions.classList.toggle('open', open);
            if (toggle) toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        };

        if (toggle && navMenu) {
            toggle.addEventListener('click', () => {
                setMenuState(!navMenu.classList.contains('open'));
            });
        }

        navLinks.forEach((link) => {
            link.addEventListener('click', () => {
                setMenuState(false);
            });
        });

        actionLinks.forEach((link) => {
            link.addEventListener('click', () => {
                setMenuState(false);
            });
        });
    </script>
</body>
</html>
