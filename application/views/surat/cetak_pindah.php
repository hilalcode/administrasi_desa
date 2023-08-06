<style type="text/css">
@media print and (width: 21cm) and (height: 33cm) {
     @page {
        margin: 1cm;
     }
}
.tabelku, .trku, .tdku {
		border: 1px solid black;
		border-collapse: collapse;
		padding: 2px;
	}
</style>
<style type="text/css" media="print">
	@page{
		size: portrait;
	}
</style>
<img src="<?php echo base_url('assets/images/koip.png'); ?>" width="100%" height="25%">
<br />
<?php $pemohon = $this->db->query("SELECT * FROM penduduk WHERE nik='$pindah->nik_pemohon'")->row(); ?>

<center><font size="5"><u><b>SURAT KETERANGAN PINDAH</b></u></font><br />Antar Desa/Kelurahan Dalam Satu Kecamatan <br />Nomor:  145/<?php echo $pindah->id_pindah; ?>/DS/<?php echo substr($pindah->tanggal_pindah, 0, 4); ?></center>
<br />
<b>DATA DAERAH ASAL</b><br />
<table width="100%">
	<tr>
		<td width="3%">1.</td>
		<td width="30%">Nomor Kartu Keluarga</td>
		<td width="3%">:</td>
		<td width="74%"><?php echo $pindah->no_kk; ?></td>
	</tr>
	<tr>
		<td>2.</td>
		<td>Nama Kepala Keluarga</td>
		<td>:</td>
		<td><?php echo $pindah->nama; ?></td>
	</tr>
	<tr>
		<td>3.</td>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $pindah->alamat; ?></td>
	</tr>
	<tr>
		<td>4.</td>
		<td>NIK Pemohon</td>
		<td>:</td>
		<td><?php echo $pemohon->nik; ?></td>
	</tr>
	<tr>
		<td>5.</td>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><?php echo $pemohon->nama; ?></td>
	</tr>
</table>
<br /> <b>DATA KEPINDAHAN</b><br />
<table width="100%">
	<tr>
		<td width="3%">1.</td>
		<td width="30%">Alasan Pindah</td>
		<td width="3%">:</td>
		<td width="74%"><?php echo $pindah->alasan_pindah; ?></td>
	</tr>
	<tr>
		<td>2.</td>
		<td>Alamat Tujuan Pindah</td>
		<td>:</td>
		<td><?php echo $pindah->alamat_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>RT</td>
		<td>:</td>
		<td><?php echo $pindah->rt_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>RW</td>
		<td>:</td>
		<td><?php echo $pindah->rw_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Dusun</td>
		<td>:</td>
		<td><?php echo $pindah->dusun_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Desa</td>
		<td>:</td>
		<td><?php echo $pindah->desa_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Kecamatan</td>
		<td>:</td>
		<td><?php echo $pindah->kecamatan_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Kabupaten</td>
		<td>:</td>
		<td><?php echo $pindah->kabupaten_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Provinsi</td>
		<td>:</td>
		<td><?php echo $pindah->provinsi_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Kode Pos</td>
		<td>:</td>
		<td><?php echo $pindah->kode_pos_pindah; ?></td>
	</tr>
	<tr>
		<td></td>
		<td>Telepon</td>
		<td>:</td>
		<td><?php echo $pindah->telepon_pindah; ?></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Pengikut/Keluarga Yang Pindah</td>
		<td>:</td>
		<td><td><?php echo $pindah->pengikut; ?></td></td>
	</tr>
</table>
<?php $anggota =  $this->db->query("SELECT * FROM penduduk WHERE no_kk='$pindah->no_kk'")->result(); ?>
<table class="tabelku">
	<tr class="trku">
		<td class="tdku" width="3%"><b><center>NO.</center></b></td>
		<td class="tdku" width="27%"><b><center>NIK</center></b></td>
		<td class="tdku" width="40%"><b><center>NAMA</center></b></td>
		<td class="tdku" width="10%"><b><center>SHDK</center></b></td>
	</tr>
	<?php
	$i = 1;
	foreach ($anggota as $data_anggota):
	?>
	<tr class="trku">
		<td class="tdku"><?php echo $i++; ?></td>
		<td class="tdku"><?php echo $data_anggota->nik; ?></td>
		<td class="tdku"><?php echo $data_anggota->nama; ?></td>
		<td class="tdku"><?php echo $data_anggota->hubungan?></td>
	</tr>
	<?php
	endforeach;
	?>
</table>
<br />
<font align="justify">
Surat Keterangan Pindah (SKP) ini berlaku sebagai pengganti KTP selama KTP baru belum diterbitkan, paling lama 30 hari kerja sejak SKP diterbitkan.<br /><br /><br />
</font>
<table width="100%">
	<tr>
		<td width="50%"></td>
		<td width="50%"><center>Saluinduk, <?php echo $pindah->tanggal_pindah; ?></center></td>
	</tr>
	<tr>
		<td></td>
		<td><center>Dikeluarkan oleh: <br />a.n. Kepala Dinas Kependudukan dan Pencatatan Sipil<br />Kepala Desa Saluinduk</center></td>
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
		<td><center><b><u><?php echo $pindah->nama_pejabat; ?></u></b></center></td>
	</tr>
	<tr>
		<td></td>
		<td><center>NIP. <?php echo $pindah->nip_pejabat; ?></center></td>
	</tr>
</table>
<script>
	window.print();
</script>