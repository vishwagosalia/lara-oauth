<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Weather Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                @if(isset($weatherData['error']))
                    <p style="color: red;">{{ $weatherData['error'] }}</p>
                @else
                    <h2>Temperature Data collected as on {{ $timestamp }}</h2>
                    @foreach($weatherData as $item)
                        <ul>
                            <li id="{{ $item['station_id'] }}">
                                <b>{{ $item['name'] }}</b>: {{ $item['temperature'] }}°C
                            </li>
                        </ul>
                    @endforeach
                @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


