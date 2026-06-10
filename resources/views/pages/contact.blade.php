@extends('layouts.app')

@section('content')
    <div class="container" style="padding:48px 20px; max-width:980px;">
        <div style="background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:32px; box-shadow:0 10px 30px rgba(15,23,42,0.04);">
            <p style="display:inline-block; background:#fff8e6; color:var(--brand-accent); padding:6px 14px; border-radius:999px; font-weight:700; font-size:0.85rem; margin-bottom:14px;">Contacto directo</p>
            <h1 style="color:var(--brand-primary); margin-bottom:12px; font-size:clamp(1.8rem, 2.8vw, 2.5rem);">Contáctanos</h1>
            <p style="color:#64748b; max-width:720px; margin-bottom:24px;">Si deseas más información sobre la solución, soporte o una demo, usa cualquiera de estos canales directos. Esta página es informativa y no utiliza formulario.</p>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:14px; margin-bottom:28px;">
                <a href="tel:+51916377263" class="btn btn-secondary" style="justify-content:center;">Llamada</a>
                <a href="https://wa.me/51916377263?text=Hola%20quiero%20informaci%C3%B3n" target="_blank" rel="noopener" class="btn btn-primary" style="justify-content:center;">WhatsApp</a>
                <a href="mailto:admin@moabcode.com" class="btn btn-secondary" style="justify-content:center;">Correo</a>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:16px;">
                <div style="background:#f8fafc; border:1px solid #e5e7eb; border-radius:12px; padding:18px;">
                    <h2 style="font-size:1rem; color:var(--brand-primary); margin-bottom:8px;">Horario de atención</h2>
                    <p style="margin:0; color:#64748b;">Lunes a viernes de 8:00 a.m. a 6:00 p.m.</p>
                </div>
                <div style="background:#f8fafc; border:1px solid #e5e7eb; border-radius:12px; padding:18px;">
                    <h2 style="font-size:1rem; color:var(--brand-primary); margin-bottom:8px;">Respuesta rápida</h2>
                    <p style="margin:0; color:#64748b;">Atención prioritaria por WhatsApp y correo para consultas comerciales o demo.</p>
                </div>
                <div style="background:#f8fafc; border:1px solid #e5e7eb; border-radius:12px; padding:18px;">
                    <h2 style="font-size:1rem; color:var(--brand-primary); margin-bottom:8px;">Privacidad</h2>
                    <p style="margin:0; color:#64748b;">Tus datos se usarán solo para responder tu solicitud. Consulta la <a href="{{ route('privacy') }}" style="color:var(--brand-primary); font-weight:600;">Política de Privacidad</a>.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
