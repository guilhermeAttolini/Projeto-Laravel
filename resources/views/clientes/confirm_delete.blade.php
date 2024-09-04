<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Delete Client') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Hello <strong>{{ Auth::user()->name }}</strong> </p>
                    <p class="mb-4">
                        Are you sure you want to delete this client?<br>
                        You cannot undo!
                    </p>
                    <p>
                        <form action="{{ route('cliente.destroy', $id->id) }}" method="post">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-600 rounded p-2 mb-4">
                                Yes
                            </button>
                        </form>
                    </p>
                    <a href="{{ route('cliente.show', $id->id ) }}" class="rounded p-2 bg-gray-900 hover:text-gray-300">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
