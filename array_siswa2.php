<fieldset>
    <legend>Hasil Belanja</legend>

    <table width="100%" style="border: 2px solid #000;" border="1px">
        <tr>
            <th>Nama Consumen</th>
            <th>Produk pilihan</th>
            <th>Jumlah Produk</th>
        </tr>
        <tr>
            <td><?php echo $pembeli = $_POST['pembeli']; ?></td>
            <td><?php echo $produk = $_POST['produk']; ?></td>
            <td><?php echo $jumlah = $_POST['jumlah']; ?></td>
        </tr>
    </table>

</fieldset>