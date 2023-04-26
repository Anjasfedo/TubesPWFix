<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pendapatan</title>

    <style>/* Center align text */
        .text-center {
          text-align: center;
        }
        
        /* Style for table */
        table {
          width: 100%;
          border-collapse: collapse;
        }
        
        /* Style for table header */
        th {
          background-color: #f5f5f5;
          border: 1px solid #ddd;
          text-align: center;
          padding: 8px;
        }
        
        /* Style for table data */
        td {
          border: 1px solid #ddd;
          text-align: center;
          padding: 8px;
        }
        
        /* Style for table striped */
        .table-striped tbody tr:nth-of-type(odd) {
          background-color: #f9f9f9;
        }
        </style>
</head>
<body>
    <h3 class="text-center">Laporan Pendapatan</h3>
    <h4 class="text-center">
        Tanggal {{ tanggal_indonesia($awal, false) }}
        s/d
        Tanggal {{ tanggal_indonesia($akhir, false) }}
    </h4>

    <table class="table table-striped">
        <thead>
            <tr>
                <th width="5%">No</th>
                <th>Tanggal</th>
                <th>Penjualan</th>
                <th>Pembelian</th>
                <th>Gaji Karyawan</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Pendapatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    @foreach ($row as $col)
                        <td>{{ $col }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>