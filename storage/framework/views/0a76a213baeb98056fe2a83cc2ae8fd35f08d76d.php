<?php $__env->startSection('page_heading','Proposal Tugas Akhir'); ?>
<?php $__env->startSection('section'); ?>
  <div class="row">
  <div class="col-sm-12">
      <?php $__env->startSection('cotable_panel_body'); ?>
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>ID proposal TA</th>
        <th>Judul proposal TA</th>
        <th>Abstrak Proposal TA</th>
        <th>Kata Kunci</th>
        <th>Tanggal pengajuan</th>
        <th>Revisi ke</th>
        <th>Catatan Sidang</th>
        <th>Tanggal penilaian</th>
        <th>Tenggat waktu Perbaikan</th>
        <th>Tanggal pesetujuan</th>
        <th>ID proposal TA sebelumnya</th>
        <th>ID status proposal TA</th>
        <th>ID sidang</th>
        <th>ID rumpun ilmu</th>
        <th>ID pembimbing utama</th>
        <th>ID pembimbing pendamping</th>
        <th>ID peserta didik</th>
        <th>ID semester</th>
        <th>create date</th>
        <th>update date</th>
        <th>soft delete</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <?php foreach($item as $i): ?>
        <td><?php echo e($i->id_prob_ta); ?></td>
        <td><?php echo e($i->judul_prob_ta); ?></td>
        <td><?php echo e($i->abstrak_prob_ta); ?></td>
        <td><?php echo e($i->kata_kunci); ?></td>
        <td><?php echo e($i->tgl_ajuan); ?></td>
        <td><?php echo e($i->revisi_ke); ?></td>
        <td><?php echo e($i->catatan_sidang); ?></td>
        <td><?php echo e($i->tgl_nilai); ?></td>
        <td><?php echo e($i->tenggat_wkt_perbaikan); ?></td>
        <td><?php echo e($i->tgl_setuju); ?></td>
        <td><?php echo e($i->id_prev_prov_ta); ?></td>
        <td><?php echo e($i->id_stat_prob_ta); ?></td>
        <td><?php echo e($i->id_sidang); ?></td>
        <td><?php echo e($i->id_rumpun_ilmu); ?></td>
        <td><?php echo e($i->id_bimbing_utama); ?></td>
        <td><?php echo e($i->id_bimbing_damping); ?></td>
        <td><?php echo e($i->id_pd); ?></td>
        <td><?php echo e($i->id_smt); ?></td>
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