@php
    $withSubmitButton = $withSubmitButton ?? false;
@endphp

<form id="form-logout" method="POST" action="{{ route(config('nova-google2fa.logout_route_name')) }}">
    @csrf
    @if ($withSubmitButton)
        <button type="submit"
                class="shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900 cursor-pointer rounded text-sm font-bold focus:outline-none focus:ring ring-primary-200 dark:ring-gray-600 inline-flex items-center justify-center h-9 px-3 shadow relative bg-primary-500 hover:bg-primary-400 text-white dark:text-gray-900"
        >
            <span>{{ __('nova-google2fa::2fa-auth.actions.logout') }}</span>
        </button>
    @endif
</form>
