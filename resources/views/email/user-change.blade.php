@component('mail::message')

## Change of personal details

Your details has been changed. Below is the details of your credentials to be use to access the services.

@component('mail::panel')
Name: {{ $data['name'] }}  
Login: {{ $data['email'] }}  
Password : {{ $data['password'] }}  
Role: {{ ucfirst($data['role']) }}
@endcomponent

Please login with the new details above.

@component('mail::button', ['url' => config('app.url').'/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::subcopy')
Your information is sensitive. Do not share it with other. If you have any issue, please contact the administrator at {{ env('MAIL_FROM_ADDRESS') }}
@endcomponent

@endcomponent