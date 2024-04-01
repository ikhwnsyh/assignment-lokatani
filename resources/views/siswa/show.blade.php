<x-app>
    <x-slot name='heading'>Detail Siswa</x-slot>
    <div class=" space-y-4 mb-2">
        <h1>Detail Siswa ID {{ $siswa->id }}</h1>
        <h1> Name :{{ $siswa->name }}</h1>
        <p>Email : {{ $siswa->email }}</p>
        <p>Phone : {{ $siswa->phone }}</p>
        <p>Address : {{ $siswa->address }}</p>
        <p>Created at : {{ $siswa->created_at->format('d F Y H:i:s') }}</p>
    </div>
    <div class=" flex items-center space-x-2">
        <x-primary-button as='a' href="{{ route('siswas.edit', $siswa) }}">Edit</x-primary-button>
        <form action="{{ route('siswas.destroy', $siswa) }}" method="post">
            @csrf
            @method('delete')
            <x-secondary-button>Delete</x-secondary-button>
        </form>
    </div>
</x-app>
