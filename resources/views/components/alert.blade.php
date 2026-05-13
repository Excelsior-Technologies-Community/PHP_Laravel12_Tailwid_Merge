@php
    $variants = [
        'success' => 'bg-green-50 dark:bg-green-900/20 border-green-500 text-green-800 dark:text-green-200',
        'error' => 'bg-red-50 dark:bg-red-900/20 border-red-500 text-red-800 dark:text-red-200',
        'warning' => 'bg-yellow-50 dark:bg-yellow-900/20 border-yellow-500 text-yellow-800 dark:text-yellow-200',
        'info' => 'bg-blue-50 dark:bg-blue-900/20 border-blue-500 text-blue-800 dark:text-blue-200',
    ];
    
    $variant = $variant ?? 'info';
    $icon = $icon ?? null;
    $title = $title ?? null;
    $alertClasses = $variants[$variant] ?? $variants['info'];
@endphp

<div {{ $attributes->twMerge($alertClasses, 'p-4 rounded-xl border-l-4 transition-all duration-300') }}>
    <div class="flex items-start">
        @if($icon)
            <span class="mr-3 text-xl">{{ $icon }}</span>
        @endif
        <div class="flex-1">
            @if($title)
                <h4 class="font-semibold mb-1">{{ $title }}</h4>
            @endif
            {{ $slot }}
        </div>
    </div>
</div>