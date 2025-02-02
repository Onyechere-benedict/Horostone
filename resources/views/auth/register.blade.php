<x-guest-layout from="register">

    <h4 class='block font-medium text-xl text-gray-700 dark:text-gray-300 pb-5'>
        Create an account
    </h4>

    <form method="POST"
          action="{{ route('register') }}"
          class="space-y-3">

        <div class="grid lg:grid-cols-2 gap-y-3 gap-x-6">


            <div>
                <x-input-label for="first_name"
                               :value="__('First Name')" />
                <x-text-input id="first_name"
                              class="block mt-1 w-full"
                              type="text"
                              name="first_name"
                              :value="old('first_name')"
                              required
                              autofocus
                              autocomplete="first_name" />
                <x-input-error :messages="$errors->get('first_name')"
                               class="mt-2" />
            </div>

            <div>
                <x-input-label for="last_name"
                               :value="__('Last Name')" />
                <x-text-input id="last_name"
                              class="block mt-1 w-full"
                              type="text"
                              name="last_name"
                              :value="old('last_name')"
                              required
                              autofocus
                              autocomplete="last_name" />
                <x-input-error :messages="$errors->get('last_name')"
                               class="mt-2" />
            </div>

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
                <x-input-label for="email_confirmation"
                               :value="__('Confirm Email')" />
                <x-text-input id="email_confirmation"
                              class="block mt-1 w-full"
                              type="email"
                              name="email_confirmation"
                              :value="old('email_confirmation')"
                              required
                              autofocus
                              autocomplete="email_confirmation" />
                <x-input-error :messages="$errors->get('email_confirmation')"
                               class="mt-2" />
            </div>

            <div>
                <x-input-label for="phone_number"
                               :value="__('Phone Number')" />
                <x-text-input id="phone_number"
                              class="block mt-1 w-full"
                              type="tel"
                              name="phone_number"
                              :value="old('phone_number')"
                              required
                              autofocus
                              autocomplete="phone_number" />
                <x-input-error :messages="$errors->get('phone_number')"
                               class="mt-2" />
            </div>

            <div>
                <x-input-label for="gender"
                               :value="__('Gender')" />
                {{-- <x-text-input id="gender"
                              class="block mt-1 w-full"
                              type="text"
                              name="gender"
                              :value="old('gender')"
                              required
                              autofocus
                              autocomplete="gender" /> --}}
                <x-radio-input id="gender"
                               class="block mt-1 w-full"
                               name="gender"
                               :value="old('gender')"
                               required
                               autofocus
                               :options="['Male', 'Female', 'Rather Not Say']" />

                <x-input-error :messages="$errors->get('gender')"
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

            <div>
                <x-input-label for="password_confirmation"
                               :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation"
                              class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation"
                              :value="old('password_confirmation')"
                              required
                              autofocus
                              autocomplete="password_confirmation" />
                <x-input-error :messages="$errors->get('password_confirmation')"
                               class="mt-2" />
            </div>

        </div>

        <div>
            <x-input-label for="dob"
                           :value="__('Date of Birth')" />
            <x-text-input id="dob"
                          class="block mt-1 w-full"
                          type="date"
                          name="dob"
                          :value="old('dob')"
                          required
                          autofocus
                          autocomplete="dob" />
            <x-input-error :messages="$errors->get('dob')"
                           class="mt-2" />
        </div>

        <div>
            <x-input-label for="address"
                           :value="__('House Address')" />
            <x-text-area id="address"
                         class="block mt-1 w-full"
                         type="text"
                         name="address"
                         :value="old('address')"
                         required
                         autofocus
                         autocomplete="address" />
            <x-input-error :messages="$errors->get('address')"
                           class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>


    </form>


</x-guest-layout>