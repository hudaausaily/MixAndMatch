@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-white-500 dark:focus:border-white-600 focus:ring-white-500 dark:focus:ring-white-600 rounded-md shadow-sm']) !!}>
