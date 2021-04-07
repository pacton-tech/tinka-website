@component('mail::message')
# Welcome to {{ config('app.name') }}

Thank you for your registration with us. Below is the details of your credentials to be use to access the services. After login, please change your password immediately.

Name: {{ $data['name'] }}  
Login: {{ $data['email'] }}  
Password (temporary): {{ $data['temporary_password'] }}

@component('mail::button', ['url' => config('app.url').'/login'])
Login
@endcomponent

If you have any issue, please contact the administrator at {{ env('MAIL_FROM_ADDRESS') }}  

Thanks,<br>
{{ config('app.name') }}
@endcomponent