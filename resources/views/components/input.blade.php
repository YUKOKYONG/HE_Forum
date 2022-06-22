@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'bg-transparent text-white rounded-md shadow-sm focus:border-orange-600 focus:ring focus:ring-orange-600']) !!}>
