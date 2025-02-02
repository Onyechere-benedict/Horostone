<x-guest-layout from="login">

    <h4 class='block font-medium text-xl text-gray-700 dark:text-gray-300 pb-5'>
        Login
    </h4>

    <form method="POST"
          action="{{ route('login') }}"
          class="space-y-3">

        @csrf
        <div>
            <x-input-label for="email"
                           :value="__('Email')" />
            <x-text-input id="email"
                          class="block mt-1 w-full"
                          type="email"
                          name="email"
                          :value="old('email')"
                          required
                          autofocus
                          autocomplete="email" />
            <x-input-error :messages="$errors->get('email')"
                           class="mt-2" />
        </div>


        <div>
            <x-input-label for="password"
                           :value="__('Password')" />
            <x-text-input id="password"
                          class="block mt-1 w-full"
                          type="password"
                          name="password"
                          :value="old('password')"
                          required
                          autofocus
                          autocomplete="password" />
            <x-input-error :messages="$errors->get('password')"
                           class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>


    </form>


</x-guest-layout>