<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <x-jet-responsive-nav-link href="{{ route('dashboard') }}">
                {{ __('Menu Pincipal') }}
            </x-jet-responsive-nav-link>
        </h2>
    </x-slot>
</x-app-layout>
