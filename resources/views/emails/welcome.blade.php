@component('mail::message')
# Welcome To Kanta Kanta, {{ $user->name }}

Your Account Was Created by KantaKanta Administrator. To login to KantaKanta Website, Here is your account Details

- Email : {{ $user->email }}
- Password : 123456

@component('mail::button', ['url' => 'kantakanta.dev/login'])
Login Now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
