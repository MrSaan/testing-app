@props(['active' => false])

@php
    $defaultClasses = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 fokus:bg-blue-500 hover:text-white fokus:text-white';

    $activeClasses = 'bg-blue-500 text-white';
    
    // cara lama
    // if ($active) $defaultClasses .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes->classes([$defaultClasses, $activeClasses => $active]) }}>{{ $slot }}</a>

{{-- cara lama --}}
{{-- <a {{ $attributes(['class' => $defaultClasses])}}
    >{{ $slot }}</a> --}}