<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Clients List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Hello, <strong>{{ Auth::user()->name }}</strong> </p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="p-3 bg-gray-900 rounded-lg mb-4">
                        {{ $clientes->links() }}
                    </div>

                    <table class="table-auto w-full">
                        <thead class="bg-gray-900 rounded text-center">
                            <tr>
                                <th class="p-4">
                                    Name
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    Registered By
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($clientes as $cliente)
                                <tr class="hover:bg-gray-900 rounded">
                                    <td class="p-2">
                                        {{ $cliente->name }}
                                    </td>
                                    <td class="p-2">
                                        {{ $cliente->email }}
                                    </td>
                                    <td class="p-2">
                                        {{ $cliente->phone }}
                                    </td>
                                    <td class="p-2">
                                        {{ $cliente->user->name }}
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
