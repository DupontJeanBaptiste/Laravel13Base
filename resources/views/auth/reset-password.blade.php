@extends('components.layouts.default')

@section('main')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                class="mx-auto h-10 w-auto" />
            <h2 class="form-title">Reset password</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" type="email" name="email" required autocomplete="email" class="form-input" value="{{ $request->email }}" readonly />
                </div>
                <div>
                    <label for="password" class="form-label">New password</label>
                    <input id="password" type="password" name="password" required autocomplete="email" class="form-input"
                        placeholder=" " required />
                </div>
                <div>
                    <label for="password_confirmation" class="form-label">New password confirmation</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="email" class="form-input" placeholder=" " required />
                </div>
                <div>
                    <input id="token" type="hidden" name="token" value="{{ $request->token }}">
                </div>
                <div>
                    <button type="submit" class="form-button w-full">Update my password</button>
                </div>
            </form>
        </div>
    </div>
@endsection