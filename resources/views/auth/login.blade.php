@extends('components.layouts.default')

@section('main')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                class="mx-auto h-10 w-auto" />
            <h2 class="form-title">Sign in to your account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" name="email" required autocomplete="email" class="form-input" />
                </div>

                <div>
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="form-input" />
                    <div class="text-sm flex justify-end">
                        <a href="{{ route('forgot-password') }}" class="font-semibold text-indigo-400 hover:text-indigo-300">Forgot password?</a>
                    </div>
                </div>

                <div>
                    <button type="submit" class="form-button w-full">Sign in</button>
                </div>
            </form>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <div>
                <button class="form-button w-full">
                    <a href="{{ route('registration') }}">Create an account</a>
                </button>
            </div>
        </div>
    </div>
@endsection
