
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
<h1 class="display-6">Histori Cuti</h1>
<hr class="my-4">          
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Jabatan</th>
<th scope="col">Awal Cuti</th>
<th scope="col">Akhir Cuti</th>
<th scope="col">Keterangan </th>
<th scope="col">Status</th>
<th></th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
<?php $__currentLoopData = $cuti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td style="text-transform: capitalize; "><?php echo e($no++); ?></td>
<td style="text-transform: capitalize; "><?php echo e($cuti->nama); ?></td>
<td style="text-transform: capitalize; "><?php echo e($cuti->jabatan); ?></td>
<td style="text-transform: capitalize; "><?php echo e($cuti->awal_cuti); ?></td>
<td style="text-transform: capitalize; "><?php echo e($cuti->akhir_cuti); ?></td>
<td style="text-transform: capitalize; "><?php echo e($cuti->keterangan); ?></td>
<td style="text-transform: capitalize; "><?php echo e($cuti->status_2); ?></td>
<td>
<form method="post" action="<?php echo e(url('/superadmin/histori/hapus/'.$cuti->id)); ?>"> 
    <?php echo csrf_field(); ?> 
    <?php echo e(method_field('delete')); ?> 
    <button type="submit" class="badgehps badge btn-warning mb-1 " >Hapus</button> </form>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.badgehps').click(function(e){
              var result = confirm("Yakin Hapus?");
              if (result) {
                      
              }else{
                    e.preventDefault();
              }
        })
    })
</script>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Superadmin.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi web\Xampp\htdocs\cuttie (1)\laravel\resources\views/Superadmin/histori/index.blade.php ENDPATH**/ ?>