
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="jumbotron">
<?php if(session('msg')): ?>
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
<?php echo e(session('msg')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<?php endif; ?>
<br><br><br><br><br>
<div class="container" style="width: 50%; height: 50%; position: center; border: solid 1px;">
<h1 style="padding: 0 35%;" class="display-6">Anggota PIC</h1>       
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Nama</th>
<th scope="col">Jabatan</th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
<tr>
<td style="text-transform: capitalize; "><?php echo e($nama1->nama ?? 'null'); ?></td>
<td style="text-transform: capitalize; "><?php echo e($nama1->jabatan ?? 'null'); ?></td>
<tr>
<td style="text-transform: capitalize; "><?php echo e($nama2->nama ?? 'null'); ?></td>
<td style="text-transform: capitalize; "><?php echo e($nama2->jabatan ?? 'null'); ?></td>
</tr>
<tr>
<td style="text-transform: capitalize; "><?php echo e($nama3->nama ?? 'null'); ?></td>
<td style="text-transform: capitalize; "><?php echo e($nama3->jabatan ?? 'null'); ?></td>
</tr>
<tr>
<td style="text-transform: capitalize; "><?php echo e($nama4->nama ?? 'null'); ?></td>
<td style="text-transform: capitalize; "><?php echo e($nama4->jabatan ?? 'null'); ?></td>
</tr>
<tr>
<td style="text-transform: capitalize; "><?php echo e($nama5->nama ?? 'null'); ?></td>
<td style="text-transform: capitalize; "><?php echo e($nama5->jabatan ?? 'null'); ?></td>
</tr>

</tr>
</tbody>
</table>
<a style="padding: 75%;" href="/superadmin/pic"><button class="btn btn-success mb-1">Kembali</button><br>
</div> 
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Superadmin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Superadmin/pic/rincian.blade.php ENDPATH**/ ?>