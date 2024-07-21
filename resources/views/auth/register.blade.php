@extends('layouts.register')
@section('title', 'Flourish | Register ')
@section('content')

    <section class="login">
        <h1>فلوريش</h1>
        <form action="{{ route('reg.index') }}" method="post">
            @csrf
            <div>
               

                <div>
                    <h3>الاسم الاول</h3>
                    <input type="text" class="@error('firstname') is-invalid @enderror" name="firstname"
                        placeholder="الاسم الاول" autocomplete="off" value="{{old('firstname')}}">
                    @error('firstname')
                        <div class="alert border-2 border-danger mt-2 text-center text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <h3>الاسم الثاني</h3>
                    <input type="text" class="@error('lastname') is-invalid @enderror" name="lastname"
                        placeholder="الاسم الثاني" autocomplete="off" value="{{old('lastname')}}">
                    @error('lastname')
                        <div class="alert border-2 border-danger mt-2 text-center text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>
            <div>
                <h3>البريد الالكتروني</h3>
                <input type="email" class="@error('email') is-invalid @enderror" name="email"
                    placeholder="البريد الالكتروني" autocomplete="off" value="{{old('email')}}">

                @error('email')
                    <div class="alert border-2 border-danger mt-2 text-center text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <h3>كلمة المرور</h3>
                <input type="password" class="@error('password') is-invalid @enderror" name="password"
                    placeholder="كلمة المرور" autocomplete="off" value="{{old('password')}}">

                @error('password')
                    <div class="alert border-2 border-danger mt-2 text-center text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <h3>تأكيد كلمة المرور</h3>
                <div>

                    <input type="password" class="@error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="تأكيد كلمة المرور" autocomplete="off" value="{{old('password_confirmation')}}">

                    @error('password_confirmation')
                        <div class="alert border-2 border-danger mt-2 text-center text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

            </div>
            <button type="submit" name="signup">انشاء حساب</button>
            <a href="{{ route('login') }}">تسجيل دخول</a>
        </form>
    </section>

@endsection
