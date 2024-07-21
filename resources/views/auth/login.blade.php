@extends('layouts.login')
@section('title', 'Flourish | Login')
@section('content')

    <section class="login">
        <h1>فلوريش</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <h3>اسم المستخدم</h3>
                <input class="@error('email') is-invalid @enderror" value="{{ old('email') }}" type="email" name="email"
                    placeholder="الايميل" autocomplete="off">
                @error('email')
                    <div class="alert alert-danger text-center text-light bg-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <h3>كلمة المرور</h3>
                <div class="login-text m-0">
                    <input class="@error('password') is-invalid @enderror" type="password" name="password"
                        placeholder="كلمة المرور" autocomplete="off">
                    <i class="fa-solid fa-eye"></i>
                </div>

                @error('password')
                    <div class="alert alert-danger text-center text-light bg-danger"
                        style="text-align: center;justify-content: center">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">تذكرني</label>
            </div>

            <!-- <p>كلمة المرور او اسم المستخدم بهما خطأ , حاول مرة اخري</p> -->

            <button type="submit" name="login">تسجيل دخول</button>
            <div>
                <a href="{{ route('register') }}">انشاء حساب</a>
                <a href="{{route('password.request')}}"> هل نسيت كلمة المرور؟</a>

            </div>
        </form>
    </section>

@endsection
