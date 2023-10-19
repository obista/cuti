
<?php $__env->startSection('content'); ?>
<style>
    .satu{
        width: 20%;
    }
    .dua{
        width: 80%;
    }
    th,td {
        border: 1px solid grey;
        border-left: 0px solid ;
        border-top: 0px solid black;
        border-right: 0px solid black;

        padding: 15px;
    }
</style>
<div class="container">
<div class="jumbotron">
<?php if(session('msg')): ?>
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
<?php echo e(session('msg')); ?>

<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<?php endif; ?>
<br><br><br><br><br>
<h1 class="display-6">Daftar Pengajuan Cuti</h1>
<hr class="my-4">  
<div style="display: flex;">        
    <table class="satu">
        <thead>
        <tr>
            <th scope="col">Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $nama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th  scope="col"><?php echo e($nama->nama); ?></th>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<!-- batas -->
    <table class="dua">
        <thead>
        <tr>
        <th scope="col">Awal Cuti</th>
        <th scope="col">Akhir Cuti</th>
        <th scope="col">Keterangan </th>
        <th scope="col">Status </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cuti1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td style="text-transform: capitalize; "><?php echo e($cuti->awal_cuti); ?></td>
        <td style="text-transform: capitalize; "><?php echo e($cuti->akhir_cuti); ?></td>
        <td style="text-transform: capitalize; "><?php echo e($cuti->keterangan); ?></td>
        <td style="text-transform: capitalize; "><?php echo e($cuti->status_1); ?></td>
        <td>
            <a href="<?php echo e(url('/pic/pengajuan/edit/'.$cuti->id)); ?>" ><button type="submit" class="badge btn-primary mb-1">Edit</button></a>  
            <form method="post" action="<?php echo e(url('/pic/pengajuan/hapus/'.$cuti->id)); ?>"> 
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
<?php echo $__env->make('Pic.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi web\Xampp\htdocs\cuttie (1)\laravel\resources\views/Pic/pengajuan/index.blade.php ENDPATH**/ ?>