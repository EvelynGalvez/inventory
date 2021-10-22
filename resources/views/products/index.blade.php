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
                        Código del Producto
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Nombre del Producto
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Categoría
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Sucursal
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Descripción
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Cantidad
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Precio Venta
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
            <tr class="bg-gray-50 text-center">
                <td class="p-2 border-r">

                </td>
                <td class="p-2 border-r">
                    <input type="text" class="border p-1">
                </td>
                <td class="p-2 border-r">
                    <input type="text" class="border p-1">
                </td>
                <td class="p-2 border-r">
                    <input type="text" class="border p-1">
                </td>
                <td class="p-2 border-r">
                    <input type="text" class="border p-1">
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td>    <button class="p-2 pl-5 pr-5 bg-indigo-500 border-2 border-blue-500 text-white text-lg rounded-lg hover:bg-blue-500 hover:text-gray-100 focus:border-4 focus:border-blue-300">Consultar</button></td>

            </tr>
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">1</td>
                <td class="p-2 border-r">111</td>
                <td class="p-2 border-r">Bastón Trekking</td>
                <td class="p-2 border-r">Trekking</td>
                <td class="p-2 border-r">Los Leones</td>
                <td>Bastón de trekking ultraliviano</td>
                <td>10</td>
                <td>10000</td>
                <td><a href="{{ route('products.show', [1]) }}" class="bg-blue-500 p-2 text-gray-600 hover:shadow-lg text-xs font-thin"><i class='far fa-eye' style='font-size:14px'></i></a>
                    <a href="{{ route('products.edit', [1]) }}" class="bg-red-500 p-2 text-gray-600 hover:shadow-lg text-xs font-thin"><i class='far fa-edit' style='font-size:14px'></i></a>
                    <a href="{{ route('products.destroy', [1]) }}" class="bg-red-500 p-2 text-red-600 hover:shadow-lg text-xs font-thin"><i class='fas fa-trash-alt' style='font-size:14px'></i></a></td>
            </tr>
            <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                <td class="p-2 border-r">2</td>
                <td class="p-2 border-r">222</td>
                <td class="p-2 border-r">Carpa 3 estaciones</td>
                <td class="p-2 border-r">Camping</td>
                <td class="p-2 border-r">Parque Arauco</td>
                <td>Footsprint incluido</td>
                <td>20</td>
                <td>100000</td>
                <td>
                    <a href="{{ route('products.show', [2]) }}" class="bg-blue-500 p-2 text-gray-600 hover:shadow-lg text-xs font-thin"><i class='far fa-eye' style='font-size:14px'></i></a>
                    <a href="{{ route('products.edit', [2]) }}" class="bg-red-500 p-2 text-gray-600 hover:shadow-lg text-xs font-thin"><i class='far fa-edit' style='font-size:14px'></i></a>
                    <a href="{{ route('products.destroy', [2]) }}" class="bg-red-500 p-2 text-red-600 hover:shadow-lg text-xs font-thin"><i class='fas fa-trash-alt' style='font-size:14px'></i></a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
