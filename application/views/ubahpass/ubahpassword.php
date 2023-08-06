<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">
                <h4 style="text-align:center"><b>UBAH PASSWORD</b></h4>
                <hr>
            </div>

            <div class="box-body">
                <div class="card-body">

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
            <form action="<?php echo base_url('Updatepassword/update'); ?>" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class = "form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Simpan</button>
                            <a href="<?php echo base_url('Updatepassword/tampil'); ?>" class="btn btn-danger">Batal</a>
                        </div>
                    </div>
                </div>
            </form>
</div>
</div>
<div>
</div>
</section>
</div>