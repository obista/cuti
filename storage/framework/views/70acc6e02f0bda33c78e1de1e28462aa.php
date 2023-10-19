
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Tambah PIC</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<br>
<div class="form-group"  style="width: 50%;">
<label for="user">Pilih PIC</label>
<select name="id_pic" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_pic')); ?>">Pilih PIC</option>
<?php $__currentLoopData = $nama1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama1->nama ?>
<option  value="<?php echo e($nama1->id_user); ?>"  <?php echo e(($nama1 ==$options)? 'selected':''); ?>><?php echo e($nama1->nama); ?></option><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 1</label>
<select name="id_kar1" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_kar1')); ?>">Pilih Karyawan 1</option>
<?php $__currentLoopData = $nama2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama2->nama ?>
<option  value="<?php echo e($nama2->id_user); ?>"  <?php echo e(($nama2 ==$options)? 'selected':''); ?>><?php echo e($nama2->nama); ?></option><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 2</label>
<select name="id_kar2" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_kar2')); ?>">Pilih Karyawan 2</option>
<?php $__currentLoopData = $nama3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama3->nama ?>
<option  value="<?php echo e($nama3->id_user); ?>"  <?php echo e(($nama3 ==$options)? 'selected':''); ?>><?php echo e($nama3->nama); ?></option><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 3</label>
<select name="id_kar3" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_kar3')); ?>">Pilih Karyawan 3</option>
<?php $__currentLoopData = $nama4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama4->nama ?>
<option  value="<?php echo e($nama4->id_user); ?>"  <?php echo e(($nama4 ==$options)? 'selected':''); ?>><?php echo e($nama4->nama); ?></option><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 4</label>
<select name="id_kar4" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_kar4')); ?>">Pilih Karyawan 4</option>
<?php $__currentLoopData = $nama5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama5->nama ?>
<option  value="<?php echo e($nama5->id_user); ?>"  <?php echo e(($nama5 ==$options)? 'selected':''); ?>><?php echo e($nama5->nama); ?></option><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select></div><br>

<div class="form-group"  style="width: 50%;">
<label for="user">Pilih Karyawan 5</label>
<select name="id_kar5" class="c-form-profession form-control" id="c-form-profession">
<option  value="<?php echo e(old('id_kar5')); ?>">Pilih Karyawan 5</option>
<?php $__currentLoopData = $nama6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $options=$nama6->nama ?>
<option  value="<?php echo e($nama6->id_user); ?>"  <?php echo e(($nama6 ==$options)? 'selected':''); ?>><?php echo e($nama6->nama); ?></option><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select></div><br>

<?php $__currentLoopData = $pici; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pici): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($pici->pici); ?>">
<?php echo e($pici->pici); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Superadmin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi web\Xampp\htdocs\cuttie (1)\laravel\resources\views/Superadmin/pic/create.blade.php ENDPATH**/ ?>