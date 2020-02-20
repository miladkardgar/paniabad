@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">خانه</a>
        @else
            <a href="{{ route('login') }}">ورود</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">عضویت</a>
            @endif
        @endauth
            <a href="{{route('create_account')}}">ایجاد کاربری جدید</a>
    </div>
@endif
