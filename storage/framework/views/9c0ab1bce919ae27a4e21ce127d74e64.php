
<?php $__env->startSection('content'); ?>
<div class="section-header">
  <h1>Tambah Pegawai</h1>
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
                  <form action="<?php echo e(route('admin.pegawai.store')); ?>" method="POST" >
                    <?php echo csrf_field(); ?>
                    <div class="form-group py-2">
                      <label for="exampleInputEmail1">Nama Pegawai</label>
                      <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                      <?php $__errorArgs = ['nama_pegawai'];
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
                      <div class="form-group py-2">
                          <label for="exampleInputEmail1">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat">
                          <?php $__errorArgs = ['alamat'];
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
                        <div class="form-group py-2">
                          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                          <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                           </select>
                           <?php $__errorArgs = ['jenis_kelamin'];
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
                        <div class="form-group py-2">
                          <label for="exampleFormControlSelect1">Jabatan</label>
                          <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
                            <option value="teknisi">Teknisi</option>
                            <option value="admin">Admin</option>
                            <option value="spg">SPG</option>
                           </select>
                           <?php $__errorArgs = ['jabatan'];
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
                        <div class="form-group py-2">
                          <label for="exampleFormControlSelect1">Status</label>
                          <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option value="aktif">Aktif</option>
                            <option value="tidak_aktif">Tidak aktif</option>
                           </select>
                           <?php $__errorArgs = ['status'];
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
                          <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </form>
     
                  
                  
              </div>
          </div>
      </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\PemesananBengkel\resources\views/levelAdmin/pegawai/create.blade.php ENDPATH**/ ?>