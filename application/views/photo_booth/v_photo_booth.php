<div class="main-content">
      <section class="section">
          <div class="section-header">
            <i><h1>SURVEY COVID 19</h1></i>
            <div class="section-header-breadcrumb">
              <i><div class="breadcrumb-item active"><a ><?php echo date("D, d M Y "); ?></a></div></i>
            </div>
          </div>
      </section>
 	<div class="section-body">
 	<?= $this->session->flashdata('message'); ?>
  	    <div class="card mt-2">
                <div class="card-header" style="background:#ff0000;">
                <i><h4 style="color: white;">TABLE PENILAIAN RESIKO PRIBADI TERKAIT COVID 19</h4></i>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">

				<table class="table table-striped table-md" id = "tbl_versi">
                        <thead>
						<tr>
		                    	<th>No</th>
		                        <th>Kegiatan</th>
		                        <th>Status</th>
		                        <th>Action</th>
		                    </tr>
                          </thead>
                          <tbody>
						  <?php 
                       		$no = 1;
                       		foreach ($background as $row): ?>
	                        <tr>
	                            <td><?= $no++; ?></td>
	                            <td><?= $row->name; ?></td>
                              <?php if ($row->status == 1): ?>
	                            <td>Ya</td>
                              <?php else : ?>
                              	<td>Tidak</td>
                              <?php endif ?>
	                            <td><?= anchor('C_photo_booth/edit/' .$row->background_id , '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')  ?></td>
	                        </tr>
                        	<?php endforeach ?>
                          </tbody>

                    <tr>
                        <td><b>Total</b></td>
                        <td><b>Ya</b></td>
                        <td><b>:</b></td>
                        <td>
                            <span class="badge badge-dark"><?php echo $sum; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Keterangan</b></td>
                        <td></td>
                        <td><b>:</b></td>
                        <td>
                            <span class="badge badge-dark"><?php echo $sumif; ?></span>
                        </td>
                    </table>
                    <div class="card-footer text-muted">
                        Note* 
                                Jika total jawaban 'Ya' 0-7   = Resiko Rendah,
                                Jika total jawaban 'Ya' 8-14  = Resiko Sedang,
                                Jika total jawaban 'Ya' 15-21 = Resiko Tinggi
                    </div>
                </div>
            </div>
        </div>
  </div>	
</div>
<?php $this->load->view("asesoris/footer.php") ?>