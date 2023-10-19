
<?php $__env->startSection('content'); ?>
<section class="home" id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-15">
            <div
              class="home-content"
              data-aos="fade-up"
              data-aos-duration="1000"
            >
              <p class="badge fs-6 bg-primary-light text-primary">
              <h4>Selamat datang <b style="text-transform: capitalize; "> <?php echo e(Auth::user()->name); ?> 
            </b>di website pengajuan cuti online. Anda Saat ini menjadi PIC, lakukan tugas anda dengan baik dan tetap SEMANGAT!!!</h4>
              </p>
             <img src="img/semangat.png" style="margin-left: 30%; width: 30%; height: 30%;">
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Home Section Close -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('Pic.layout.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Aplikasi web\Xampp\htdocs\cuttie (1)\laravel\resources\views/Pic/dashboard/index.blade.php ENDPATH**/ ?>