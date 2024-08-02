<x-filament::widget>

    <div class="fi-wi-stats-overview-stats-ctn grid gap-6 md:grid-cols-2 xl:grid-cols-4 font-sans">
        @foreach($data as $d)
            <div class="grid text-gray-400 gap-y-2 border bg-white p-3 border-gray-200 rounded">
                <div class="flex items-center gap-x-2">

                    <x-filament::icon icon="{{$d['icon']}}" class="{{$d['backgroundColor']}} rounded-xl w-5 p-1 text-white">

                    </x-filament::icon>
{{--                    <svg class="fi-wi-stats-overview-stat-icon h-5 bg-primary-600 rounded w-6 p-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">--}}
{{--                        --}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z"></path>--}}
{{--                   --}}
{{--                    </svg>--}}


                    <span class="text-sm font-medium text-gray-500 dark:text-gray-400">
                        {{$d['label']}}
                    </span>
                </div>
                <div class="text-3xl font-semibold tracking-tight text-gray-950 dark:text-white">
                    {{$d['value']}}
                </div>


                <div class="flex items-center gap-x-1 text-xs">
                    <div class="text-green-950 font-bold bg-green-200 bg-opacity-3 flex items-center rounded  px-2 text-white-100">
                        <svg class="fi-wi-stats-overview-stat-description-icon h-3 w-3 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18"></path>
                        </svg>
                        <span class="my-1"> 5%</span>

{{--                        <span class="fi-wi-stats-overview-stat-description text-sm fi-color-custom text-custom-600 dark:text-custom-400">--}}

{{--                        </span>--}}
                    </div>


                    since last week


                </div>
            </div>

        @endforeach
    </div>






</x-filament::widget>
