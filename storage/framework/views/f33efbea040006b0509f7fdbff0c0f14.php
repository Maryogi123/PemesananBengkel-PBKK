
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Tambah Keluhan</h1>
  <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Layout</a></div>
    <div class="breadcrumb-item">Default Layout</div>
  </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="<?php echo e(route('admin.kendaraan.store')); ?>" method="POST"  >
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">No Pol</label>
                        <input type="text" name="no_pol" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter no pol">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <?php $__errorArgs = ['no_pol'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger mt-2">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">No Mesin</label>
                          <input type="text" name="no_mesin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter no mesin">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          <?php $__errorArgs = ['no_mesin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <div class="alert alert-danger mt-2">
                              <?php echo e($message); ?>

                          </div>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Merek</label>
                            <select class="form-control" name="merek" id="exampleFormControlSelect1">
                                <option value="honda">Honda</option>
                                <option value="yamaha">Yamaha</option>
                                <option value="suzuki">Suzuki</option>
                                <option value="kawasaki">Kawasaki</option>
                                <option value="lain">Lain</option>
                             </select>
                             <?php $__errorArgs = ['merek'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <div class="alert alert-danger mt-2">
                                 <?php echo e($message); ?>

                             </div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Warna</label>
                            <select class="form-control" name="warna" id="exampleFormControlSelect1">
                                <option value="Putih">Putih</option>
                                <option value="Hitam">Hitam</option>
                                <option value="Hijau">Hijau</option>
                                <option value="Biru">Biru</option>
                                <option value="Merah">Merah</option>
                                <option value="Lain">Lain</option>
                             </select>
                             <?php $__errorArgs = ['warna'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                             <div class="alert alert-danger mt-2">
                                 <?php echo e($message); ?>

                             </div>
                             <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>

                          <br/>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\PemesananBengkel\resources\views/levelAdmin/kendaraan/create.blade.php ENDPATH**/ ?>