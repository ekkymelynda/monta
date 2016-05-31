<?php $__env->startSection('page_heading','Kemajuan Tugas Akhir'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-9">
<form role="form" action="" method="post">
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label>ID Kemajuan TA</label>
    <input type="text" class="form-control" name="id_kemajuan_ta" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal Konsul</label>
    <input type="date" class="form-control" name="tgl_konsul" placeholder="">
  </div>
  <div class="form-group">
    <label>Deskripsi Kemajuan</label>
    <textarea type="text" class="form-control" name="desk_kemajuan" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label>Komentar</label>
    <textarea type="text" class="form-control" name="desk_kemajuan" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label>Disetujui</label>
    <select name="a_disetujui" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
  </div>
  <div class="form-group">
    <label>Tanggal setuju</label>
    <input type="date" class="form-control" name="tgl_setuju" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Bimbingan</label>
    <input type="text" class="form-control" name="id_bimbingan" placeholder="">
  </div>
  <div class="form-group">
    <label>Create at</label>
    <input type="datetime" class="form-control" name="created_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Update at</label>
    <input type="datetime" class="form-control" name="updated_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Soft delete</label>
    <select name="soft_delete" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Submit Button</button>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>