<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Client Registry') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Hello, <strong>{{ Auth::user()->name }}</strong> </p>

                    @can('level')
                        <p class="mb-4">
                            <a href="{{ route('cliente.index') }}" class="rounded p-2 bg-gray-900 hover:text-gray-300">
                                Clients List
                            </a>
                        </p>
                    @endcan

                    <p class="mb-4">
                        <a href="{{ route('my.clients', Auth::user()->id) }}" class="rounded p-2 bg-gray-900 hover:text-gray-300">
                            My Clients
                        </a>
                    </p>

                    @if(session('msg'))
                        <p class="p-2 rounded text-center mb-4 bg-gray-900">
                            {{ session('msg') }}
                        </p>
                    @endif

                    <form action="{{ route('cliente.store') }}" method="post">
                        @csrf
                        <fieldset class="border-2 rounded p-6">

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="p-4 rounded overflow-hidden">
                                <label for="name">
                                    Name
                                </label>
                                <input type="text" name="name" id="name" class="w-full rounded bg-gray-900" required>
                            </div>
                            <div class="p-4 rounded overflow-hidden">
                                <label for="email">
                                    E-mail
                                </label>
                                <input type="email" name="email" id="email" class="w-full rounded bg-gray-900" required>
                            </div>
                            <div class="p-4 rounded overflow-hidden">
                                <label for="phone">
                                    Phone
                                </label>
                                <input type="tel" name="phone" id="phone" class="w-full rounded bg-gray-900" required>
                            </div>
                            <div class="p-4 rounded overflow-hidden">
                                <label for="enterprise">
                                    Enterprise Name
                                </label>
                                <input type="text" name="enterprise" id="enterprise" class="w-full rounded bg-gray-900" required>
                            </div>
                            <div class="p-4 rounded overflow-hidden">
                                <label for="comercial_phone">
                                    Comercial Phone
                                </label>
                                <input type="tel" name="comercial_phone" id="comercial_phone" class="w-full rounded bg-gray-900" required>
                            </div>
                            <div class="rounded overflow-hidden ml-4 mt-4">
                                <button type="submit" class="bg-green-600 rounded p-2 mr-4">
                                    Register
                                </button>
                                <button type="reset" class="bg-red-600 rounded p-2 mr-4">
                                    Reset
                                </button>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>