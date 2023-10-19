
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
              <h4>Edit PIC</h4>
                <form role="form" method="post" action="<?php echo e(url('/superadmin/pic/edit/'.$pici->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                        <br>
                        <div class="form-group"  style="width: 50%;">
                        <label for="user">Pilih PIC</label>
                        <select name="id_pic" class="c-form-profession form-control" id="c-form-profession">
                        <option  value="<?php echo e($pici->id_pic); ?>"><?php echo e($namaPic); ?></option>
                        <?php $__currentLoopData = $nama1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $options=$nama1->nama ?>
                        <option  value="<?php echo e($nama1->id_user); ?>"  <?php echo e(($nama1 ==$options)? 'selected':''); ?>><?php echo e($nama1->nama); ?></option><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></div><br>

                        <div class="form-group"  style="width: 50%;">
                        <label for="user">Pilih Karyawan 1</label>
                        <select name="id_kar1" class="c-form-profession form-control" id="c-form-profession">
                        <option  value="<?php echo e($pici->id_kar1); ?>"><?php echo e($namaKar1); ?></option>
                        <?php $__currentLoopData = $nama2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $options=$nama2->nama ?>
                        <option  value="<?php echo e($nama2->id_user); ?>"  <?php echo e(($nama2 ==$options)? 'selected':''); ?>><?php echo e($nama2->nama); ?></option><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></div><br>

                        <div class="form-group"  style="width: 50%;">
                        <label for="user">Pilih Karyawan 2</label>
                        <select name="id_kar2" class="c-form-profession form-control" id="c-form-profession">
                        <option  value="<?php echo e($pici->id_kar2); ?>"><?php echo e($namaKar2); ?></option>
                        <?php $__currentLoopData = $nama3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $options=$nama3->nama ?>
                        <option  value="<?php echo e($nama3->id_user); ?>"  <?php echo e(($nama3 ==$options)? 'selected':''); ?>><?php echo e($nama3->nama); ?></option><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></div><br>

                        <div class="form-group"  style="width: 50%;">
                        <label for="user">Pilih Karyawan 3</label>
                        <select name="id_kar3" class="c-form-profession form-control" id="c-form-profession">
                        <option  value="<?php echo e($pici->id_kar3); ?>"><?php echo e($namaKar3); ?></option>
                        <?php $__currentLoopData = $nama4; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $options=$nama4->nama ?>
                        <option  value="<?php echo e($nama4->id_user); ?>"  <?php echo e(($nama4 ==$options)? 'selected':''); ?>><?php echo e($nama4->nama); ?></option><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></div><br>

                        <div class="form-group"  style="width: 50%;">
                        <label for="user">Pilih Karyawan 4</label>
                        <select name="id_kar4" class="c-form-profession form-control" id="c-form-profession">
                        <option  value="<?php echo e($pici->id_kar4); ?>"><?php echo e($namaKar4); ?></option>
                        <?php $__currentLoopData = $nama5; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $options=$nama5->nama ?>
                        <option  value="<?php echo e($nama5->id_user); ?>"  <?php echo e(($nama5 ==$options)? 'selected':''); ?>><?php echo e($nama5->nama); ?></option><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></div><br>

                        <div class="form-group"  style="width: 50%;">
                        <label for="user">Pilih Karyawan 5</label>
                        <select name="id_kar5" class="c-form-profession form-control" id="c-form-profession">
                        <option  value="<?php echo e($pici->id_kar5); ?>"><?php echo e($namaKar5); ?></option>
                        <?php $__currentLoopData = $nama6; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama6): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $options=$nama6->nama ?>
                        <option  value="<?php echo e($nama6->id_user); ?>"  <?php echo e(($nama6 ==$options)? 'selected':''); ?>><?php echo e($nama6->nama); ?></option><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select></div><br>
                        <br>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        </form>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Karyawan.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Superadmin/pic/edit.blade.php ENDPATH**/ ?>