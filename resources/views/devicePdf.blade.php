<h1 align="center">Data Perangkat</h1>
<hr>
<table width="100%" border="1px" style="border-collapse:collapse">
    <thead>
    <tr>
        <th width="20" align="center">No</th>
        <th width="28" align="center">IT Asset</th>
        <th width="20" align="center">RAM</th>
        <th width="20" align="center">Media Penyimpanan</th>
        <th width="20" align="center">Processor</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($device as $item)
            <tr>
                <td align="center">{{ $loop->iteration }}</td>
                <td align="center">{{ $item->it_asset }}</td>
                <td align="center">{{ $item->ram }}</td>
                <td align="center">{{ $item->storage }}</td>
                <td align="center">{{ $item->processor }}</td>
            </tr>
        @endforeach
    </tbody>
</table>