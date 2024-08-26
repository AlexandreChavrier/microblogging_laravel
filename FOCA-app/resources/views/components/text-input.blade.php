@props(
[
    'disabled' => false,
    
]
)

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full p-4 text-lg text-white rounded-sm bg-black']) !!}>
