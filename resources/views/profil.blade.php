{{-- mengambil data dari routes --}}
<h1>
    {{-- <?php echo $name; ?> --}}
</h1>

{{-- blade --}}
{{-- <h1>{{ $name }}</h1> --}}

{{-- <h1>{{ $nama }}</h1> --}}
@foreach ($profil as $item)
    <h1>{{ $item->alamat }}</h1>
@endforeach



