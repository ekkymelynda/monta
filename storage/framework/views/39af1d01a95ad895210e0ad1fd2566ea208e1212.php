<!DOCTYPE html>
<html>
<head>
  <title>Monitoring Tugas Akhir</title>
</head>
<body>
  <h1>Rumpun Ilmu</h1>
<table>
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
</html>
