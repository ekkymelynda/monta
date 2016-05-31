<?php $__env->startSection('page_heading','Tahun Ajaran'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-9">
<form role="form" action="" method="post">
  <?php echo e(csrf_field()); ?>

  <div class="form-group">
    <label>ID tahun ajaran</label>
    <input type="text" class="form-control" placeholder="Masukkan ID" name='id_thn_ajar'>
  </div>
  <div class="form-group">
    <label>Nama tahun ajaran</label>
    <input type="text" class="form-control" placeholder="Masukkan nama" name='nm_rumpun_ilmu'>
  </div>
  <div class="form-group">
    <label>Periode Aktif</label>
    <select name="a_aktif" class="form-control">
      <option value="0">Tidak</option>
      <option value="1">Ya</option>
    </select>
  </div>
  <div class="form-group">
    <label>Tanggal mulai</label>
    <input type="date" name="tgl_mulai" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal selesai</label>
    <input type="date" name="tgl_selesai" placeholder="">
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

	<h1>Tahun Ajaran</h1>
<form action="" method="post">
  <?php echo e(csrf_field()); ?>

  ID tahun ajaran:<br>
  <input type="number" name="id_thn_ajar" placeholder=""><br>
  Nama tahun ajaran:<br>
  <input type="text" name="nm_thn_ajar" placeholder=""><br>
  Apakah periode aktif:<br>
  <input type="boolean" name="a_aktif" placeholder=""><br>
  Tanggal mulai:<br>
  <input type="date" name="tgl_mulai" placeholder=""><br>
  Tanggal selesai:<br>
  <input type="date" name="tgl_selesai" placeholder=""><br>
  Create date:<br>
  <input type="datetime" name="created_at" placeholder=""><br>
  Last update:<br>
  <input type="datetime" name="updated_at" placeholder=""><br>
  Expired date:<br>
  <input type="datetime" name="expired_at" placeholder=""><br>

  <input type="submit" value="Submit">
</form>
</body>
</html> -->
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>