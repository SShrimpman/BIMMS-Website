<div>
    <div class="login-box">
        <a wire:navigate href="/" class="flex mb-10 justify-center hover:scale-110 transition-all duration-500">
            <img class="w-56" src="{{ asset('assets/bimmsLogo.png')}}">
        </a>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user-box">
                <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror" required>
                <label for="email">{{ __('Email Address') }}</label>
            </div>
            <div class="user-box">
                <input id="password" type="password" name="password" class="@error('password') is-invalid @enderror" required>
                <label for="password">{{ __('Password') }}</label>
                @error('email')
                    <span class="text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="flex justify-center">
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
            outline: none;
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
            margin-top: 40px;
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
</div>
