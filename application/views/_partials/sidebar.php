<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('home') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'calonmahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fas fa-fw fa-users"></i>
            <span>Mahasiswa</span>
            
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('chart') ?>">Mahasiswa</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo site_url('chart2019') ?>">2019</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2018') ?>">2018</a>
             <a class="dropdown-item" href="<?php echo site_url('chart2017') ?>">2017</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2016') ?>">2016</a>
             <a class="dropdown-item" href="<?php echo site_url('chart2015') ?>">2015</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2014') ?>">2014</a>
             <a class="dropdown-item" href="<?php echo site_url('chart2013') ?>">2013</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2012') ?>">2012</a>
             <a class="dropdown-item" href="<?php echo site_url('chart2011') ?>">2011</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2010') ?>">2010</a>
             <a class="dropdown-item" href="<?php echo site_url('chart2009') ?>">2009</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2008') ?>">2008</a>
             <a class="dropdown-item" href="<?php echo site_url('chart2007') ?>">2007</a>
            <a class="dropdown-item" href="<?php echo site_url('chart2006') ?>">2006</a>
            
        </div>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(3) == 'calonmahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
             <i class="fas fa-fw fa-users"></i>
            <span>Dosen</span>
            
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            
            <a class="dropdown-item" href="<?php echo site_url('chartdsn') ?>">Dosen</a>
           
            
        </div>
    </li>
     <li class="nav-item dropdown <?php echo $this->uri->segment(4) == 'calonmahasiswa' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
             <i class="fas fa-fw fa-users"></i>
            <span>Karyawan</span>
            
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            
            <a class="dropdown-item" href="<?php echo site_url('chartkrw') ?>">Karyawan</a>
            
        </div>
   <!--  </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>Chart</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li> -->
</ul>