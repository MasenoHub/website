<x-app-layout>
    @section('title', 'About')
    @section('url', route('about'))
    @section('description', 'About Maseno Hub.')

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Maseno Hub') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden sm:rounded-lg bg-white p-4">
                            About
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>