
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Tambah Data Cuti</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<br>
<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan</label>
<select name="id_user" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_user')); ?>">Pilih Karyawan</option>

<?php $__currentLoopData = $nama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama->nama ?>
<option  value="<?php echo e($nama->id_user); ?>"  <?php echo e(($nama ==$options)? 'selected':''); ?>><?php echo e($nama->nama); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</select></div><br>

<div style="display:flex;">
<div class="form-group">
<label for="awal_cuti">Awal Cuti</label>
<input type="date" style="width: 100%;" class="form-control" name="awal_cuti" 
                    placeholder="Tanggal mulai cuti" value="<?php echo e(old('awal_cuti')); ?>">
</div>
<div style="padding: 0 30px;" class="form-group">
<label for="akhir_cuti">Akhir Cuti</label>
<input type="date" style="width: 100%;" class="form-control" name="akhir_cuti" placeholder="Tanggal selesai cuti" value="<?php echo e(old('akhir_cuti')); ?>">
</div>
</div>
<br>
<div class="form-group">
<label for="keterangan">Keterangan</label>
<textarea type="text" style="width: 50%;" class="form-control" name="keterangan" placeholder="Alasan Cuti" value="<?php echo e(old('keterangan')); ?>"></textarea>
</div>

<?php $__currentLoopData = $cuti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($cuti->cuti); ?>">
<?php echo e($cuti->cuti); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Superadmin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Superadmin/cuti/create.blade.php ENDPATH**/ ?>