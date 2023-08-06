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
    <font size="5"><u><b>SURAT KETERANGAN</b></u></font><br />Nomor:
    145/<?php echo $pengantar_haji->id_pengantar_haji; ?>/DS/<?php echo substr($pengantar_haji->tanggal_pengantar_haji, 0, 4); ?>
</center>
<br /><br /><br />
<font align="justify">
    Yang bertandatangan di bawah ini , <?php echo $pengantar_haji->jabatan_pejabat; ?> Desa Saluinduk Kecamatan Bupon
    Kabupaten Luwu Provinsi Luwu menerangkan bahwa:
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $pengantar_haji->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $pengantar_haji->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $pengantar_haji->tempat_lahir; ?> / <?= date('d F Y', strtotime($pengantar_haji->tanggal_lahir)); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $pengantar_haji->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Status Perkawinan</td>
        <td>:</td>
        <td><?php echo $pengantar_haji->status_perkawinan; ?></td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pengantar_haji->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pengantar_haji->alamat; ?></td>
    </tr>
</table>
<br />
<font align="justify">
    Nama tersebut diatas benar Warga Desa Saluinduk Kecamatan Bupon Kabupaten Luwu Provinsi Luwu .
    menerangkan bahwa nama tersebut diatas mendaftarkan <b><i>IBADAH HAJI</i></b> <br /><br />
    Demikian Surat Keterangan ini dibuat dengan sebenarnya, untuk dapat dipergunakan sesuai keperluannya serta agar yang
    berkepentingan menjadi maklum.<br /><br /><br />
</font>
<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Saluinduk, <?= date('d F Y', strtotime($pengantar_haji->tanggal_pengantar_haji)); ?></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>Kepala Desa Saluinduk</center>
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
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center><b><u><?php echo $pengantar_haji->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $pengantar_haji->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>