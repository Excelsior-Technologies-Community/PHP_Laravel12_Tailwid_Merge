@php
    $baseClasses = 'inline-flex items-center justify-center font-medium transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed';
    
    $variants = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 text-white shadow-md hover:shadow-lg focus:ring-blue-500',
        'success' => 'bg-green-600 hover:bg-green-700 text-white shadow-md hover:shadow-lg focus:ring-green-500',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white shadow-md hover:shadow-lg focus:ring-red-500',
        'warning' => 'bg-yellow-500 hover:bg-yellow-600 text-white shadow-md hover:shadow-lg focus:ring-yellow-500',
        'outline' => 'border-2 border-gray-300 dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300',
        'ghost' => 'hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-700 dark:text-gray-300',
    ];
    
    $sizes = [
        'sm' => 'px-3 py-1.5 text-sm rounded-lg',
        'md' => 'px-5 py-2.5 text-base rounded-lg',
        'lg' => 'px-6 py-3 text-lg rounded-xl',
    ];
    
    $variant = $variant ?? 'primary';
    $size = $size ?? 'md';
    $disabled = $disabled ?? false;
    $icon = $icon ?? null;
    $buttonClasses = $variants[$variant] ?? $variants['primary'];
    $sizeClasses = $sizes[$size] ?? $sizes['md'];
@endphp

<button 
    {{ $attributes->twMerge($baseClasses, $buttonClasses, $sizeClasses) }}
    @if($disabled) disabled @endif
>
    @if($icon)
        <span class="mr-2">{{ $icon }}</span>
    @endif
    {{ $slot }}
</button>