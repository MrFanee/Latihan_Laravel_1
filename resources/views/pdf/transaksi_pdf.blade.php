<!DOCTYPE html>
<html>
<head>
	<title>transaksi Pdf</title>
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
        <tr>
            <th scope="col">NO</th>
            <th scope="col">id_barang</th>
            <th scope="col">id_pembeli</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Keterangan</th>
        </tr>
        @php $i=1 @endphp
        @foreach ( $table_transaksi as $transaksi)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $transaksi->id_barang}}</td>
            <td>{{ $transaksi->id_pembeli}}</td>
            <td>{{ $transaksi->tanggal}}</td>
            <td>{{ $transaksi->keterangan}}</td>
        </tr>
        @endforeach
    </table>
 
</body>
</html>