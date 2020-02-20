@extends('layout.master')
@section('content')
    <form action="{{route('createAccount')}}" method="post">
        @csrf
        <label for="name">نام حساب</label>
        <input class="input" type="text" name="name">
        <button type="submit" class="btn">افزودن</button>
    </form>
@endsection
