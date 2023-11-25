@component('mail::message')
# Introduction

O corpo da mensagem

@component('mail::button', ['url' => ''])
O texto do botão
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
