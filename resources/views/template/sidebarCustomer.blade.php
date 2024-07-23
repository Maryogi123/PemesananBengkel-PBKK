
<li class="menu-header"><i class="fas fa-landmark"></i><span> Menu Utama Customer</span></li>
<li class="nav-item{{ request()->is('view') ? ' active' : '' }}"><a href="{{ url('/customer/keluhan') }}"><i class="fas fa-user-friends"></i><span>Keluhan</span></a></li>