<x-guest-layout>
    <form class="p-6 text-center space-y-6">
        @csrf

        <p>You've been referred by
            <span class="font-weight-bold">{{ $referral->user->name }}</span>.</p>

        <x-primary-button class="mt-4" type="submit" form="register-form">
            Register for 20% off
        </x-primary-button>
    </form>
</x-guest-layout>
