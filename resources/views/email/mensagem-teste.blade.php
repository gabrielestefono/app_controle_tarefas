@component('mail::message')
# Criando meu primeiro disparo de e-mail.

Oi, mozinho. Saiba que te amo muito <3 <br>

@component('mail::button', ['url' => ''])
O texto do botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
