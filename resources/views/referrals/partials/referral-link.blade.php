<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Referral Link') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("You can share your referral link with your friends to earn rewards.") }}
        </p>
    </header>


    <div class="flex items-baseline space-x-4" x-data="{ copied: false, timeout: null, input: '{{ auth() -> user()->getReferralUrl() }}' }">
        <x-text-input x-model="input"  readonly id="code" name="code" type="text" class="mt-1 block w-full shrink-0"/>
        <button
            @click="$clipboard(input); copied = true; clearTimeout(timeout); timeout = setTimeout(() => copied = false, 2000)"
            class="shrink-0 font-medium text-blue-600 hover:text-blue-500 text-sm" x-text="copied? '{{ __('Copied') }}' : '{{ __('Copy Link') }}'"></button>

    </div>
</section>
