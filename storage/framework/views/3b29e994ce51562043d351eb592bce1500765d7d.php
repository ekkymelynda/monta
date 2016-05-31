<?php $__env->startSection('page_heading','Tugas Akhir'); ?>
<?php $__env->startSection('section'); ?>
  <div class="row">
  <div class="col-sm-12">
      <?php $__env->startSection('cotable_panel_body'); ?>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID Tugas Akhir</th>
        <th>Judul Tugas Akhir</th>
        <th>Abstrak</th>
        <th>Kata Kunci</th>
        <th>Nilai Angka</th>
        <th>ID Peserta Didik</th>
        <th>ID Rumpun Ilmu</th>
        <th>ID Status Tugas Akhir</th>
        <th>ID Proposal TA</th>
        <th>ID Nilai Mata Kuliah</th>
        <th>Create Date</th>
        <th>Update Date</th>
        <th>Soft Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php foreach($item as $i): ?>
        <td><?php echo e($i->id_ta); ?></td>
        <td><?php echo e($i->judul_ta); ?></td>
        <td><?php echo e($i->abstrak); ?></td>
        <td><?php echo e($i->kata_kunci); ?></td>
        <td><?php echo e($i->nilai_angka); ?></td>
        <td><?php echo e($i->id_pd); ?></td>
        <td><?php echo e($i->id_rumpun_ilmu); ?></td>
        <td><?php echo e($i->id_stat_ta); ?></td>
        <td><?php echo e($i->id_prop_ta); ?></td>
        <td><?php echo e($i->id_nilai_mk); ?></td>
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

<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>