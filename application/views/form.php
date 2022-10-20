<html>
<head>
    <title>Tugas Web Programming II</title>
</head>
<body>
<form action="<?= base_url('formtugas'); ?>" method="post">
    <h1>Data Registrasi</h1>
    
    <table width="500" border="0">
    <tr>
        <th>Nama</th>
        <td>:</td>
        <td><input type="text" name="nama" id="nama"></td>`
    </tr>

    <tr>
        <th>NIS</th>
        <td>:</td>
        <td><input type="text" name="nis" id="nis"></td>
    </tr>

    <tr>
        <th>Kelas</th>
        <td>:</td>
        <td><input type="text" name="kelas" id="kelas"></td>
    </tr>

    <tr>
        <th>Tanggal Lahir</th>
        <td>:</td>
        <td><input type="date" name="tgllahir" id="tgllahir"></td>
    </tr>

    <tr>
        <th>Tempat Lahir</th>
        <td>:</td>
        <td><input type="text" name="tmptlahir" id="tmptlahir"></td>
    </tr>

    <tr>
        <th>Alamat</th>
        <td>:</td>
        <td><input type="text" name="alamat" id="alamat"></td>
    </tr>

    <tr>
        <th>Jenis Kelamin</th>
        <td>:</td>
        <td>
            <input type="radio" name="gender" id="laki" value="laki"><label for="laki">Laki-laki</label>
            <input type="radio" name="gender" id="perempuan" value="perempuan"><label for="perempuan">Perempuan</label>
        </td>
 </tr>
    
    <tr>
        <th>Agama</th>
        <td>:</td>
        <td>
        <select name="agama" id="agama">
        <option value="">--</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        <option value="Protestan">Protestan</option>
        <option value="Khonghucu">Khonghucu</option>
        </select>
        </td>
    </tr>
    </table>
<br>
<input type="submit" value="Submit">
<input type="submit" value="reset">

</body>
</html>