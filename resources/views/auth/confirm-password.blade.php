<x-guest-layout>
    <x-slot:title>
        Confirm Password
    </x-slot:title>
    <x-slot:info>
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </x-slot:info>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="form-control">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button>
                {{ __('Confirm') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
