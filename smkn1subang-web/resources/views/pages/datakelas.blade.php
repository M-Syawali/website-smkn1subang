@extends('layout')

@section('title', 'Data Kelas Page')

@section('content')
        <h1>Data Kelas</h1>
        <div>
                <table cellpadding=10 cellspacing=0 border=1>
                        <tr>
                                <th>ID</th>
                                <th>Nama Kelas</th>
                                <th>Jurusan</th>
                                <th>Nama Wali Kelas</th>
                                <th>Jumlah Siswa</th>
                                
                        </tr>
                        @foreach ($data as $eskul)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eskul->namakelas }}</td>
                                <td>{{ $eskul->jurusan }}</td>
                                <td>{{ $eskul->namawalikelas }}</td>
                                <td>{{ $eskul->jumlahsiswa }}</td>
                               
                        </tr>
                @endforeach
                </table>
        </div>
@endsection