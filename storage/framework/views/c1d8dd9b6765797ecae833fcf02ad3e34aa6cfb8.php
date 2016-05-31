<?php $__env->startSection('page_heading','Status Pembimbingan'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-9">
<form role="form" method="post">
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label>ID Status Bimbingan</label>
    <input class="form-control" placeholder="Masukkan ID Status Bimbingan" name="id_stat_bimbing">
  </div>
  <div class="form-group">
    <label>Nama Status Bimbingan</label>
    <input class="form-control" placeholder="Masukkan Nama Status Bimbingan" name="nm_stat_bimbing">
  </div>
  <div class="form-group">
    <label>Create date</label>
    <input type="date" name="created_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Last update</label>
    <input type="date" name="updated_at" placeholder="">
  </div>
  <div class="form-group">
    <label>Expired date</label>
    <input type="date" name="expired_at" placeholder="">
  </div>
  <button type="submit" class="btn btn-default">Submit Button</button>
</form>
</div>
<?php $__env->stopSection(); ?>

<!--<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Status Pembimbing</h1>
<form action="" method="post">
  <?php echo e(csrf_field()); ?>

  ID Status Bimbingan:<br>
  <input type="number" name="id_stat_bimbing" placeholder=""><br>
  Nama Status Bimbingan:<br>
  <input type="text" name="nm_stat_bimb" placeholder=""><br>
  Create Date:<br>
  <input type="date" name="create_at" placeholder=""><br>
  Last Update:<br>
  <input type="date" name="update_at" placeholder=""><br>
  Expired Date:<br>
  <input type="date" name="expired_at" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
</body>
</html> -->

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>