
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PIC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container bootstrap snippets bootdey">
<h1 class="text-success">PIC</h1>
<div class="row">
<div class="col-md-9 personal-info">
<?php if($pic !=null): ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<h3>PIC anda adalah:</h3>
<form class="form-horizontal" role="form">
<div class="form-group">
<label class="col-lg-3 control-label">Nama:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($pic->nama); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Jabatan:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($pic->jabatan); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">No Telepon:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($pic->no_telp); ?>">
</div>
</div>
<div class="form-group">
<label class="col-lg-3 control-label">Email:</label>
<div class="col-lg-8">
<input readonly class="form-control-plaintext" type="text" value="<?php echo e($email[0]); ?>">
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<h3>Anda Belum memiliki PIC, segera hubungi admin!!</h3>
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
<?php echo $__env->make('Karyawan.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Karyawan/pic/index.blade.php ENDPATH**/ ?>