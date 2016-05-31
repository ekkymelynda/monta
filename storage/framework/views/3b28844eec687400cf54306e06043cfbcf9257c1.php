<?php $__env->startSection('page_heading','Kemajuan Tugas Akhir'); ?>
<?php $__env->startSection('section'); ?>
  <div class="row">
  <div class="col-sm-12">
      <?php $__env->startSection('cotable_panel_body'); ?>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID Kemajuan TA</th>
        <th>Tanggal Konsultasi</th>
        <th>Deskripsi Kemajuan</th>
        <th>Komentar</th>
        <th>Apakah Disetujui</th>
        <th>Tanggal Persetujuan</th>
        <th>ID Bimbingan</th>
        <th>Create date</th>
        <th>Update date</th>
        <th>Soft Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($item as $i): ?>
        <td><?php echo e($i->id_kemajuan_ta); ?></td>
        <td><?php echo e($i->tgl_konsul); ?></td>
        <td><?php echo e($i->desk_kemajuan); ?></td>
        <td><?php echo e($i->komentar); ?></td>
        <td><?php echo e($i->a_disetujui); ?></td>
        <td><?php echo e($i->tgl_setuju); ?></td>
        <td><?php echo e($i->id_bimbingan); ?></td>
        <td><?php echo e($i->created_at); ?></td>
        <td><?php echo e($i->updated_at); ?></td>
        <td><?php echo e($i->soft_delete); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
    <?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'cotable'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<!--<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Kemajuan Tugas Akhir</h1>
<table>
    <thead>
      <tr>
        <th>ID Kemajuan TA</th>
        <th>Tanggal Konsultasi</th>
        <th>Deskripsi Kemajuan</th>
        <th>Komentar</th>
        <th>Apakah Disetujui</th>
        <th>Tanggal Persetujuan</th>
        <th>ID Bimbingan</th>
        <th>Create date</th>
        <th>Update date</th>
        <th>Soft Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($item as $i): ?>
        <td><?php echo e($i->id_kemajuan_ta); ?></td>
        <td><?php echo e($i->tgl_konsul); ?></td>
        <td><?php echo e($i->desk_kemajuan); ?></td>
        <td><?php echo e($i->komentar); ?></td>
        <td><?php echo e($i->a_disetujui); ?></td>
        <td><?php echo e($i->tgl_setuju); ?></td>
        <td><?php echo e($i->id_bimbingan); ?></td>
        <td><?php echo e($i->created_at); ?></td>
        <td><?php echo e($i->updated_at); ?></td>
        <td><?php echo e($i->soft_delete); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
</table>
  </body>
</html> -->
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>