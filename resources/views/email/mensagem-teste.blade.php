@component('mail::message')
# Criando meu primeiro disparo de e-mail.

Teste de email com Laravel.

@component('mail::button', ['url' => ''])
O texto do botão
@endcomponent

@component('mail::button', ['url' => ''])
O texto do botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
