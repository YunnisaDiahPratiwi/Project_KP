<h1 align="center">Data Berita Acara</h1>
<hr>
<table width="100%" border="1px" style="border-collapse: collapse;">
    <thead>
    <tr>
        <th width="8" align="center">No</th>
        <th width="25" align="center">IT Asset</th>
        <th width="20" align="center">User</th>
        <th width="20" align="center">Unit</th>
        <th width="20" align="center">Kategori Layanan</th>
        <th width="20" align="center">Jenis Layanan</th>
        <th width="70" align="center">Detail Pekerjaan</th>
        <th width="20" align="center">Status</th>
        <th width="70" align="center">Keterangan</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($beritaAcara as $item)
            <tr>
                <td align="center">{{ $loop->iteration }}</td>
                <td align="center">{{ $item->device->it_asset }}</td>
                <td align="center">{{ $item->user }}</td>
                <td align="center">{{ $item->unit }}</td>
                <td align="center">{{ $item->kategori_layanan }}</td>
                <td align="center">{{ $item->jenis_layanan }}</td>
                <td>{{ $item->detail_pekerjaan }}</td>
                <td align="center">{{ $item->status }}</td>
                <td>{{ $item->keterangan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>