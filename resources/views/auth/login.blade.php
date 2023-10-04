<x-guest-layout>
    <div class="login-box">
        <a wire:navigate href="/" class="flex mb-10 justify-center hover:scale-110 transition-all duration-500">
            <img class="w-56" src="{{ asset('assets/bimmsLogo.png')}}">
        </a>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user-box">
                <input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                <label for="email">{{ __('Email') }}</label>
            </div>
            <div class="user-box">
                <input id="password" type="password" name="password" required autocomplete="current-password">
                <label for="password">{{ __('Password') }}</label>
            </div>
            <div class="flex justify-center mt-5">
                <button type="submit">
                    {{ __('Login') }}
                    <span></span>
                </button>
            </div>
        </form>
    </div>
    
    <style>
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: transparent;
    
            border-radius: 10px;
        }
    
        .login-box .user-box {
            position: relative;
        }
    
        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid white;
            outline: none !important;
            background: transparent;
        }
    
        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            pointer-events: none;
            transition: .5s;
        }
    
        .login-box .user-box input:focus ~ label,
        .login-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: white;
            font-size: 12px;
            outline: none !important;
        }
    
        .login-box form button {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: white;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            letter-spacing: 4px
        }
    
        .login-box button:hover {
            background: #6fc3c0;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #6fc3c0,
                        0 0 25px #6fc3c0,
                        0 0 50px #6fc3c0,
                        0 0 100px #6fc3c0;
        }
    
        .login-box button span {
            position: absolute;
            display: block;
        }
    
        @keyframes btn-anim1 {
            0% {
                left: -100%;
            }
    
            50%,100% {
                left: 100%;
            }
        }
    
        .login-box button span:nth-child(1) {
            bottom: 2px;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #6fc3c0);
            animation: btn-anim1 2s linear infinite;
        }
    </style>
    {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card> --}}
</x-guest-layout>
