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
                    <p class="mb-4">
                        Details from {{ $cliente->name }}
                    </p>
                    <p>
                        <a href="{{ route('my.clients', Auth::user()->id ) }}" class="rounded p-2 bg-gray-900 hover:text-gray-300 mr-4">
                            Return
                        </a>
                        <a href="{{ route('cliente.edit', $cliente->id ) }}" class="rounded p-2 bg-green-600 hover:text-gray-300 mr-4">
                            Edit
                        </a>
                        <a href="{{ route('confirm.delete', $cliente->id ) }}" class="rounded p-2 bg-red-600 hover:text-gray-300">
                            Delete
                        </a>
                    </p>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p>
                        <strong>Enterprise: </strong>{{ $cliente->enterprise }}
                    </p>
                    <p>
                        <strong>Phone: </strong>{{ $cliente->phone }}
                    </p>
                    <p>
                        <strong>Comercial Phone: </strong>{{ $cliente->comercial_phone }}
                    </p>
                    <p>
                        <strong>E-mail: </strong>{{ $cliente->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
