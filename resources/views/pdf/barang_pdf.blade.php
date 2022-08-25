<!DOCTYPE html>
<html>
<head>
	<title>Barang Pdf</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<table class="table table-borderless">
        <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Suplier</th>
        </tr>
        </thead>
        <tbody>
        @php $i=1 @endphp
        @foreach ($table_barang as $barang)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $barang->nama_barang}}</td>
            <td>{{ $barang->harga}}</td>
            <td>{{ $barang->stok}}</td>
            <td>{{ $barang->id_suplier}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
 
</body>
</html>