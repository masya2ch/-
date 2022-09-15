@extends('index')

@yield('title', 'Страница Регистрации')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form class="mt-4" action="{{ route('register') }}" method="POST">
                    <h2 class="mb-3">Регистрация</h2>
                    @if(session()->has('success'))
                        <div class="alert alert-success">Операция регистрации успешно выполнена</div>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="inputLogin" class="form-label">Ваш логин</label>
                        <input type="Text"
                               class="form-control @error('login') is-invalid @enderror"
                               id="inputLogin"
                               name="login"
                               aria-describedby="invalidLogin">
                        @error('login')
                        <div id="invalidLogin" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль</label>
                        <input type="Password"
                               class="form-control @error('password') is-invalid @enderror"
                               id="inputPassword"
                               name="password"
                               aria-describedby="invalidPassword">
                        @error('password')
                        <div id="invalidPassword" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Повторите пароль</label>
                        <input type="Password"
                               class="form-control @error('password_confirmation') is-invalid @enderror"
                               id="inputPasswordConfirmation"
                               name="password_confirmation"
                               aria-describedby="invalidPasswordConformation">
                        @error('password_confirmation')
                        <div id="invalidPasswordConformation" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputFullName" class="form-label">Ваше имя</label>
                        <input type="Text"
                               class="form-control @error('fullname') is-invalid @enderror"
                               id="inputFullName"
                               name="fullname"
                               aria-describedby="invalidFullName">
                        @error('fullname')
                        <div id="invalidFullName" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваш email</label>
                        <input type="Email"
                               class="form-control @error('email') is-invalid @enderror"
                               id="inputEmail"
                               name="email"
                               aria-describedby="invalidEmail">
                        @error('email')
                        <div id="invalidEmail" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Ваш возраст</label>
                        <input type="Text"
                               class="form-control @error('age') is-invalid @enderror"
                               id="inputAge"
                               name="age"
                               aria-describedby="invalidAge">
                        @error('age')
                        <div id="invalidAge" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputAddress" class="form-label">Ваш адрес проживания</label>
                        <input type="Text"
                               class="form-control @error('address') is-invalid @enderror"
                               id="inputAddress"
                               name="address"
                               aria-describedby="invalidAddress">
                        @error('address')
                        <div id="invalidAddress" class="invalid-feedback" >
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Регистрация</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
