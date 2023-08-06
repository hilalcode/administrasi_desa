<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">
        <h4 style="text-align:center"><b>TAMBAH DATA PEJABAT</b></h4><hr>
      </div>

      <div class="box-body">

        <?php
if ($this->session->flashdata('sukses')) {
	?>
         <div class="callout callout-success">
          <p style="font-size:14px">
            <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
          </p>
        </div>
        <?php
}
?>
      <form action="<?php echo base_url('pejabat/proses_tambah'); ?>" method="post">

      <div class="row">
         <div class="col-lg-12">
        <div class="form-group">
        
        <!-- <label>Id_pejabat</label>
          <input type="text" name="id" class="form-control" />
       </div> -->

        <div class="form-grup">
          <label>Nama</label>
          <input type="text" name="nama_pejabat" class="form-control" />
        </div>

        <div class="form-group">
          <label>NIP</label>
          <input type="text" name="nip_pejabat"  class="form-control" />
        </div>

        <div class="form-group">
          <label>Jabatan</label>
		  <select name="jabatan_pejabat" class="form-control">
			<option value="Kepala Desa">Kepala Desa</option>
			<option value="Sekertaris Desa">Sekertaris Desa</option>
			<option value="Kaur Pemerintahan">Kaur Pemerintahan</option>
		  </select>
        </div>

        <div class="form-group">
               <button type="submit" class="btn btn-primary">Simpan</button>
               <a href="<?php echo base_url('pejabat/tampil'); ?>"
                  class="btn btn-danger">Batal</a>
           </div>

       
      </form>
    </div>
  </div>
</section>
</div>

