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
        <th>ID rumpun ilmu</th>
        <th>Nama rumpun ilmu</th>
        <th>ID induk rumpun ilmu</th>
        <th>Create date</th>
        <th>Last update</th>
        <th>Expired date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      	<?php foreach($item as $i): ?>
        <td><?php echo e($i->id_rumpun_ilmu); ?></td>
        <td><?php echo e($i->nm_rumpun_ilmu); ?></td>
        <td><?php echo e($i->id_induk_rumpun_ilmu); ?></td>
        <td><?php echo e($i->created_at); ?></td>
        <td><?php echo e($i->updated_at); ?></td>
        <td><?php echo e($i->expired_at); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
</table>
  </body>
</html>
