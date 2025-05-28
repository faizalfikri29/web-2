<div class="container mx-auto">
     <h1 class="text-2xl font-bold mb-4">Daftar Pegawai</h1>
    <a href="{{ route('pegawai.create') }}">
        <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded mb-4">
            + Tambah Pegawai
        </button>
    </a>

    @if (session('message'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <table class="min-w-full border-collapse border border-gray-400 mt-4">
        <thead>
            <tr class="text-left bg-gray-600">
                <th class="py-2 px-4 border border-gray-300">ID</th>
                <th class="py-2 px-4 border border-gray-300">NIP</th>
                <th class="py-2 px-4 border border-gray-300">Nama</th>
                <th class="py-2 px-4 border border-gray-300">Unit Kerja ID</th>
                <th class="py-2 px-4 border border-gray-300">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawais as $pegawai)
                <tr>
                    <td class="py-2 px-4 border border-gray-300">{{ $pegawai->id }}</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $pegawai->nip }}</td>
                    <td class="py-2 px-4 border border-gray-300">{{ $pegawai->nama }}</td>
                     <td class="border px-4 py-2">{{ $pegawai->unitKerja->nama }}</td>
                     <td class="py-2 px-4 border border-gray-300">
                         <flux:button :href="route('pegawai.edit', $pegawai)">Edit</flux:button>
                         <flux:button variant="danger" wire:click="delete({{ $pegawai->id }})"
                            wire:confirm="Yakin ingin menghapus?">Delete</flux:button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
