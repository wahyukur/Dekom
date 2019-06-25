<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Report</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <style type="text/css">
    	table {
    		border: 1px solid black;
    		border-collapse: collapse;
    	}
    	h3 {
    		margin-bottom: 3px;
    		text-align: center;
    	}
    	th,td {
    		border: 1px solid black;
    	}
    	th {
    		text-align: center;
    		background: #b3bac6;
    	}
    	.rowspan {
    		text-align: center;
    	}
    	.total {
    		background: #b3bac6;
    	}
    	.totalp {
    		background: #4378d3;
    	}
    	.padding {
    		padding-left: 55px;
    	}
    	.nilai {
    		text-align: center;
    	}
    </style>
</head>
<body>
	@php
		$tahun = date('Y');
	@endphp
	<h3>SIMULASI EVALUASI KINERJA DEKOM (Self Assessment) MENGGUNAKAN DATA TAHUN {{ $tahun }}</h3>
	<table width="100%">
		<thead>
			<tr>
				<th>No.</th>
				<th>Aspek</th>
				<th>Indikator</th>
				<th>Target</th>
				<th>Realisasi</th>
				<th>Nilai</th>
				<th>Bobot (%)</th>
				<th>Nilai Akhir</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td rowspan="4" class="rowspan">1</td>
				<td rowspan="4" class="d1">Pengawasan pasif Dewan Komisaris </td>
				<td class="d1">a. Pelaksanaan review laporan kinerja usaha dan keuangan bank</td>
				<td class="d1">Dilaksanakan pada setiap rapat Dekom & Direksi sesuai target yaitu 2 bulan sekali (1 tahun 6 kali)</td>
				<td class="d1">Review laporan kinerja usaha & keuangan dilaksanakan sebanyak kali</td>
				<td class="nilai">{{ $data['hasil_a'] }}</td>
				<td class="nilai">12.5</td>
				<td class="nilai">@php $pasif_a = $data['hasil_a'] * 12.5; @endphp {{ $pasif_a }}</td>
			</tr>
			<tr>
				<td class="d1">b. Pelaksanaan review laporan hasil pemeriksaan audit dan tindak lanjut hasil audit (internal/eksternal)</td>
				<td class="d1">Dilaksanakan sesuai ketentuan dan tepat waktu sesuai target</td>
				<td class="d1">Review laporan hasil pemeriksaan audit internal dan eksternal dilaksanakan sesuai dengan ketentuan dan tepat waktu sesuai target</td>
				<td class="nilai">{{ $data['hasil_b'] }}</td>
				<td class="nilai">12.5</td>
				<td class="nilai">@php $pasif_b = $data['hasil_b'] * 12.5; @endphp {{ $pasif_b }}</td>
			</tr>
			<tr>
				<td class="d1">c. Pelaksanaan hasil penilaian Self Assessment tata kelola/GCG</td>
				<td class="d1">Dilaksanakan sesuai ketentuan dan tepat waktu sesuai target (setiap semester)</td>
				<td class="d1">Penilaian Self Assessment GCG dilaksanakan setiap semester sesuai dengan ketentuan dan tepat waktu sesuai target</td>
				<td class="nilai">{{ $data['hasil_c'] }}</td>
				<td class="nilai">12.5</td>
				<td class="nilai">@php $pasif_c = $data['hasil_c'] * 12.5; @endphp {{ $pasif_c }}</td>
			</tr>
			<tr>
				<td class="d1">d. Pelaksanaan review laporan profil risiko, hasil review laporan fungsi keputusan, hasil review laporan tingkat kesehatan bank</td>
				<td class="d1">Dilaksanakan sesuai ketentuan dan tepat waktu sesuai target (setiap semester)</td>
				<td class="d1">Pelaksanaan review atas laporan profil risiko dan fungsi kepatuhan serta tingkat kesehatan bank dilaksanakan setiap semester sesuai target</td>
				<td class="nilai">{{ $data['hasil_d'] }}</td>
				<td class="nilai">12.5</td>
				<td class="nilai">@php $pasif_d = $data['hasil_d'] * 12.5; @endphp {{ $pasif_d }}</td>
			</tr>

			<tr>
				<td colspan="6" class="total padding">Sub Total</td>
				<td class="total" style="text-align: center;">50</td>
				<td class="total" style="text-align: center;">@php $hasil_pasif = $pasif_a + $pasif_b + $pasif_c + $pasif_d; @endphp {{ $hasil_pasif }}</td>
			</tr>

			<tr>
				<td rowspan="3" class="rowspan">2</td>
				<td rowspan="3" class="d1">Pengawasan aktif Dewan Komisaris </td>
				<td class="d1">a. Jumlah rapat</td>
				<td class="d1">Rapat internal Dekom minimal 12 kali dan rapat Dekom dengan Direksi 6 kali dalam setahun (total 18 kali rapat)</td>
				<td class="d1">Pelaksaan rapat Dekom terlaksana $a2a kali dan rapat Dekom dengan Direksi terlaksana $a2b kali</td>
				<td class="d1">{{ $data['hasil_1'] }}</td>
				<td class="d1">25</td>
				<td class="d1">@php $aktif_1 = $data['hasil_1'] * 12.5; @endphp {{ $aktif_1 }}</td>
			</tr>
			<tr>
				<td class="d1">b. Mengikuti kegiatan evaluasi kinerja cabang dan unit kerja</td>
				<td class="d1">Mengikuti kegiatan evaluasi kinerja cabang-cabang/unit kerja (setiap 4 bulan)</td>
				<td class="d1">Pelaksaan kegiatan evaluasi kinerja cabang atau unit kerja terlaksana sesuai target yaitu sebanyak $b2 kali</td>
				<td class="d1">{{ $data['hasil_2'] }}</td>
				<td class="d1">15</td>
				<td class="d1">@php $aktif_2 = $data['hasil_2'] * 12.5; @endphp {{ $aktif_2 }}</td>
			</tr>
			<tr>
				<td class="d1">c. Kunjungan kecabang dalam rangka melaksanakan fungsi pengawasan</td>
				<td class="d1">Minimal 3x dalam setahun</td>
				<td class="d1">Pelaksaan kunjungan kecabang sebanyak $c2 kali</td>
				<td class="d1">{{ $data['hasil_3'] }}</td>
				<td class="d1">10</td>
				<td class="d1">@php $aktif_3 = $data['hasil_3'] * 12.5; @endphp {{ $aktif_3 }}</td>
			</tr>

			<tr>
				<td colspan="6" class="total padding">Sub Total</td>
				<td class="total" style="text-align: center;">50</td>
				<td class="total" style="text-align: center;">@php $hasil_aktif = $aktif_1 + $aktif_2 + $aktif_3; @endphp {{ $hasil_aktif }}</td>
			</tr>
			<tr>
				<td colspan="6" class="totalp padding">Sub Total</td>
				<td class="totalp" style="text-align: center;">100</td>
				<td class="totalp" style="text-align: center;">@php $hasil = $hasil_aktif + $hasil_pasif; @endphp {{ $hasil }}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>