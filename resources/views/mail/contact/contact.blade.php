@component('mail::message')

    Пользователь: {{ $data['name'] }}
    <br>
    Email: {{ $data['email'] }}
    <br>
    Сообщение: {{ $data['message'] }}
@endcomponent
