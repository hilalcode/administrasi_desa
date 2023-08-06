<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA PEJABAT</b></h4>
                <hr>
            </div>

            <div class="box-body table-responsive">

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
        <p>
    
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama pejabat</th>
                            <th style="text-align:center">NIP pejabat</th>
                            <th style="text-align:center">Jabatan</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            $no = 1;
            foreach ($pejabat as $value) {
              ?>
                        <tr>
                            <td style="text-align:center"><?php echo $no; ?></td>
                            <td><?php echo $value->nama_pejabat; ?></td>
                            <td><?php echo $value->nip_pejabat; ?></td>
                            <td><?php echo $value->jabatan_pejabat; ?></td>
                            <td style="text-align:center">
                            <!-- <a href="<?php echo base_url('pejabat/detail/' . $value->id_pejabat); ?>"
                                    class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a> -->
                            </td>
                        </tr>
                        <?php
              $no++;
            }
            ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>