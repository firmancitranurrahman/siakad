<div class="col-sm-8 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Upload Jadwal</li>
			</ol>
		</div><br>
	<div class="container-fluid" style="margin-top:10px;">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3 align-center">Upload jadwal Pelajaran</h1><br>
          <div class="form-group col-sm-3">
              <label for="jurusan">Jurusan</label>
                 <select class="form-control" id="jurusan">
                    <option>Ipa</option>
                    <option>Ips</option>
                  </select> 					
          </div>
          <div class="form-group col-md-3">
             <label for="kelas">Kelas</label>
                <select class="form-control" id="kelas">
                  <option>10-1</option>
                  <option>10-2</option>
                  <option>11-1</option>
                  <option>11-2</option>
                  <option>12-1</option>
                  <option>12-2</option> 
              </select>
          </div>
      </div>
      <input type="file"name="fileupload" value="fileupload" id="fileupload"><br>
      <button class="btn btn-primary">Posting</button>
    </div>
  </div>
  <table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
      <tr>
        <th>No</th>
        <th>Semester</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Download</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td scope="row">1</td>
          <td>1</td>
          <td>Ipa</td>
          <td>10-Ipa-1</td>
          <td>
          <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>download jadwal</button>
          </td>
        </tr>
        <tr>
        <td scope="row">2</td>
          <td>1</td>
          <td>Ipa</td>
          <td>10-Ipa-2</td>
          <td>
          <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block>download jadwal</button>
          </td>
      </tbody>
  </table>