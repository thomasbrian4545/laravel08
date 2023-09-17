@forelse ($mahasiswas as $mahasiswa)
    {{ $mahasiswa->nama }} ({{ $mahasiswa->nim }}), Tanggal Lahir: {{ $mahasiswa->tanggal_lahir }}, IPK:
    {{ $mahasiswa->ipk }} <br>
@empty
    Tidak ada data!
@endforelse
