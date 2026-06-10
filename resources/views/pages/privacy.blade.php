@extends('layouts.app')

@section('content')
    <style>
        .legal-shell { max-width: 1080px; margin: 0 auto; padding: 48px 20px 64px; }
        .legal-hero { background: linear-gradient(135deg, var(--brand-primary) 0%, #083bb8 100%); color: #fff; border-radius: 18px; padding: 32px; box-shadow: 0 18px 45px rgba(10,31,68,0.14); }
        .legal-pill { display:inline-block; background: rgba(255,255,255,0.12); color:#fff; padding: 6px 12px; border-radius:999px; font-size:0.85rem; font-weight:700; margin-bottom: 12px; }
        .legal-hero h1 { margin: 0 0 10px; font-size: clamp(2rem, 3vw, 2.8rem); line-height:1.1; }
        .legal-hero p { margin: 0; color: rgba(255,255,255,0.9); max-width: 760px; }
        .legal-meta { display:flex; gap:10px; flex-wrap:wrap; margin-top:18px; }
        .legal-meta span { background: rgba(255,255,255,0.1); border:1px solid rgba(255,255,255,0.14); color:#fff; padding:8px 12px; border-radius:999px; font-size:0.9rem; }
        .legal-grid { display:grid; grid-template-columns: 1fr; gap:16px; margin-top: 22px; }
        .legal-card { background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:22px; box-shadow: 0 10px 30px rgba(15,23,42,0.04); }
        .legal-card h2 { margin: 0 0 12px; color: var(--brand-primary); font-size:1.15rem; }
        .legal-card p { margin: 0; color:#475569; line-height:1.75; }
        .legal-card ul { margin: 0; padding-left: 18px; color:#475569; line-height:1.75; }
        .legal-card li + li { margin-top:8px; }
        .legal-notice { background:#fff8e6; border:1px solid #f1d38a; color:#7c5a00; border-radius:14px; padding:16px 18px; margin-top:16px; }
        .legal-actions { display:flex; gap:12px; flex-wrap:wrap; margin-top:18px; }
        .legal-link { display:inline-flex; align-items:center; justify-content:center; padding:10px 16px; border-radius:10px; font-weight:700; text-decoration:none; }
        .legal-link.primary { background: var(--brand-accent); color:#fff; }
        .legal-link.secondary { border:2px solid var(--brand-primary); color: var(--brand-primary); background:#fff; }
        @media (min-width: 900px) {
            .legal-grid { grid-template-columns: 1fr 1fr; }
            .legal-card.span-2 { grid-column: 1 / -1; }
        }
    </style>

    <div class="legal-shell">
        <section class="legal-hero" aria-labelledby="privacy-title">
            <div class="legal-pill">Documento legal</div>
            <h1 id="privacy-title">Política de Privacidad</h1>
            <p>Explicamos de forma clara qué datos recogemos, para qué los usamos y cómo los protegemos en la plataforma.</p>
            <div class="legal-meta">
                <span>Última actualización: {{ date('Y') }}</span>
                <span>Versión pública</span>
            </div>
            <div class="legal-actions">
                <a href="{{ route('contact') }}" class="legal-link primary">Contáctanos</a>
                <a href="{{ route('terms') }}" class="legal-link secondary">Ver términos</a>
            </div>
        </section>

        <div class="legal-grid">
            <article class="legal-card span-2">
                <h2>1. Introducción</h2>
                <p>En esta política explicamos qué datos personales recopilamos, con qué finalidad y cómo los protegemos. Al utilizar el Servicio usted consiente el tratamiento según lo descrito en esta política.</p>
            </article>

            <article class="legal-card">
                <h2>2. Datos que recopilamos</h2>
                <ul>
                    <li><strong>Datos de contacto:</strong> nombre, correo electrónico y teléfono cuando el usuario los facilita en formularios de contacto o registro.</li>
                    <li><strong>Datos técnicos:</strong> IP, user-agent, registros de uso y datos de diagnóstico para mantenimiento y seguridad.</li>
                    <li><strong>Datos de integración:</strong> credenciales o identificadores necesarios para la integración con proveedores externos.</li>
                </ul>
            </article>

            <article class="legal-card">
                <h2>3. Finalidades del tratamiento</h2>
                <ul>
                    <li>Gestionar las solicitudes de contacto y soporte.</li>
                    <li>Proveer y mejorar el Servicio.</li>
                    <li>Integrar y operar servicios de facturación electrónica cuando el cliente lo autoriza.</li>
                    <li>Cumplir obligaciones legales aplicables.</li>
                </ul>
            </article>

            <article class="legal-card span-2">
                <h2>4. Base legal</h2>
                <p>La base legal para el tratamiento es el consentimiento del usuario y la ejecución de medidas contractuales cuando aplique, así como el cumplimiento de obligaciones legales. En particular, para clientes ubicados en el Perú, los datos relacionados con comprobantes fiscales y ventas pueden ser tratados para generar, transmitir y conservar información requerida por la SUNAT y otras autoridades tributarias, siempre en cumplimiento de la normativa peruana.</p>
            </article>

            <article class="legal-card">
                <h2>5. Conservación y seguridad</h2>
                <p>Conservamos los datos el tiempo necesario para cumplir las finalidades descritas y para satisfacer requisitos legales. Implementamos medidas técnicas y organizativas razonables para proteger los datos contra accesos no autorizados, pérdida o divulgación.</p>
            </article>

            <article class="legal-card">
                <h2>6. Cesiones y terceros</h2>
                <p>Podemos compartir datos con proveedores que procesan información en nuestro nombre (por ejemplo, servicios de email, hosting). No vendemos datos personales a terceros. Si el cliente configura integraciones con proveedores de facturación, dichos proveedores procesarán datos según su propia política y términos.</p>
            </article>

            <article class="legal-card">
                <h2>7. Derechos del interesado</h2>
                <p>Los usuarios pueden solicitar acceso, rectificación, supresión, limitación del tratamiento, oposición y portabilidad de sus datos. Para ejercer sus derechos contacte a <a href="mailto:contact@moabcode.com">contact@moabcode.com</a>.</p>
            </article>

            <article class="legal-card">
                <h2>8. Cambios en la política</h2>
                <p>Podemos actualizar esta política; publicaremos la versión más reciente en el sitio y señalaremos la fecha de actualización.</p>
            </article>
        </div>

        <div class="legal-notice">
            Para clientes en Perú, el plazo de conservación podrá ajustarse a los requerimientos fiscales peruanos; por ejemplo, la normativa tributaria puede exigir conservar documentación por períodos de hasta cinco (5) años o los plazos vigentes.
        </div>
    </div>
@endsection
