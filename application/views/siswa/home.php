<div class="container">
<section class="content">
<div class="jumbotron text-center">
  <h1>Selamat Datang Siswa</h1>
</div>
<!-- <div class="row">
        <div class="col-sm-4">
          <h3><p align=center><b>DATA SISWA</b></h3>
              <p> <p align=center> blm isi.</p> 
							<body>-->
<html>
  
<table width="100%">
				<br><h2 align="center">Biodata Siswa</h2>
					<thead>
					<tr align="center">
		<img src="<?php echo base_url() ?>foto/CHA_0318.jpg" alt="foto" width="150">
    <br> 
		<br>
		<a href='<?php echo base_url("siswa/ubah"); ?>'>Ubah Data</a><br><br> 



		

			
    <div class="panel-body">
            <table id="mytable" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
										<tr>
												<td>NIS</td>
												</tr>
                        <th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Telepon</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Foto</th>
                    </tr>
                </thead>
            </table>
        </section>
    </div>


      <!--?php
      if( ! empty($siswa)){
        foreach($siswa as $data){
          echo "<tr>
          <td>".$data->nis."</td>
          <td>".$data->nama."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->telp."</td>
					<td>".$data->alamat."</td>
					<td>".$data->tanggal_lahir."</td>
					<td>".$data->foto."</td>
          <td><a href='".base_url("siswa/ubah/".$data->nis)."'>Ubah</a></td>
          <td><a href='".base_url("siswa/hapus/".$data->nis)."'>Hapus</a></td>
          </tr>";
        }
      }else{ 
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html> -->
