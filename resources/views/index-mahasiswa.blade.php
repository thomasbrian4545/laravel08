@forelse ($mahasiswas as $mahasiswa)
    <a href="{{ url('mahasiswa/' . $mahasiswa->nim) }}">{{ $loop->iteration }}. {{ $mahasiswa->nama }}</a><br>
@empty
    Tidak ada data!!
@endforelse
