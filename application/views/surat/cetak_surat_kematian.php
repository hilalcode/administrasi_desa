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
<img src="<?php echo base_url('assets/images/koip.png'); ?>" width="100%" height="25%">
<br /><br />
<center><b>UNTUK YANG BERSANGKUTAN</b> <br />
    <font size="3"><u><b>SURAT KETERANGAN KEMATIAN</b></u></font><br />Nomor:
    474.1/<?php echo $surat_kematian->id_surat_kematian; ?>/Desa/<?php echo substr($surat_kematian->tanggal_surat_kematian, 0, 4); ?>
</center>
<br />
<font align="justify">
    Yang bertandatangan di bawah ini , <?php echo $surat_kematian->jabatan_pejabat; ?> Desa Saluinduk Kecamatan
    Bupon Kabupaten Luwu, menerangkan bahwa pada:
</font>
<table width="100%">
    <tr>
        <td width="20%">Nama</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $surat_kematian->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $surat_kematian->nik; ?></td>
    </tr>
    <tr>
        <td>Tempat/Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $surat_kematian->tempat_lahir; ?> /
            <?= date('d F Y', strtotime($surat_kematian->tanggal_lahir)); ?>
        </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $surat_kematian->jenis_kelamin; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $surat_kematian->alamat; ?></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php echo $surat_kematian->agama; ?></td>
    </tr>
</table>
 Yang bersangkutan benar telah Meninggal Dunia pada :
<table width="100%">
    <tr>
        <td width="20%">Hari/Tanggal</td>
        <td width="3%">:</td>
        <td width="77%">
            <?php echo $surat_kematian->hari_kematian; ?> /
            <?= date('d F Y', strtotime($surat_kematian->tanggal_kematian)); ?>
        </td>
    </tr>
    <tr>
        <td>Jam</td>
        <td>:</td>
        <td><?php echo $surat_kematian->jam_kematian; ?></td>
    </tr>
    <tr>
        <td>Tempat Kematian</td>
        <td>:</td>
        <td><?php echo $surat_kematian->tempat_kematian; ?></td>
    </tr>
    <tr>
        <td>Sebab Kematian</td>
        <td>:</td>
        <td><?php echo $surat_kematian->sebab_kematian; ?></td>
    </tr>
    <tr>
        <td>Jam Pemakaman</td>
        <td>:</td>
        <td><?php echo $surat_kematian->jam_pemakaman; ?></td>
    </tr>
    <tr>
        <td>Tempat Pemakaman</td>
        <td>:</td>
        <td><?php echo $surat_kematian->tempat_pemakaman ?></td>
    </tr>
</table>
Demikian Surat Keterangan Kematian ini dibuat berdasarkan keterangan pelapor:
<?php
$pelapor = $this->db->query("SELECT * FROM penduduk WHERE nik='$surat_kematian->nik_pelapor'")->row();
?>
<table width="100%">
    <tr>
        <td width="20%">Nama Lengkap</td>
        <td width="3%">:</td>
        <td width="77%"><?php echo $pelapor->nama; ?></td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td><?php echo $pelapor->nik; ?></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><?php

            $lahir = new DateTime($surat_kematian->tanggal_lahir);
            $hari_ini = new DateTime();

            $diff = $hari_ini->diff($lahir);
            echo $diff->y . " Tahun";

            ?>
        </td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
        <td>:</td>
        <td><?php echo $pelapor->pekerjaan; ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pelapor->alamat; ?></td>
    </tr>
    <tr>
        <td>Hubungan Pelapor</td>
        <td>:</td>
        <td><?php echo $surat_kematian->hubungan_sebagai; ?></td>
    </tr>
</table>


<table width="100%">
    <tr>
        <td width="50%"></td>
        <td width="50%">
            <center>Saluinduk, <?= date('d F Y', strtotime($surat_kematian->tanggal_surat_kematian)); ?></center>
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
            <center><b><u><?php echo $surat_kematian->nama_pejabat; ?></u></b></center>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <center>NIP. <?php echo $surat_kematian->nip_pejabat; ?></center>
        </td>
    </tr>
</table>
<script>
window.print();
</script>