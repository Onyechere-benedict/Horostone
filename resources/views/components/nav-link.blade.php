@props(['active' => false])

@php
    $defaultClasses = "inline-block relative py-1 px-3 leading-8 rounded transition-all duration-300";
    $defaultAfterClasses = !$active ?: "after:absolute after:bottom-0 after:left-1/2 after:-translate-x-1/2 after:h-[2px] after:w-1/3 after:bg-white/50 after:rounded after:transition-all after:duration-300";
    $defaultHoverClasses = "hover:bg-white hover:text-black";
    $defaultHoverAfterClasses = !$active ?: "hover:after:bg-(--accent-1) hover:after:w-1/2";
@endphp

<a {{ $attributes(['class' => "$defaultClasses $defaultAfterClasses $defaultHoverClasses $defaultHoverAfterClasses"]) }}>{{ $slot }}</a>