@extends('layouts.myLayout')
    <div style = 'color:Tomato'>
        <form method = "POST" action = "{{route('user.store')}}">
            @csrf
            <p>Name: <input type = "text" name = "name" value = "{{old('name')}}"></p>
            <p>Email: <input type = "text" name = "email" value = "{{old('email')}}"></p>
            <p>Password: <input type = "text" name = "password" value = "{{old('password')}}"></p>
            <input type = "submit" value = "Submit">
    </div>
    </form>