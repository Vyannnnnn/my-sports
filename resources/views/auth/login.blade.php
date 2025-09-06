@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="form-box">
    <h2>Login</h2>
    @if($errors->has('login'))
    <div class="alert">{{ $errors->first('login') }}</div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>Email atau Nama</label>
            <input type="text" name="login" required autofocus>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
</div>
@endsection