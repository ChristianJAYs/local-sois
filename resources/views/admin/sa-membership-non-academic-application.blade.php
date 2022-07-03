<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Non-Academic Application') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-11xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('sa-membership-non-academic-application')
            </div>
        </div>
    </div>


</x-app-layout>