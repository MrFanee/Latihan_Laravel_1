
    @extends ('layout/main')

    {{-- template engine laravel /jika isi hanya satu baris --}}
    @section ('title', 'Pembeli')

    {{-- template engine laravel /jika isi lebih dari 1 baris kasih @endsection --}}
    @section ('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">Halaman Pembeli</h3>
            </div>
        </div>
    </div>
    @endsection

    @section('index')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <a href="/pembeli/create" class="btn btn-success btn-sm">Tambah</a>
                {{-- pdf --}}
                <a href="/pembeli/cetak_pdf" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="/pembeli/export_excel" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <table class="table table-hover">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">jenis Kelamin</th>
                        <th scope="col">No telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @foreach ( $table_pembeli as $pembeli)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pembeli->nama_pembeli}}</td>
                        <td>{{ $pembeli->jk}}</td>
                        <td>{{ $pembeli->no_tlp}}</td>
                        <td>{{ $pembeli->alamat}}</td>
                        <td>
                            <a href="pembeli/edit/ {{ $pembeli->id_pembeli }}" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="/pembeli/delete/ {{ $pembeli->id_pembeli}}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>

                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endsection


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
