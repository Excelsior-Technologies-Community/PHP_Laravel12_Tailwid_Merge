@php
    $baseClasses = 'inline-flex items-center px-2.5 py-0.5 text-xs font-medium transition-all duration-300';
    
    $variants = [
        'primary' => 'bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200',
        'success' => 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200',
        'danger' => 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200',
        'warning' => 'bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200',
        'info' => 'bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200',
        'dark' => 'bg-gray-800 text-white dark:bg-gray-700',
    ];
    
    $variant = $variant ?? 'primary';
    $as = $as ?? 'span';
    $icon = $icon ?? null;
    $roundedFull = $roundedFull ?? false;
    $badgeClasses = $variants[$variant] ?? $variants['primary'];
    $roundedClass = $roundedFull ? 'rounded-full' : 'rounded-md';
@endphp

<{{ $as }} 
    {{ $attributes->twMerge($baseClasses, $badgeClasses, $roundedClass) }}
>
    @if($icon)
        <span class="mr-1">{{ $icon }}</span>
    @endif
    {{ $slot }}
</{{ $as }}>