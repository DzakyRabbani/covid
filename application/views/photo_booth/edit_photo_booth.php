<div class="main-content">
  <div class="section-body">  
    <?php echo form_open_multipart('C_photo_booth/update'); ?>
    <div class="card">
      <div class="card-header">
          <h2>Edit Form</h2>
      </div>
      <div class="card-body">
      <?php foreach ($background as $row) { ?>
         <input type="hidden" name="background_id" value="<?= $row->background_id ?>">
        <div class="form-group">
           <label>Kegiatan</label>
           <input type="text" name="name" class="form-control" value="<?= $row->name ?>"readonly>
        </div>
        <div class="form-grpup">
          <label>Status</label>
          <select name="status" class="form-control" value="">
              <option readonly="true">Status</option>

              <?php 

                $status = [ ['Ya','1'] , ['Tidak','0'] ];

                for ($i=0; $i < count($status) ; $i++) {  ?>

                <?php if ($row->status == $status[$i][1]): ?>
                  <option selected value="<?php echo $status[$i][1] ?>"><?php echo $status[$i][0] ?></option>
                <?php else: ?>
                  <option value="<?php echo $status[$i][1] ?>"><?php echo $status[$i][0] ?></option>
                <?php endif ?>

                

                <?php } ?>
          </select>
        </div>

        <div class="modal-footer">
            <a  class="btn btn-success" href="<?= base_url('C_photo_booth/index') ?>">Back</a>   
            <button type="submit" class="btn btn-danger">Update</button>
        </div>
      <?php  } ?>
    </div>
  </div>     
  <?php form_close();  ?>
  </div>
</div>