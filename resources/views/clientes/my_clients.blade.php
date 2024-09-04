<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('My Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Hello <strong>{{ Auth::user()->name }}</strong> </p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead class="bg-gray-900 text-center">
                            <tr>
                                <th class="p-2">
                                    Name
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($clients as $client)
                                <tr class="hover:bg-gray-900">
                                    <td class="p-2">
                                        {{ $client->name }}
                                    </td>
                                    <td class="p-2">
                                        {{ $client->phone }}
                                    </td>
                                    <td class="p-2">
                                        {{ $client->email }}
                                    </td>
                                    <td>
                                        <a href="{{ route('cliente.show', $client->id) }}">
                                            Info <i class="fa-solid fa-circle-info"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
