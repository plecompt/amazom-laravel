@vite(['resources/css/login.css'])

@extends('layouts.app')

@section('title', 'Connexion')

@section('content')

    <div class="login-container">
        <h1 class="login-title">Connexion</h1>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('auth.login.submit') }}">
            @csrf
            
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" required>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
           
            <div class="actions flex">
                <a href="{{ route('auth.forgot.password') }}" class="btn-login">Mot de passe oublié</a>
                <button type="submit" class="btn-login">Se connecter</button>
            </div>
        </form>
</div>

@endsection