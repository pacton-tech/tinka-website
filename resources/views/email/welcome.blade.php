@component('mail::message')
# Welcome to {{ config('app.name') }}

Thank you for your registration with us. Below is the details of your credentials to be use to access the services.

Name: {{ $data['name'] }}  
Login: {{ $data['email'] }}  
Password : {{ $data['password'] }}

To access the TiNKA app, login below and create your app access. Each user can create more than 1 username for the app.

@component('mail::button', ['url' => config('app.url').'/login'])
Login
@endcomponent

If you have any issue, please contact the administrator at {{ env('MAIL_FROM_ADDRESS') }}  

Thanks,<br>
{{ config('app.name') }}
@endcomponent