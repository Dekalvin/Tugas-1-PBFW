<h3>Jadwal Lapangan</h3>
<ul>
<thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Lapangan</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Durasi</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
</ul>
<?php $__currentLoopData = $jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<ul>
    <td><?php echo e($jadwal->nama); ?></td>
    <td><?php echo e($jadwal->lapangan); ?></td>
    <td><?php echo e($jadwal->tanggal); ?></td>
    <td><?php echo e($jadwal->jam); ?></td>
    <td><?php echo e($jadwal->durasi); ?></td>
    <td><?php echo e($jadwal->harga); ?></td>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH D:\Kuliah\SMT 6\Pemrograman Web Berbasis Framework\King Futsal\resources\views/jadwal.blade.php ENDPATH**/ ?>