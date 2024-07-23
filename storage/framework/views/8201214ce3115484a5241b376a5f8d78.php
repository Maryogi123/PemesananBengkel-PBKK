
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Admin</span></li>
<li class="nav-item<?php echo e(request()->is('pengguna') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/pengguna')); ?>"><i class="fas fa-user-friends"></i><span> Pengguna</span></a></li>
<li class="nav-item<?php echo e(request()->is('barang') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/barang')); ?>"><i class="fas fa-chalkboard-teacher"></i><span>Barang</span></a></li>
<li class="nav-item<?php echo e(request()->is('customer') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/customer')); ?>"><i class="fas fa-book-open"></i><span>Customer</span></a></li>
<li class="nav-item<?php echo e(request()->is('keluhan') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/keluhan')); ?>"><i class="fas fa-users"></i><span>Keluhan</span></a></li>
<li class="nav-item<?php echo e(request()->is('kendaraan') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/kendaraan')); ?>"><i class="fas fa-user-graduate"></i><span>Kendaraan</span></a></li>
<li class="nav-item<?php echo e(request()->is('pegawai') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/pegawai')); ?>"><i class="fas fa-user-graduate"></i><span>Pegawai</span></a></li>
<li class="nav-item<?php echo e(request()->is('supplier') ? ' active' : ''); ?>"><a href="<?php echo e(url('/admin/supplier')); ?>"><i class="far fa-bell"></i><span>Supplier</span></a></li><?php /**PATH C:\Users\User\PemesananBengkel\resources\views/template/sidebarAdmin.blade.php ENDPATH**/ ?>