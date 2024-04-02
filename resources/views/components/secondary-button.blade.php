@props([
    'type' => 'submit',
    'as' => 'button',
])

@if ($as == 'button')
    <button {{ $attributes->merge(['type' => $type]) }}
        class="block rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
        {{ $slot }}
    </button>
@else
    <a {{ $attributes }}
        class="block rounded-md bg-red-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">
        {{ $slot }}
    </a>
@endif
