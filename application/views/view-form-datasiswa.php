<html>

<head>
    <title>Form Input Datasiswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Datasiswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama siswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" placeholder="Required">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Required">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Required">
                    </td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tgllahir" id="tgllahir" placeholder="Required">
                    </td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempatlahir" id="tempatlahir" placeholder="Required">
                    </td>
                </tr>
                <tr>
                    <th>Jenis kelamin</th>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jeniskelamin" value="laki-laki">laki-laki

                        <input type="radio" name="jeniskelamin" value="perempuan">perempuan<br>

                    </td>
                </tr>

                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="Islam">islam</option>
                            <option value="Kristen">kristen</option>
                            <option value="Katolik">katolik</option>
                            <option value="Budha">budha</option>
                            <option value="Hindu">hindu</option>
                            <option value="Protestan">protestan</option>
                            <option value="Khonghucu">khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
    </center>
</body>

</html>