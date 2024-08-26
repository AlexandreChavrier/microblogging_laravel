<button {{ $attributes->merge(['type' => 'submit', 'class' => 'uppercase block w-full p-4 text-lg rounded-full bg-indigo-500 hover:bg-indigo-600 focus:outline-none']) }}>
    {{ $slot }}
</button>
