<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                {{-- form start --}}
                    <form action="{{ route('produk.store') }}" method="POST" class="max-w-sm mx-auto">
                        @csrf
                        <div class="mb-5">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Produk Name</label>
                        <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                        <input type="text" id="price" name="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                        <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                        <input type="text" id="stok" name="stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>                       
                {{-- form end --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>