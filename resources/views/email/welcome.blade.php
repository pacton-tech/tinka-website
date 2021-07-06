@component('mail::message')

## Welcome to Tinka where today we combine both education and technology to shape the future of Malaysia's education system tomorrow.

Personalization. This is the theme our work is revolving around.

Every student is different, thus different methods and approach are introduced to help them understand well what they're learning.

By using advanced adaptive technologies, Artificial Intelligence (AI) and combined with hundreds of original contents, we are able to monitor and assist students with their learning progress. Personalization also provide students with a complete picture of how and what they will learn.

The Tinka App is designed to assist students when needed and to empower them by gaining confidence in their academics.

The best part of it all, these feature works on all mobile devices! Everything a student need is easily accessible at just their fingertips!

Thank you for your registration with us. Below is the details of your credentials to be use to access the services.

@component('mail::panel')
Name: {{ $data['name'] }}  
Login: {{ $data['email'] }}  
Password : {{ $data['password'] }}
@endcomponent

To access the TiNKA app, login below and create your app access. Each user can create more than 1 username for the app.

@component('mail::button', ['url' => config('app.url').'/login'])
Login
@endcomponent

Thanks,<br>
{{ config('app.name') }}

@component('mail::subcopy')
If you have any issue, please contact the administrator at {{ env('MAIL_FROM_ADDRESS') }}
@endcomponent

@endcomponent