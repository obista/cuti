
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cutiie</title>
    
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <h4>Edit Karyawan</h4>
                <form role="form" method="post" action="<?php echo e(url('/superadmin/karyawan/edit/'.$kar->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <textarea type="text" class="form-control" name="nama" value="<?php echo e($kar->nama); ?>"><?php echo e($kar->nama); ?></textarea>
                        </div><br>
                        <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" value="<?php echo e($kar->alamat); ?>"><?php echo e($kar->alamat); ?></textarea>
                        </div><br>
                        <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <textarea type="text" class="form-control" name="jabatan" value="<?php echo e($kar->jabatan); ?>"><?php echo e($kar->jabatan); ?></textarea>
                        </div><br>

                        <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <textarea type="text" class="form-control" name="no_telp" value="<?php echo e($kar->no_telp); ?>"><?php echo e($kar->no_telp); ?></textarea>
                        </div><br>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Karyawan.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Superadmin/karyawan/edit.blade.php ENDPATH**/ ?>