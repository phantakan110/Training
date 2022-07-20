<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>เกี่ยวกับเรา</title>
    <body>
        <h1>Admin</h1>
        <p>Phantakan Adam</p>
        <a href="{{url('/home')}}">Home</a>
        <a href="{{url('/admin')}}">Admin</a>
        <a href="{{url('/member')}}">Member</a>
        <a href="{{url('/about')}}">About</a>
        <a href="{{url('/student')}}">Student</a>
        <a href="{{url('/teacher')}}">Teacher</a>
        <a href="{{url('/login')}}">Login</a>
    </body>
    </head>
</html>