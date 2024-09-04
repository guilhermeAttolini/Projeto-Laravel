<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('User Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Editing acces level from user <strong>{{ $user->name }}</strong> </p>
                    <p>
                        Current access level: <strong>{{ $user->level }}</strong>
                    </p>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="level">
                            Select any option
                        </label>
                        <br>
                        <select name="level" id="level" required class="py-1 px-8 bg-gray-900 rounded mr-2">
                            <option value="user">
                                Common User
                            </option>
                            <option value="admin">
                                Admin
                            </option>
                        </select>
                        <button type="submit" class="bg-gray-900 rounded py-1 px-4">
                            <i class="fa-solid fa-floppy-disk mr-2"></i>Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
