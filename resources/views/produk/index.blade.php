<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('produk.create') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-5">
                        Add Produk
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>

                    {{-- Flex container start --}}
                    <div class="flex flex-wrap -mx-1">
                        {{-- card start --}}
                        @foreach ($produks as $produk)
                            <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-1 mx-1">
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $produk->name }}</p>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Rp. {{ $produk->price }},00</p>
                                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    edit
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
