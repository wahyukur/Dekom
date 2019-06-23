<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Export Excel Data Kegiatan</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
                <th>No.</th>
            </tr>
        </thead>
        <tbody>
        @php $no = 1; @endphp
        @foreach($kegiatanData as $dataIbu)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $dataIbu->jenis_id }}</td>
                <td>{{ $dataIbu->nama_keg }}</td>
                <td>{{ $dataIbu->tempat }}</td>
                <td>{{ $dataIbu->penyelenggara }}</td>
                <td>{{ $dataIbu->dihadiri }}</td>
                <td>{{ $dataIbu->tgl_mulai }}</td>
                <td>{{ $dataIbu->tgl_akhir }}</td>
                <td>{{ $dataIbu->keterangan }}</td>
                <td>{{ $dataIbu->check }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>