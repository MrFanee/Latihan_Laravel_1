<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Suplier</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h3 class="mt-2">Edit Suplier</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <table class="table table-borderless">
                    @foreach ( $suplier as $suplier)
                    <form action="/suplier/update" method="post">
                    {{ csrf_field() }}   
                    
                    <tr>
                        <td><input type="hidden" name="id_suplier" value="{{ $suplier->id_suplier}}" ></td>
                    </tr>
                    <tr>
                        <td>Nama<input type="text" required="required" name="nama_suplier" value="{{ $suplier->nama_suplier}}"class="form-control" placeholder="nama suplier"></td>
                    </tr>
                    <tr>
                        <td>No Tlp<input type="text" required="required" name="no_tlp" value="{{ $suplier->no_tlp }}" class="form-control" placeholder="no tlp"></td>
                    </tr>
                    <tr>
                        <td>Alamat<input type="text" required="required" name="alamat" value="{{ $suplier->alamat }}" class="form-control" placeholder="alamat"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="simpan" class="btn btn-success">
                            <a href="/suplier" class="btn btn-danger">Kembali</a></td>
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
