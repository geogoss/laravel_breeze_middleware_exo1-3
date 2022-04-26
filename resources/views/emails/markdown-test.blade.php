@component('mail::message')
# Introduction

Salut les amis comment aller vous ?

@component('mail::button', ['url' => $url])
Cliquez ici
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
