
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Lengkapi Profil Anda</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<br>
<div class="form-group">
<label for="nama">Nama Anda</label>
<input type="text" class="form-control" name="nama" 
                    placeholder="Sesuai KTP" value="<?php echo e(old('nama')); ?>">
</div>
<div class="form-group">
<label for="alamat">Alamat</label>
<input type="text" class="form-control" name="alamat" placeholder="Sesuai KTP" value="<?php echo e(old('alamat')); ?>">
</div>

<div class="form-group">
<label for="jabatan">Jabatan</label>
<input type="text" class="form-control" name="jabatan" placeholder="Posisi Kerja Anda" value="<?php echo e(old('jabatan')); ?>">
</div>

<div class="form-group">
<label for="no_telp">Nomor Telepon Aktif</label>
<input type="text" class="form-control" name="no_telp" placeholder="08xxxxxx" value="<?php echo e(old('no_telp')); ?>">
</div>
<?php $__currentLoopData = $create; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $create): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($create->create); ?>">
<?php echo e($create->create); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Karyawan.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Karyawan/profil/create.blade.php ENDPATH**/ ?>