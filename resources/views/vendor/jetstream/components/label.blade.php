@props(['value'])

@if (Auth::user())
    <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-900']) }}>
        {{ $value ?? $slot }}
    </label>  
@else  
    <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-slate-50']) }}>
        {{ $value ?? $slot }}
    </label>
@endif
