<!DOCTYPE html>
<html>
<head>
	<title>Pembeli Pdf</title>
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
            <th scope="col">Nama Pembeli</th>
            <th scope="col">jenis Kelamin</th>
            <th scope="col">No telepon</th>
            <th scope="col">Alamat</th>
        </tr>
        @php $i=1 @endphp
        @foreach ( $table_pembeli as $pembeli)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $pembeli->nama_pembeli}}</td>
            <td>{{ $pembeli->jk}}</td>
            <td>{{ $pembeli->no_tlp}}</td>
            <td>{{ $pembeli->alamat}}</td>
        </tr>
        @endforeach
    </table>
 
</body>
</html>