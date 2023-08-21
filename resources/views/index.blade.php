<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แจ้งข้อร้องเรียน เสนอแนะ แนะนำบริการ</title>
    <link rel="shortcut icon" href="{{ asset('storage/img/h.png') }}">
    @livewireStyles
    {!! htmlScriptTagJsApi() !!}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include('sweetalert::alert')
    <livewire:report />
  
    @livewireScripts
  </body>
</html>