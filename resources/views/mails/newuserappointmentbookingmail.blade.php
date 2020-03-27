<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment Booked Successfully</title>
</head>
<body>
    <p>Hello {{$user->firstname}}, your appointment to meet a {{$appointment->specialization}}
        {{('on')}} {{$appointment->date}} {{$appointment->time}} has been recorded successfully.</p>
    <p>Please follow this <a href="{{config('app.url')}}/reset-password/{{$code}}/{{$email}}">link</a> to create a password {{('for')}}} your account and track your appointments.</p>
</body>
</html>