<style>
    .site-footer { padding:48px 0 24px; background:#061226; color:#cbd5e1; }
    .site-footer .footer-grid { display:grid; grid-template-columns: repeat(3,minmax(0,1fr)); gap:24px; }
    .site-footer .footer-brand { display:flex; flex-direction:column; gap:18px; align-items:flex-start; }
    .site-footer .footer-brand img { max-width:140px; max-height:72px; width:auto; height:auto; object-fit:contain; }
    .site-footer .footer-list { list-style:none; margin:0; padding:0; display:grid; gap:12px; }
    .site-footer .footer-list a { color:#cbd5e1; text-decoration:none; transition: color 200ms ease; }
    .site-footer .footer-list a:hover { color:#fff; }
    .site-footer .footer-note { margin-top:28px; color:#94a3b8; font-size:0.95rem; }
    .site-footer h3 { color:#fff; margin-bottom:16px; }
    @media (max-width:780px) {
        .site-footer .footer-grid { grid-template-columns: 1fr; text-align:center; align-items:center; }
        .site-footer .footer-brand { align-items:center; }
        .site-footer .footer-list { display:flex; flex-direction:column; align-items:center; gap:12px; padding:0; }
        .site-footer .footer-list li { display:block; }
        .site-footer .footer-list li a { display:inline-block; }
        .site-footer .footer-list a { text-align:center; }
    }
</style>
<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-brand">
            <img src="{{ asset('images/logo.png') }}" alt="MOABCODE logo">
            <p>Tecnología con Propósito para empresas que buscan soluciones tecnológicas seguras y confiables.</p>
        </div>
        <div>
            <h3>Contacto</h3>
            <ul class="footer-list">
                <li><a href="https://wa.me/51912354795?text=Hola%20MOABCODE%20quiero%20una%20cotización" target="_blank" rel="noopener">+51 912 354 795</a></li>
                <li><a href="mailto:ventas@moabcode.com">ventas@moabcode.com</a></li>
                <li><a href="mailto:soporte@moabcode.com">soporte@moabcode.com</a></li>
            </ul>
        </div>
        <div>
            <h3>Enlaces</h3>
            <ul class="footer-list">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('/nosotros') }}">Nosotros</a></li>
                <li><a href="{{ url('/contactanos') }}">Contacto</a></li>
            </ul>
        </div>
    </div>
    <p class="footer-note">© {{ date('Y') }} MOABCODE. Tecnología con Propósito.</p>
</footer>
