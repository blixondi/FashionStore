<table>
    <thead>
        <tr>
            <td>Nama Produk</td>
            <td>Harga</td>
            <td>Jumlah Pembelian</td>
            <td>Total Harga</td>
        </tr>
    </thead>
    <tbody>
        @foreach($transaction->products as $p)
        <tr>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
            <td>{{$p->pivot->quantity}}</td>
            <td>{{$p->pivot->total_price}}</td>
        </tr>
    </tbody>
</table>
