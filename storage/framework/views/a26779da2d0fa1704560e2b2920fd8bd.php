
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
              <h4>Edit Cuti</h4>
                <form role="form" method="post" action="<?php echo e(url('/pic/pengajuan/edit/'.$cuti->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo e(method_field('PUT')); ?>

                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" readonly style="width: 100%;" class="form-control" name="nama" 
                                            placeholder="Tanggal mulai cuti" value="<?php echo e($name); ?>">
                        </div>
                    <div style="display:flex;">
                        <div class="form-group">
                        <label for="awal_cuti">Awal Cuti1</label>
                        <input type="date" style="width: 100%;" class="form-control" name="awal_cuti" 
                                            placeholder="Tanggal mulai cuti" value="<?php echo e($cuti->awal_cuti); ?>">
                        </div>
                        <div style="padding: 0 30px;" class="form-group">
                        <label for="akhir_cuti">Akhir Cuti</label>
                        <input type="date" style="width: 100%;" class="form-control" name="akhir_cuti" placeholder="Tanggal selesai cuti" value="<?php echo e($cuti->akhir_cuti); ?>">
                        </div>
                        </div>
                        <br>
                        <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea type="text" class="form-control" name="keterangan" value="<?php echo e($cuti->keterangan); ?>"><?php echo e($cuti->keterangan); ?></textarea>
                        </div>
                        <br>
                  </div>
                  <div class="form-group">
                  <label for="status_1">Status</label>
                  <select class="form-control" style="width: 30%;" name="status_1" onChange="document.getElementById('form_id').submit();">
                    <option value="<?php echo e($cuti->status_1); ?>"></option>
                    <option <?php if(!empty($cari)){ echo $cari == 'Disetujui' ? 'selected':''; } ?> value="Disetujui">Setuju</option>
                    <option <?php if(!empty($cari)){ echo $cari == 'Ditolak' ? 'selected':''; } ?> value="Ditolak">Tolak</option>
                    </select>
                </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <br>
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
<?php echo $__env->make('Pic.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\dana\cuti\laravel\resources\views/Pic/pengajuan/edit.blade.php ENDPATH**/ ?>