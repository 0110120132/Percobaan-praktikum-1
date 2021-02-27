<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belanja</title>
</head>

<body>
    <h2>Belanja Online</h2>
    <hr />
    <fieldset>
        <legend>Form Belanja</legend>

        <form method="POST" action="array_siswa2.php">
            <table>
                <tr>
                    <td>Contumer</td>
                    <td>:</td>
                    <td><input type="text" name="pembeli" value="" /></td>
                </tr>
                <tr>
                    <td>Pilih produk</td>
                    <td>:</td>
                    <td><select name="produk">
                            <option value="Televisi">TV</option>
                            <option value="Kulkas">Kulkas</option>
                            <option value="Mesin Cuci">Mesin Cuci</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Barang</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" value="" /></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit" value="Kirim">kirim</button></td>
                </tr>
            </table>
        </form>

    </fieldset>

</body>