@props(['naranja' => false])

<a href="" @class([
    'text-sm',
    'md:text-base',
    'bg-orange-500' => $naranja,
    'bg-white' => ! $naranja,
    'border',
    'border-orange-500',
    'rounded',
    'text-white' => $naranja,
    'font-bold',
    'py-2',
    'px-6',
    'hover:bg-orange-600' => $naranja,
    'hover:bg-gray-50' => ! $naranja,
])>
    {{ $slot }}
</a>