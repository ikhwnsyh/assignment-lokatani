<x-app>
    @if (session()->has('success'))
        <div class="bg-green-700 w-full rounded mb-4 px-4 py-2.5">
            <p class=" font-sm text-white">{{ session('success') }}</p>
        </div>
    @endif
    <x-slot name="heading">User</x-slot>


    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">User List</h1>

        </div>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <div class=" flex items-center space-x-2">
                <x-search-bar></x-search-bar>
                <x-primary-button as='a' href="{{ route('siswas.create') }}">Add User</x-primary-button>
            </div>
        </div>

    </div>
    <div class="mt-8 flow-root">
        <x-table>
            <x-table.thead>
                <tr>
                    <x-table.th>Id</x-table.th>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Email</x-table.th>
                    <x-table.th>Phone</x-table.th>
                    <x-table.th>Created At</x-table.th>
                    <x-table.th>Action</x-table.th>
                </tr>
            </x-table.thead>
            <x-table.tbody class="divide-y divide-gray-200 bg-white">
                @forelse ($siswas as $index=>$siswa)
                    <tr>
                        <x-table.td>{{ $index + 1 }}</x-table.td>
                        <x-table.td>{{ $siswa->name }} </x-table.td>
                        <x-table.td>{{ $siswa->email }}</x-table.td>
                        <x-table.td>{{ $siswa->phone }}</x-table.td>
                        <x-table.td>{{ $siswa->created_at }}</x-table.td>
                        <x-table.td>
                            <div class=" space-x-2">
                                <a href="{{ route('siswas.show', $siswa) }}" class=" hover:underline">
                                    Show
                                </a>
                                <a href="{{ route('siswas.edit', $siswa) }}"
                                    class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </div>
                        </x-table.td>
                    </tr>
                @empty
                    <div class="bg-red-700 w-full rounded mb-4 px-4 py-2.5">
                        <p class=" font-sm text-white">Tidak ada data</p>
                    </div>
                @endforelse
            </x-table.tbody>
        </x-table>
        <div class="mt-2">
            {{ $siswas->links() }}
        </div>
    </div>

</x-app>
