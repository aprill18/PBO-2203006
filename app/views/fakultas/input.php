<h2>Input Fakultas</h2>

<form action="<?php echo URL; ?>/fakultas/save" method="post">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="kode" name="fakultas_kode" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="nama" name="fakultas_nama" required></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td><input type="prodi" name="fakultas_prodi" required></td>
        </tr>
        <tr>
            <td>TAHUN BERDIRI</td>
            <td><input type="tahun_berdiri" name="fakultas_tahun_berdiri" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>