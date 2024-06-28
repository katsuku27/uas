<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- Flex container start --}}
                    <div class="flex flex-wrap -mx-1">
                        {{-- card start --}}
                        @foreach ($produks as $produk)
                            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-1 mx-1">
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $produk->name }}</p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. {{ $produk->price }},00</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    buy
                                    <!-- SVG icon omitted for brevity -->
                                </a>
                            </div>
                        @endforeach
                    </div>
                    {{-- Flex container end --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
