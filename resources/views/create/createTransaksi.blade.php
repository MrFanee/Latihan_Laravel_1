<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah transaksi</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">Tambah transaksi</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <table class="table table-borderless">
                    <form method="post" action="/transaksi/store" >
                    {{ csrf_field() }}                                     
                    <tr>
                        <td>id_barang <input type="text" name="id_barang" class="form-control" placeholder="id barang"></td>
                    </tr>
                    <tr>
                        <td>id_pembeli <input type="text" name="id_pembeli" class="form-control" placeholder="id pembeli"></td>
                    </tr>
                    <tr>
                        <td>tanggal <input type="date" name="tanggal" class="form-control" placeholder="tanggal"></td>
                    </tr>
                    <tr>
                        <td>Keterangan <br>
                            <input type="radio" id="keterangan" name="keterangan" value="Lunas">
                            <label for="keterangan">Lunas</label><br>
                            <input type="radio" id="keterangan" name="keterangan" value="Belum Lunas">
                            <label for="keterangan">Belum lunas</label><br>
                        </td>
                        {{-- <td>keterangan <input type="text" name="keterangan" class="form-control" placeholder="keterangan"></td> --}}
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                        <a href="/transaksi" class="btn btn-danger">Kembali</a></td>
                       
                    </tr>
                    </form>
                   
                </table>
            </div>
        </div>
    </div>
</html>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
