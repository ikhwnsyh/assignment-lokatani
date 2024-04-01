<x-app>
    <x-slot name='heading'>{{ $page_meta['heading'] }}</x-slot>
    <form action="{{ $page_meta['url'] }}" method="post" class=" space-y-4">
        @csrf
        @method($page_meta['method'])
        <div>
            <label for="name">Name</label>
            <x-input name='name' type='text' value="{{ old('name', $siswa->name) }}"></x-input>
            @error('name')
                <span class=" text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <x-input name='email' type='email' value="{{ old('email', $siswa->email) }}"></x-input>
            @error('email')
                <span class=" text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="phone">Phone</label>
            <x-input name='phone' type='text' value="{{ old('phone', $siswa->phone) }}"></x-input>
            @error('phone')
                <span class=" text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="address">Address</label>
            <x-input name='address' type='text' value="{{ old('address', $siswa->address) }}"></x-input>
            @error('address')
                <span class=" text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <x-primary-button>{{ $page_meta['button_text'] }}</x-primary-button>
    </form>
</x-app>
