<?php $__env->startSection('page_heading','Pendidik dan Tenaga Kependidikan'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-9">
<form role="form" action="" method="post">
  <?php echo e(csrf_field()); ?>

  <!--<div class="form-group">
    <label>ID peserta didik</label>
    <input type="text" class="form-control" name="id_pd" placeholder="">
  </div>-->
  <div class="form-group">
    <label>Nama peserta didik</label>
    <input type="text" class="form-control" name="nm_pd" placeholder="">
  </div>
  <div class="form-group">
    <label>Jenis kelamin</label>
    <input type="text" class="form-control" name="jk" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" placeholder="">
  <div class="form-group">
    <label>NIM/NRP</label>
    <input type="text" class="form-control" name="nim" placeholder="">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="">
  </div>
  <div class="form-group">
    <label>Nomor handphone</label>
    <input type="text" class="form-control" name="no_hp" placeholder="">
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
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Peserta Didik</h1>
<form action="" method="post">
  <?php echo e(csrf_field()); ?>

  ID peserta didik:<br>
  <input type="text" name="id_pd" placeholder=""><br>
  Nama peserta didik:<br>
  <input type="text" name="nm_pd" placeholder=""><br>
  Jenis kelamin:<br>
  <input type="text" name="jk" placeholder=""><br>
  Tanggal lahir:<br>
  <input type="date" name="tgl_lahir" placeholder=""><br>
  NIM/NRP:<br>
  <input type="text" name="nim" placeholder=""><br>
  Email:<br>
  <input type="text" name="email" placeholder=""><br>
  Nomor handphone<br>
  <input type="text" name="no_hp" placeholder=""><br>
  Create date:<br>
  <input type="date" name="created_at" placeholder=""><br>
  Update date:<br>
  <input type="date" name="updated_at" placeholder=""><br>
  Soft delete:<br>
  <input type="boolean" name="soft_delete" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
	</body>
</html> -->
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>