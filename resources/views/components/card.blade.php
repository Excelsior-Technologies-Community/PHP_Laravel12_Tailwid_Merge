@php
    $title = $title ?? null;
@endphp

<div {{ $attributes->twMerge('bg-white dark:bg-gray-800 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-6 border border-gray-100 dark:border-gray-700') }}>
    @if($title)
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-3">{{ $title }}</h3>
    @endif
    {{ $slot }}
</div>