<style type="text/css">
@media print and (width: 21cm) and (height: 33cm) {
    @page {
        margin: 1cm;
    }
}

.tabelku {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 2px;
}
</style>
<style type="text/css" media="print">
@page {
    size: portrait;
}
</style>
<img src="<?php echo base_url('assets/images/koip.png'); ?>" width="100%" height="30%">
<br /><br /><br />
<center>
    <font size="5"><u><b>SURAT KETERANGAN DESA</b></u></font><br />Nomor:
    145/<?php echo $pernikahan->id_pernikahan; ?>/DS/<?php echo substr($pernikahan->tanggal_surat_keterangan, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertanda tangan dibawah ini , Kepala Desa Warungbambu Kecamatan Karawang Timur Kabupaten Karawang Provinsi Jawa
    Barat
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $pernikahan->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $pernikahan->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $pernikahan->tempat_lahir; ?> /
            <?= date('d F Y', strtotime($pernikahan->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $pernikahan->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pernikahan->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pernikahan->alamat; ?></td>
    </tr>
</table>
<br /><br />
<center>Adalah benar warga kami, dan nama tersebut diatas berstatus :<br />--------------------- <b>><?php echo $pernikahan->status_perkawinan; ?></b>
    ---------------------</center>
<font align="justify">
    Demikian Surat Keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta agar yang
    berkepentingan menjadi maklum.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Salu Induk, <?= date('d F Y', strtotime($pernikahan->tanggal_surat_keterangan)); ?></center>
        </td>
    </tr>
    <tr>
        <td>
            <center>Yang Bersangkutan</center>
        </td>
        <td>
            <center>Kepala Desa Salu Induk</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kecamatan Bupon</center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>
            <center><b><u><?php echo $pernikahan->nama; ?></u></b></center>
        </td>
        <td>
            <center><b><u><?php echo $pernikahan->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $pernikahan->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>