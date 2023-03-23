{{-- <x-guest-layout> --}}
    {{-- <x-authentication-card> --}}
        <link rel="stylesheet" href={{asset('style\login.css')}}>
        {{-- <x-slot name="logo">
            <img src="{{asset('/img/logo.png')}}" class="block h-9 w-auto" />
        </x-slot> --}}
    <section>
            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
        <div class="form-box">
            <div class="form-value">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <img src="{{asset('/img/logo.png')}}" class="block h-9 w-auto" />
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <x-label for="email"  />
                            <x-input id="email" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <x-label for="password" value="" />
                            <x-input id="password" placeholder="password" type="password" name="password" required autocomplete="current-password" />
                        </div>
                        <div class="forget">
                            <div class="register">
                                <label for="remember_me" class="flex items-center">
                                    <x-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <x-button class="ml-4 mb-2">
                                {{ __('Log in') }}
                            </x-button>
                            <div class="forgot">
                                @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }} ">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                            </div>
                            
                        </div>
                    </form>
            </div>
        </div>       
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
    {{-- </x-authentication-card> --}}
{{-- </x-guest-layout> --}}
