<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- UserName -->
        <div>
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- FullName -->
        <div>
            <x-input-label for="fullname" :value="__('Fullname')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autocomplete="fullname" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password  -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Address -->
<div>
    <x-input-label for="address" :value="__('Address')" />
    <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
    <x-input-error :messages="$errors->get('address')" class="mt-2" />
</div>

<!-- Birthdate -->
<div>
    <x-input-label for="birthdate" :value="__('Tanggal lahir')" />
    <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autocomplete="birthdate" />
    <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
</div>
                                                        {{-- ACHMAD DANI SAPUTRA | 6706223131 --}}
<!-- PhoneNumber -->
<div>
    <x-input-label for="phoneNumber" :value="__('Nomor Telepon')" />
    <x-text-input id="phoneNumber" class="block mt-1 w-full" type="text" name="phoneNumber" :value="old('phoneNumber')" required autocomplete="phoneNumber" />
    <x-input-error :messages="$errors->get('phoneNumber')" class="mt-2" />
</div>

<!-- Religion -->
<div>
    <x-input-label for="agama" :value="__('Agama')" />
    <x-text-input id="agama" class="block mt-1 w-full" type="text" name="agama" :value="old('agama')" required autocomplete="agama" />
    <x-input-error :messages="$errors->get('agama')" class="mt-2" />
</div>
                                                    
<!-- Jenis Kelamin -->
<div>
    <x-input-label for="jenisKelamin" :value="__('Jenis Kelamin')" style="color: white;" />
    <input id="Laki-Laki" type="radio" class="block mt-1" name="jenisKelamin" value="0" required autocomplete="jenisKelamin">
    <label for="Laki-Laki" style="color: white;">Laki-Laki</label>
    <input id="Perempuan" type="radio" class="block mt-1" name="jenisKelamin" value="1" required autocomplete="jenisKelamin">
    <label for="Perempuan" style="color: white;">Perempuan</label>
    <x-input-error :messages="$errors->get('jenisKelamin')" class="mt-2" />
</div>

        
        
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>