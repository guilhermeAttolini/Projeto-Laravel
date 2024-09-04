<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Users List') }}
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
                        {{ $users->links() }}
                    </div>

                    <table class="table-auto w-full">
                        <thead class="text-center bg-gray-900">
                            <tr>
                                <th>
                                    Access Level
                                </th>
                                <th class="p-4">
                                    Name
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Register Date
                                </th>
                                @can('level')
                                    <th>
                                        Actions
                                    </th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($users as $user)
                                <tr class="hover:bg-gray-900">
                                    <td>
                                        @if($user->level == 'admin')
                                            <i class="fa-brands fa-black-tie"></i>
                                        @else
                                            <i class="fa-solid fa-user"></i>
                                        @endif
                                    </td>
                                    <td class="p-2">
                                        {{ $user->name }}
                                    </td>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        {{ $user->created_at }}
                                    </td>
                                    @can('level')
                                        <td>
                                            <a href="{{ route('user.edit', $user->id) }}">
                                                Edit
                                            </a>
                                        </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>