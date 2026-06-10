<div style="font-family: Arial, sans-serif; color: #111;">
    <h2>Nuevo mensaje de contacto</h2>
    <p><strong>Nombre:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Mensaje:</strong><br>{{ nl2br(e($contact->message)) }}</p>
    <hr>
    <p><strong>Consentimiento:</strong> {{ $contact->consent ? 'Sí' : 'No' }}</p>
    @if($contact->consent_at)
        <p><strong>Fecha consentimiento:</strong> {{ $contact->consent_at }}</p>
    @endif
    <hr>
    <p><strong>IP:</strong> {{ $contact->ip }}</p>
    <p><strong>User Agent:</strong> {{ $contact->user_agent }}</p>
    <p><small>Enviado: {{ $contact->created_at }}</small></p>
</div>
