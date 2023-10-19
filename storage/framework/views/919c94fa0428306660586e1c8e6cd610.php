
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bootstrap snippets bootdey">
<h1 class="text-success">Profile</h1>
<div class="row">
<div class="col-md-9 personal-info">
<div class="alert alert-info alert-dismissable">
<a class="panel-close close" data-dismiss="alert">×</a>
<strong class=" text-success">Lengkapi Profil untuk dapat melanjutkan, jika sudah melengkapi maka anda dapat melanjutkan</strong>
</div>

<h3>Personal info</h3>
<?php $__currentLoopData = $profil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profil): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form class="form-horizontal" role="form">
<div class="form-group">
<label class="col-lg-3 control-label">Nama:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($profil->nama); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Alamat:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($profil->alamat); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Jabatan:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($profil->jabatan); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">No Telepon:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($profil->no_telp); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Email:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($email[0]); ?>">
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<?php if($user == null): ?>
<a href="/pic/profil/create"><button type="button" class="btn btn-success">Lengkapi Profil</button></a>
<?php else: ?>
<a href="<?php echo e(url('/pic/profil/update/'.$profil->id_user)); ?>"><button type="button" class="btn btn-success">Update Profil</button></a>
<?php endif; ?>

</select>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Pic.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi web\Xampp\htdocs\cuttie (1)\laravel\resources\views/Pic/profil/index.blade.php ENDPATH**/ ?>