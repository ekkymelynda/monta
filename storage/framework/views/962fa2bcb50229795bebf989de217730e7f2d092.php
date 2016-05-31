<?php $__env->startSection('page_heading','Peserta Didik'); ?>
<?php $__env->startSection('section'); ?>
  <div class="row">
  <div class="col-sm-12">
      <?php $__env->startSection('cotable_panel_body'); ?>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID peserta didik</th>
        <th>nama peserta didik</th>
        <th>Apakah periode aktif</th>
        <th>Tanggal mulai</th>
        <th>Tanggal selesai</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
        <th>Expired date</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($item as $i): ?>
        <td><?php echo e($i->id_pd); ?></td>
        <td><?php echo e($i->nm_pd); ?></td>
        <td><?php echo e($i->jk); ?></td>
        <td><?php echo e($i->tgl_lahir); ?></td>
        <td><?php echo e($i->nim); ?></td>
        <td><?php echo e($i->email); ?></td>
        <td><?php echo e($i->no_hp); ?></td>
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
  <h1>Peserta Didik</h1>
<table>
    <thead>
      <tr>
        <th>ID peserta didik</th>
        <th>nama peserta didik</th>
        <th>Apakah periode aktif</th>
        <th>Tanggal mulai</th>
        <th>Tanggal selesai</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
        <th>Expired date</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php foreach($item as $i): ?>
        <td><?php echo e($i->id_pd); ?></td>
        <td><?php echo e($i->nm_pd); ?></td>
        <td><?php echo e($i->jk); ?></td>
        <td><?php echo e($i->tgl_lahir); ?></td>
        <td><?php echo e($i->nim); ?></td>
        <td><?php echo e($i->email); ?></td>
        <td><?php echo e($i->no_hp); ?></td>
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