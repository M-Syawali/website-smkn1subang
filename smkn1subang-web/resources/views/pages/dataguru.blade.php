@extends('layout')

@section('title', 'Pesertadidik Page')

@section('content')
        <h1>Data Guru</h1>
        <div>
                <table cellpadding=10 cellspacing=0 border=1>
                        <tr>
                                <th>Id</th>
                                <th>Nip</th>
                                <th>Nama Guru</th>
                                <th>JK</th>
                                <th>Mapel</th>
                                <th>Walikelas</th>
                        </tr>
                        @foreach ($data as $pesertadidik)
                        <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pesertadidik->nip }}</td>
                                <td>{{ $pesertadidik->namaguru }}</td> 
                                <td>{{ $pesertadidik->jk }}</td> 
                                <td>{{ $pesertadidik->mapel }}</td> 
                                <td>{{ $pesertadidik->walikelas }}</td> 
                           
                               
                        </tr>
                @endforeach
                </table>
        </div>
@endsection