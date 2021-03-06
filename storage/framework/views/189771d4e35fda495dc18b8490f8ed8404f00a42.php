<?php $__env->startSection('page_heading','Tahun Ajaran'); ?>
<?php $__env->startSection('section'); ?>
  <div class="row">
  <div class="col-sm-12">
      <?php $__env->startSection('cotable_panel_body'); ?>
    <table class="table table-bordered">
      <thead>
        <tr>
        <th>ID tahun ajaran</th>
        <th>Nama tahun ajaran</th>
        <th>Apakah periode aktif</th>
        <th>Tanggal mulai</th>
        <th>Tanggal selesai</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($item as $i): ?>
        <td><?php echo e($i->id_thn_ajar); ?></td>
        <td><?php echo e($i->nm_thn_ajar); ?></td>
        <td><?php echo e($i->a_aktif); ?></td>
        <td><?php echo e($i->tgl_mulai); ?></td>
        <td><?php echo e($i->tgl_selesai); ?></td>
        <td><?php echo e($i->created_at); ?></td>
        <td><?php echo e($i->updated_at); ?></td>
        <td><?php echo e($i->expired_at); ?></td>
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
  <h1>Tahun Ajaran</h1>
<table>
    <thead>
      <tr>
        <th>ID tahun ajaran</th>
        <th>Nama tahun ajaran</th>
        <th>Apakah periode aktif</th>
        <th>Tanggal mulai</th>
        <th>Tanggal selesai</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php foreach($item as $i): ?>
        <td><?php echo e($i->id_thn_ajar); ?></td>
        <td><?php echo e($i->nm_thn_ajar); ?></td>
        <td><?php echo e($i->a_aktif); ?></td>
        <td><?php echo e($i->tgl_mulai); ?></td>
        <td><?php echo e($i->tgl_selesai); ?></td>
        <td><?php echo e($i->created_at); ?></td>
        <td><?php echo e($i->updated_at); ?></td>
        <td><?php echo e($i->expired_at); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
</table>
  </body>
</html> -->
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>