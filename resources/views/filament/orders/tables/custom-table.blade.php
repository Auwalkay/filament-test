<div>
    <div class="pb-4 p-2">
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative flex items-center mt-1">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" id="table-search" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 mr-4" placeholder="">
            <div class="flex items-center border border-gray-300 rounded p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class=" w-3 h-3 mr-1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
                Filter
            </div>
            <div class="ml-auto flex items-center bg-white gap-2">

                <div class="text-green-600  border-2 border-green-600 py-3 font-bold px-3 flex items-center rounded">
                    <x-filament::icon icon="heroicon-o-bars-arrow-down" class="w-4 h-4 mx-3 border-2 rounded border-green-600">

                    </x-filament::icon>
                    Export csv
                </div>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">


        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th></th>
                <th scope="col" class="px-2 py-2">User ID/Name</th>
                <th scope="col" class="px-2 py-2">Balance</th>
                <th scope="col" class="px-6 py-3">Phone</th>
                <th scope="col" class="px-6 py-3">Country</th>
                <th scope="col" class="px-6 py-3">Postcode</th>
                <th scope="col" class="px-6 py-3">State</th>
                <th scope="col" class="px-6 py-3">Date</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
            </thead>
            <tbody>
            {{--        @foreach ($records as $record)--}}
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">#38944</th>
                <td class="px-6 py-4">100.09</td>
                <td class="px-6 py-4">+234090445</td>
                <td class="px-6 py-4">Nigeria</td>
                <td class="px-6 py-4">12345678</td>
                <td class="px-6 py-4">Abuja</td>
                <td class="px-6 py-4">27/02/2024</td>
                <td class="px-6 py-4">
                    <div class="flex item-center">
                        <a href="#" class="font-medium text-gray-600 dark:text-blue-500 hover:underline">
                            <x-filament::icon icon="heroicon-o-eye" class="w-5 h-5  mx-2"></x-filament::icon>
                        </a>
                        <a href="#" class="font-medium text-gray-600 dark:text-blue-500 hover:underline">
                            <x-filament::icon icon="heroicon-o-trash" class="w-5 h-5  mx-2"></x-filament::icon>
                        </a>
                    </div>

                </td>
            </tr>

            {{--        @endforeach--}}

            </tbody>
        </table>
    </div>
</div>

