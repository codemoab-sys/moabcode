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
        <section class="legal-hero" aria-labelledby="terms-title">
            <div class="legal-pill">Documento legal</div>
            <h1 id="terms-title">Términos de Servicio</h1>
            <p>Condiciones de uso claras para el servicio informativo y las integraciones técnicas con proveedores de facturación electrónica.</p>
            <div class="legal-meta">
                <span>Última actualización: {{ date('Y') }}</span>
                <span>Versión pública</span>
            </div>
            <div class="legal-actions">
                <a href="{{ route('contact') }}" class="legal-link primary">Contáctanos</a>
                <a href="{{ route('privacy') }}" class="legal-link secondary">Ver privacidad</a>
            </div>
        </section>

        <div class="legal-grid">
            <article class="legal-card span-2">
                <h2>1. Aceptación de los términos</h2>
                <p>Al utilizar esta aplicación (en adelante, el "Servicio"), usted acepta quedar vinculado por estos Términos de Servicio. Si no está de acuerdo con estos términos, no utilice el Servicio.</p>
            </article>

            <article class="legal-card">
                <h2>2. Descripción del Servicio</h2>
                <p>El Servicio ofrece una interfaz informativa y capacidades de integración técnica con proveedores de servicios de facturación electrónica mediante APIs. La plataforma permite a clientes integrar sus propias credenciales para la emisión de comprobantes fiscales ante la Superintendencia Nacional de Aduanas y de Administración Tributaria (SUNAT) en el Perú.</p>
            </article>

            <article class="legal-card">
                <h2>3. Responsabilidades del usuario/cliente</h2>
                <ul>
                    <li>El cliente es responsable de proporcionar credenciales válidas y mantener la veracidad de la información registrada.</li>
                    <li>La emisión, conservación y validez fiscal de los comprobantes emitidos con las credenciales del cliente son responsabilidad del propio cliente y de la relación contractual que mantenga con el proveedor autorizado.</li>
                    <li>En el caso de clientes en el Perú, el cliente debe contar con número de RUC y cumplir con las obligaciones formales exigidas por SUNAT.</li>
                    <li>El cliente deberá cumplir con las leyes y normas aplicables en su jurisdicción.</li>
                </ul>
            </article>

            <article class="legal-card">
                <h2>4. Limitación de responsabilidad</h2>
                <p>En la medida máxima permitida por la ley, el desarrollador no será responsable por daños directos, indirectos, incidentales, especiales, consecuentes o punitivos derivados del uso o imposibilidad de uso del Servicio.</p>
            </article>

            <article class="legal-card">
                <h2>5. Propiedad intelectual</h2>
                <p>Todos los derechos de propiedad intelectual sobre el software, el diseño, la documentación y demás materiales del Servicio pertenecen al desarrollador o a sus licenciantes. Queda prohibida la reproducción, distribución o modificación no autorizada.</p>
            </article>

            <article class="legal-card">
                <h2>6. Privacidad y datos</h2>
                <p>El tratamiento de datos personales se realiza conforme a la Política de Privacidad del Servicio. Para efectos fiscales, el cliente debe conservar los comprobantes y documentación por los plazos que exija SUNAT o la legislación aplicable.</p>
            </article>

            <article class="legal-card">
                <h2>7. Duración y terminación</h2>
                <p>El desarrollador puede suspender o terminar el acceso al Servicio por incumplimiento de estos términos o por motivos operativos, técnicos o legales sin responsabilidad adicional.</p>
            </article>

            <article class="legal-card">
                <h2>8. Ley aplicable y jurisdicción</h2>
                <p>Si la relación contractualmente relevante se desarrolla en el Perú, estos términos se regirán por la legislación peruana y las controversias serán sometidas a los tribunales competentes del Perú, salvo disposición legal en contrario.</p>
            </article>

            <article class="legal-card">
                <h2>9. Contacto</h2>
                <p>Para consultas sobre estos Términos de Servicio puede contactarnos en <a href="mailto:contact@moabcode.com">contact@moabcode.com</a>.</p>
            </article>
        </div>

        <div class="legal-notice">
            Nota: el cliente sigue siendo responsable de cumplir con las obligaciones tributarias y documentales vigentes en su jurisdicción.
        </div>
    </div>
@endsection
