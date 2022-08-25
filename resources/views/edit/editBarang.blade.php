<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Barang</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">Edit Barang</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <table class="table table-borderless">
                    @foreach ( $barang as $barang)
                    <form action="/jual/update" method="post">
                    {{ csrf_field() }}   
                    
                    <tr>
                        <td><input type="hidden" name="id_barang" value="{{ $barang->id_barang}}" ></td>
                    </tr>
                    <tr>
                        <td>Nama<input type="text" required="required" name="nama_barang" value="{{ $barang->nama_barang}}"class="form-control" placeholder="nama barang"></td>
                    </tr>
                    <tr>
                        <td>Harga<input type="text" required="required" name="harga" value="{{ $barang->harga }}" class="form-control" placeholder="harga"></td>
                    </tr>
                    <tr>
                        <td>Stok<input type="text" required="required" name="stok" value="{{ $barang->stok }}" class="form-control" placeholder="stok"></td>
                    </tr>
                    <tr>
                        <td>id_suplier<input type="text" required="required" name="id_suplier" value="{{ $barang->id_suplier }}" class="form-control" placeholder="id_suplier"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                            <a href="/jual" class="btn btn-danger">Kembali</a></td>
                    </tr>
                    </form>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
