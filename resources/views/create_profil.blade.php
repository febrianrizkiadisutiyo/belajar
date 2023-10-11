<form action="{{ url('storeprofil') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="satuan_produk" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama">
        <label for="satuan_produk" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>