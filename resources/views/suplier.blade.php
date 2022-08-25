
    @extends ('layout/main')

    {{-- template engine laravel /jika isi hanya satu baris --}}
    @section ('title', 'Suplier')

    {{-- template engine laravel /jika isi lebih dari 1 baris kasih @endsection --}}
    @section ('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">Halaman Suplier</h3>
            </div>
        </div>
    </div>
    @endsection

    @section('index')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <a href="suplier/create" class="btn btn-success btn-sm">Tambah</a>
                {{-- pdf --}}
                <a href="/suplier/cetak_pdf" class="btn btn-primary btn-sm" target="_blank">Cetak pdf</a>
                {{-- excel --}}
                <a href="/suplier/export_excel" class="btn btn-primary my-3 btn-sm" target="#">Export_excel</a>
                <table class="table table-hover">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama Suplier</th>
                        <th scope="col">No telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                    @foreach ( $table_suplier as $suplier)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $suplier->nama_suplier}}</td>
                        <td>{{ $suplier->no_tlp}}</td>
                        <td>{{ $suplier->alamat}}</td>
                        <td>
                            <a href="/suplier/edit/ {{ $suplier->id_suplier }}" class="btn btn-primary btn-sm" >Edit</a>
                            <a href="/suplier/delete/ {{ $suplier->id_suplier }}" class="btn btn-danger btn-sm">Hapus</a>
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
