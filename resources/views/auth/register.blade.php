@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="form-box">
    <h2>Register Pembeli</h2>
    @if($errors->any())
    <div class="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Nama</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Register</button>
    </form>
</div>
@endsection