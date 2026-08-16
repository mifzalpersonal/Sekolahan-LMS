<a href="{{ route('ppdb-admin.index') }}">← Kembali</a>
<h1>Edit Pendaftar: {{ $ppdb->nama }}</h1>

<form action="{{ route('ppdb-admin.update', $ppdb->id) }}" method="POST">
    @csrf
    @method('PUT')

    <h3>Data Siswa</h3>
    
    <label>NISN:</label><br>
    <input type="text" name="nisn" value="{{ old('nisn', $ppdb->nisn) }}"><br>
    @error('nisn') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>NIK:</label><br>
    <input type="text" name="nik" value="{{ old('nik', $ppdb->nik) }}"><br>
    @error('nik') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Nama Lengkap:</label><br>
    <input type="text" name="nama" value="{{ old('nama', $ppdb->nama) }}"><br>
    @error('nama') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Jenis Kelamin:</label><br>
    <select name="kelamin">
        <option value="L" {{ old('kelamin', $ppdb->kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
        <option value="P" {{ old('kelamin', $ppdb->kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
    </select><br>
    @error('kelamin') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Tempat Lahir:</label><br>
    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir', $ppdb->tempat_lahir) }}"><br>
    @error('tempat_lahir') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir', $ppdb->tanggal_lahir) }}"><br>
    @error('tanggal_lahir') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Alamat:</label><br>
    <textarea name="alamat">{{ old('alamat', $ppdb->alamat) }}</textarea><br>
    @error('alamat') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>No. HP Siswa:</label><br>
    <input type="text" name="nomor_hp_siswa" value="{{ old('nomor_hp_siswa', $ppdb->nomor_hp_siswa) }}"><br>
    @error('nomor_hp_siswa') <span style="color:red">{{ $message }}</span><br> @enderror

    <h3>Data Orang Tua</h3>

    <label>Nama Orang Tua:</label><br>
    <input type="text" name="nama_ortu" value="{{ old('nama_ortu', $ppdb->nama_ortu) }}"><br>
    @error('nama_ortu') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>No. HP Orang Tua:</label><br>
    <input type="text" name="nomor_hp_ortu" value="{{ old('nomor_hp_ortu', $ppdb->nomor_hp_ortu) }}"><br>
    @error('nomor_hp_ortu') <span style="color:red">{{ $message }}</span><br> @enderror

    <h3>Sekolah & Status</h3>

    <label>Asal Sekolah:</label><br>
    <input type="text" name="asal_sekolah" value="{{ old('asal_sekolah', $ppdb->asal_sekolah) }}"><br>
    @error('asal_sekolah') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="{{ old('jurusan', $ppdb->jurusan) }}"><br>
    @error('jurusan') <span style="color:red">{{ $message }}</span><br> @enderror

    <label>Status Verifikasi:</label><br>
    <select name="status">
        <option value="belumverif" {{ old('status', $ppdb->status) == 'belumverif' ? 'selected' : '' }}>Belum Verifikasi</option>
        <option value="terverifikasi" {{ old('status', $ppdb->status) == 'terverifikasi' ? 'selected' : '' }}>Terverifikasi</option>
    </select><br>
    @error('status') <span style="color:red">{{ $message }}</span><br> @enderror

    <br>
    <button type="submit">Update Data</button>
</form>