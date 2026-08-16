<a href="{{ route('ppdb-admin.create') }}">+ Tambah Siswa Baru</a>
<br><br>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>No. HP</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($ppdb as $item)
            <tr>
                <td>{{ $item->nisn }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>{{ $item->nomor_hp_siswa }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('ppdb-admin.edit', $item->id) }}">Edit</a>
                    
                    <form action="{{ route('ppdb-admin.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data pendaftar.</td>
            </tr>
        @endforelse
    </tbody>
</table>