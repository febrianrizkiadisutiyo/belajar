{{-- mengambil data dari routes --}}
<h1>
    {{-- <?php echo $name; ?> --}}
</h1>

{{-- blade --}}
{{-- <h1>{{ $name }}</h1> --}}

{{-- <h1>{{ $nama }}</h1> --}}
{{-- @foreach ($profil as $item)
    <h1>{{ $item->alamat }}</h1>
@endforeach --}}
{{-- @extends('layouts.master')
@section('content')
@foreach ($profil as $item)
    <h1>{{ $item->alamat }}</h1>
@endforeach
@endsection --}}

@extends('layouts.master')
@section('content')
    {{-- @foreach ($profil as $item)
        <h1>{{ $item->alamat }}</h1>
    @endforeach --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profil as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nama }}</td>
                <td>{{ $p->alamat }}</td>   
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
