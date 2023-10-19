
<?php $__env->startSection('content'); ?>
<div class="container">
<div class="jumbotron">
<br><br>
<h1 class="display-6">Tambah User</h1>
<hr class="my-4">     
<form action="create/post" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<br>
<div class="form-group">
<label for="name">Nama</label>
<input type="name" style="width: 50%;" class="form-control" name="name" placeholder="Nama" value="<?php echo e(old('name')); ?>">
</div>
<div class="form-group">
<label for="email">Email</label>
<input type="email" style="width: 50%;" class="form-control" name="email" placeholder="email" value="<?php echo e(old('email')); ?>">
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" style="width: 50%;" class="form-control" name="password" placeholder="password" value="<?php echo e(old('password')); ?>">
</div>

<div class="form-floating">   
                <label for="role_id">Privilage : </label>
                <!-- gunakan event onchange untuk mengirim data secara otomatis  -->
                <br>
                <br>
                <select class="form-control" name="role_id" onChange="document.getElementById('form_id').submit();">
                    <option value=""></option>
                    <option <?php if(!empty($cari)){ echo $cari == '1' ? 'selected':''; } ?> value="1">Superadmin</option>
                    <option <?php if(!empty($cari)){ echo $cari == '2' ? 'selected':''; } ?> value="2">PIC</option>
                    <option <?php if(!empty($cari)){ echo $cari == '3' ? 'selected':''; } ?> value="3">Karyawan</option>
                </select>
                </div>
</div>
<br>
<button type="submit" class="btn btn-success">Simpan</button>
</form></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Superadmin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Superadmin/user/create.blade.php ENDPATH**/ ?>