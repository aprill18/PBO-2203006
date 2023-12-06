<h2>Edit Fakultas</h2>

<form action="<?php echo URL; ?>/fakultas/update" method="post">
    <input type="hidden" name="fakultas_id" value="<?php echo $data['row']['fakultas_id']; ?>">
    <table>
        <tr>
            <td>KODE</td>
            <td><input type="text" name="kode" value="<?php echo $data['row']['fakultas_kode']; ?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['fakultas_nama']; ?>" required></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td><input type="text" name="prodi" value="<?php echo $data['row']['fakultas_prodi']; ?>" required></td>
        </tr>
        <tr>
            <td>TAHUN BERDIRI</td>
            <td><input type="text" name="tahun_berdiri" value="<?php echo $data['row']['fakultas_tahun_berdiri']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>