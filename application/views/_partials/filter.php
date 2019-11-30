<div>
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
        <i class="fas fa-bars"></i>
        <span>Filter</span>
    </a> 
    <div class="card mb-3">
<form class="form-inline" action="<?php base_url('master/mahasiswa') ?>" method="post" enctype="multipart/form-data" >
		<div class="form-group">
		<div class="col-md-5">
		<label class="control-label" align="left">Program</label>
        <select class="form-control input-sm" name="program">
          <option value="">--Lihat Semua--</option>
            <option value="reguler">R || Reguler</option>
            <option value="programB">B || Program B</option>
            <option value="RPL">RPL || Rekognisi Pembelajaran Lampau</option>
        </select>
        </div>
     </div> 
    <div class="form-group">
		<div class="col-md-5">
    	<label class="control-label">Prodi</label>
        <select class="form-control input-sm" name="prodi">
         <option value="">--Lihat Semua--</option>
         <option value="S1keperawatan">Sarjana Keperawatan</option>
         <option value="D3keperawatan">Diploma 3 Keperawatan</option>
         <option value="Ners">Pendidikan Profesi Ners</option>
        </select>
       </div>
    </div>
    <div class="form-group">        
        <div class="col-md-10">
        <label class="control-label">Kewarganegaraan</label>                      
        <select class="form-control input-sm" name="status">
        <option value="">--Lihat Semua--</option>
        <option value="wni">WNI</option>
        <option value="wna">WNA</option>
    
        </select>
        </div></div> 

        <div class="form-group">        
        <div class="col-md-4">
        <label class="control-label">Kelamin</label>                      
        <select class="form-control input-sm" name="status">
        <option value="">--Lihat Semua--</option>
        <option value="laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
    
        </select>
        </div></div> 			
</form> </div> 
</div>
