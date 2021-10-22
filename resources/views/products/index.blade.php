<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Productos
        </h2>
        <div class="flex flex-wrap px-8 -mx-2 overflow-hidden lg:px-0 sm:px-0 xl:px-0">
            <div class="flex px-2 my-2 overflow-hidden">
                <a href="{{ route('products.create') }}">Crear Producto</a>
            </div>
        </div>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </x-slot>

    <!-- component -->
    <div class="table w-full p-2">
        <table class="w-full border">
            <thead>
            <tr class="bg-gray-50 border-b">
                <th class="border-r p-2">
                    <input type="checkbox">
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        ID
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Name
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Email
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Address
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Action
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">
                    <input type="checkbox">
                </td>
                <td class="p-2 border-r">3</td>
                <td class="p-2 border-r">Jean Doe</td>
                <td class="p-2 border-r">jean@gmail.com</td>
                <td class="p-2 border-r">Sydney, Australia</td>
                <td>
                    <a href="#" class="bg-blue-500 p-2 text-gray-600 hover:shadow-lg text-xs font-thin"><i class='far fa-edit' style='font-size:24px'></i></a>
                    <a href="#" class="bg-red-500 p-2 text-red-600 hover:shadow-lg text-xs font-thin"><i class='fas fa-trash-alt' style='font-size:24px'></i></a>
                </td>
            </tr>
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">
                    <input type="checkbox">
                </td>
                <td class="p-2 border-r">3</td>
                <td class="p-2 border-r">Jean Doe</td>
                <td class="p-2 border-r">jean@gmail.com</td>
                <td class="p-2 border-r">Sydney, Australia</td>
                <td>
                    <a href="#" class="bg-blue-500 p-2 text-gray-600 hover:shadow-lg text-xs font-thin"><i class='far fa-edit' style='font-size:24px'></i></a>
                    <a href="#" class="bg-red-500 p-2 text-red-500 hover:shadow-lg text-xs font-thin"><i class='fas fa-trash-alt' style='font-size:24px'></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
