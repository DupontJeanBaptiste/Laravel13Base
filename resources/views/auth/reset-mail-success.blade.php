@extends('components.layouts.default')

@section('main')
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"
                class="mx-auto h-10 w-auto" />
            <h2 class="form-title">Success sending</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <span class=" font-medium text-gray-100">Check your mail box to get the reset password mail.</span>
        </div>
    </div>
@endsection