<?php $__env->startSection('page_heading','Proposal Tugas Akhir'); ?>
<?php $__env->startSection('section'); ?>
<div class="col-sm-9">
<form role="form" action="" method="post">
  <?php echo e(csrf_field()); ?>

<!--  <div class="form-group">
    <label>ID Proposal TA</label>
    <input type="text" class="form-control" name="id_prop_ta" placeholder="">
  </div> -->
  <div class="form-group">
    <label>Judul Proposal TA</label>
    <input type="text" class="form-control" name="judul_prop_ta" placeholder="">
  </div>
  <div class="form-group">
    <label>Abstrak Proposal TA</label>
    <textarea type="text" class="form-control" name="abstrak_prop_ta" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label>Kata Kunci</label>
    <input type="input" class="form-control" name="kata_kunci" placeholder="">
  </div>
  <div class="form-group">
    <label>Tanggal Pengajuan</label>
    <input type="date" class="form-control" name="tgl_ajuan" placeholder="">
  </div>
      <div class="form-group">
    <label>Revisi ke</label>
    <input type="number" class="form-control" name="revisi_ke" placeholder="">
  </div>
  <div class="form-group">
    <label>Catatan Sidang</label>
    <textarea type="text" class="form-control" name="catatan_sidang" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label>Tanggal Penilaian</label>
    <input type="date" class="form-control" name="tgl_nilai" placeholder="">
  </div>
    <div class="form-group">
    <label>Tanggal Waktu Perbaikan</label>
    <input type="date" class="form-control" name="tenggat_wkt_perbaikan" placeholder="">
  </div>
    <div class="form-group">
    <label>Tanggal Persetujuan</label>
    <input type="date" class="form-control" name="tgl_setuju" placeholder="">
  </div>
<!--  <div class="form-group">
    <label>ID Proposal TA Sebelumnya</label>
    <input type="text" class="form-control" name="id_prev_prop_ta" placeholder="">
  </div> -->
  <div class="form-group">
    <label>ID Status proposal TA</label>
    <input type="number" class="form-control" name="id_stat_prop_ta" placeholder="">
  </div>
<!-- <div class="form-group">
    <label>ID Sidang</label>
    <input type="text" class="form-control" name="id_sidang" placeholder="">
  </div> -->
    <div class="form-group">
    <label>ID Rumpun ilmu</label>
    <input type="number" class="form-control" name="id_rumpun_ilmu" placeholder="">
  </div>
<!--  <div class="form-group">
    <label>ID Pembimbing Utama</label>
    <input type="text" class="form-control" name="id_bimbing_utama" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Pembimbing Pendamping</label>
    <input type="text" class="form-control" name="id_bimbing_damping" placeholder="">
  </div>
  <div class="form-group">
    <label>ID Peserta Didik</label>
    <input type="text" class="form-control" name="id_pd" placeholder="">
  </div> -->
    <div class="form-group">
    <label>ID Semester</label>
    <input type="number" class="form-control" name="id_smt" placeholder="">
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
<!--<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
	<h1>Proposal TA</h1>
<form action="" method="post">
  <?php echo e(csrf_field()); ?>

  Judul Proposal TA:<br>
  <input type="text" name="judul_prop_ta" placeholder=""><br>
  Abstrak Proposal TA:<br>
  <input type="text" name="abstrak_prop_ta" placeholder=""><br>
  kata kunci<br>
  <input type="text" name="kata_kunci" placeholder=""><br>
  Tanggal pengajuan:<br>
  <input type="date" name="tgl_ajuan" placeholder=""><br>
  Revisi ke:<br>
  <input type="number" name="revisi_ke" placeholder=""><br>
  Catatan Sidang:<br>
  <input type="text" name="catatan_sidang" placeholder=""><br>
  Tanggal Penilaian:<br>
  <input type="date" name="tgl_nilai" placeholder=""><br>
  Tenggat waktu perbaikan:<br>
  <input type="date" name="tenggat_wkt_perbaikan" placeholder=""><br>
  Tanggal Persetujuan:<br>
  <input type="date" name="tgl_setuju" placeholder=""><br>
  ID Status proposal TA:<br>
  <input type="number" name="id_stat_prop_ta" placeholder=""><br>
  ID Rumpun ilmu:<br>
  <input type="number" name="id_rumpun_ilmu" placeholder=""><br>
  ID semester:<br>
  <input type="number" name="id_smt" placeholder=""><br>
  Create date:<br>
  <input type="datetime" name="created_at" placeholder=""><br>
  Update date:<br>
  <input type="datetime" name="updated_at" placeholder=""><br>
  Soft delete:<br>
  <input type="number" name="soft_delete" placeholder=""><br><br>
  <input type="submit" value="Submit">
</form>
	</body>
</html>

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>