<?php $__env->startSection('page_heading','Pendidik dan Tenaga Kependidikan'); ?>
<?php $__env->startSection('section'); ?>
  <div class="row">
  <div class="col-sm-12">
      <?php $__env->startSection('cotable_panel_body'); ?>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID PTK</th>
        <th>Nama PTK</th>
        <th>Jenis kelamin</th>
        <th>Tanggal lahir</th>
        <th>NIDN</th>
        <th>NIP</th>
        <th>Gelar depan</th>
        <th>Gelar belakang</th>
        <th>Email</th>
        <th>Inisial</th>
        <th>Nomor handphone</th>
        <th>Create date</th>
        <th>Update date</th>
        <th>Soft delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php foreach($item as $i): ?>
        <td><?php echo e($i->id_ptk); ?></td>
        <td><?php echo e($i->nm_ptk); ?></td>
        <td><?php echo e($i->jk); ?></td>
        <td><?php echo e($i->tgl_lahir); ?></td>
        <td><?php echo e($i->nidn); ?></td>
        <td><?php echo e($i->nip); ?></td>
        <td><?php echo e($i->gelar_depan); ?></td>
        <td><?php echo e($i->gelar_belakang); ?></td>
        <td><?php echo e($i->email); ?></td>
        <td><?php echo e($i->inisial); ?></td>
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
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>