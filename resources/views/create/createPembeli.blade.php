<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah pembeli</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">Tambah Pembeli</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <table class="table table-borderless">
                    <form method="post" action="/pembeli/store" >
                    {{ csrf_field() }}                                     
                    <tr>
                        <td>Nama <input type="text" name="nama_pembeli" class="form-control" placeholder="nama pembeli"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin <br>
                            <input type="radio" id="jk" name="jk" value="laki-laki">
                            <label for="jk">Laki-Laki</label><br>
                            <input type="radio" id="jk" name="jk" value="perempuan">
                            <label for="jk">Perempuan</label><br>
                        </td>
                        {{-- <td>Jenis Kelamin 
                            <input type="text" name="jk" class="form-control" placeholder="jenis kelamin">
                        </td> --}}
                    </tr>
                    <tr>
                        <td>No Telepon <input type="text" name="no_tlp" class="form-control" placeholder="no_tlp"></td>
                    </tr>
                    <tr>
                        <td>alamat <input type="text" name="alamat" class="form-control" placeholder="alamat"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                        <a href="/jual" class="btn btn-danger">Kembali</a></td>
                       
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
