<div id="page-head">

  <!--Page Title-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <div id="page-title">
    <h1 style="margin-top: -20px; margin-left: -20px" class="page-header text-overflow">Data DU/DI</h1>
  </div>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End page title-->


  <!--Breadcrumb-->
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <ol style="margin-bottom: 20px; margin-left: -20px" class="breadcrumb">
    <li><a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg></a></li>
    <li><a href="#">Data</a></li>
    <li><a href="#">Data Siswa</a></li>
    <li class="active">Tambah Siswa</li>
  </ol>
  <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
  <!--End breadcrumb-->

</div>
					
					<div class="col-lg-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Edit siswa</h3>
							</div>



							<!--Input Size-->
							<!--===================================================-->
						<?= form_open_multipart('data_kelas/edit_siswa/'.$te['id_kelas']); ?>
								<div class="panel-body"><div class="form-group">

									<div style="margin-bottom: 20px" class="col-md-6">
										<input type="text" value="<?php echo $te ['nama_siswa']?>" name="nama_siswa" class="form-control input-lg" id="demo-is-inputnormal">
										<input type="hidden"  value="<?php echo $te ['id_kelas']?>" name="kelas">
										<input type="hidden" value="<?php echo $te ['id_siswa']?>" name="id_siswa">
									</div>
									
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="nisn" type="text" value="<?php echo $te ['nisn']?>" class="form-control input-lg" id="demo-is-inputlarge">
									</div>
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="email" type="text" value="<?php echo $te['email']?>" class="form-control input-lg" id="demo-is-inputlarge">
									</div>
					
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="telepon" type="text" value="<?php echo $te ['no_telepon']?>" class="form-control input-lg" id="demo-is-inputlarge">
									</div>

									<div style="margin-bottom: 20px" class="col-sm-6">
										<label>Tanggal Masuk PKL</label>
										<input name="masuk_p" type="date" value="<?php echo $te ['masuk_p']?>" placeholder="Telepon" class="form-control input-lg" id="demo-is-inputlarge">
									</div>
									<div style="margin-bottom: 20px" class="col-sm-6">
										<label>Tanggal Keluar PKL</label>
										<input name="keluar_p" type="date" value="<?php echo $te ['keluar_p']?>" class="form-control input-lg" id="demo-is-inputlarge">
									</div>



									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="username" type="text"value="<?php echo $e['username'];?>" class="form-control input-lg" id="demo-is-inputlarge">
										<input type="hidden" value="2" name="level">
									</div>
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="password" type="text" value="<?php echo $e['password'];?>" class="form-control input-lg" id="demo-is-inputlarge">
										<input type="hidden" value="2" name="level">
									</div>

									<div style="margin-bottom: 20px" class="col-sm-6">
										<input type="file" name="gambar" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">

									</div>

									<div style="margin-bottom: 20px;" class="col-md-2">
										<div class="select">
										<select name="dudi" style="height: 48px;width: 160px;">
											<option value="<?php echo $te ['id_dudi']?>">Pilih Dudi</option>t
											<?php foreach ($tampil_dudi as $tt) {?>
											<option value="<?php echo $tt->id_dudi?>"><?php echo $tt->nama_dudi?></option>
										<?php }?>
					
										</select>
									</div></div>

									<div  class="col-md-2">
										<div class="select">
										<select name="jenis_kelamin" style="height: 48px;width: 160px;">
											<option value="<?php echo $te ['jenis_kelamin']?>">Pilih Jenis Kelamin</option>
											<option>Laki Laki</option>
											<option>Perempuan</option>
										</select>
									</div>
									</div>

									<div  class="col-md-2">
										<div class="select">
										<select name="gelombang" style="height: 48px;width: 160px;">
											<option value="<?php echo $te ['gelombang']?>">Pilih Gelombang</option>
											<option value="1">Gelombang 1</option>
											<option value="2">Gelombang 2</option>
					
										</select>
									</div>
									</div>
			
									<div style="margin-top: 20px" class="col-sm-12">
										<textarea class="form-control" id="inputCity" name="alamat" style="height: 100px; width:100%;" placeholder="ALAMAT"></textarea>

									</div>

								</div></div>
								<div class="panel-footer">
									<div class="row">
										<div>
											<button  class="btn btn-mint" type="submit">Tambah</button>
								
										</div>
									</div>
								</div>
						
							<?= form_close(); ?>
							
							<!--===================================================-->
							<!--End Input Size-->


							</div>
							</div>
							<script type="text/javascript">


// New York
var startlat = -7.80119450;
var startlon = 110.36491700;

var options = {
 center: [startlat, startlon],
 zoom: 9
}

document.getElementById('lat').value = startlat;
document.getElementById('lon').value = startlon;

var map = L.map('map', options);
var nzoom = 12;

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: 'OSM'}).addTo(map);

var myMarker = L.marker([startlat, startlon], {title: "Coordinates", alt: "Coordinates", draggable: true}).addTo(map).on('dragend', function() {
 var lat = myMarker.getLatLng().lat.toFixed(8);
 var lon = myMarker.getLatLng().lng.toFixed(8);
 var czoom = map.getZoom();
 if(czoom < 18) { nzoom = czoom + 2; }
 if(nzoom > 18) { nzoom = 18; }
 if(czoom != 18) { map.setView([lat,lon], nzoom); } else { map.setView([lat,lon]); }
 document.getElementById('lat').value = lat;
 document.getElementById('lon').value = lon;
 myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
});

function chooseAddr(lat1, lng1)
{
 myMarker.closePopup();
 map.setView([lat1, lng1],18);
 myMarker.setLatLng([lat1, lng1]);
 lat = lat1.toFixed(8);
 lon = lng1.toFixed(8);
 document.getElementById('lat').value = lat;
 document.getElementById('lon').value = lon;
 myMarker.bindPopup("Lat " + lat + "<br />Lon " + lon).openPopup();
}

function myFunction(arr)
{
 var out = "<br />";
 var i;

 if(arr.length > 0)
 {
  for(i = 0; i < arr.length; i++)
  {
   out += "<div class='address' title='Show Location and Coordinates' onclick='chooseAddr(" + arr[i].lat + ", " + arr[i].lon + ");return false;'>" + arr[i].display_name + "</div>";
  }
  document.getElementById('results').innerHTML = out;
 }
 else
 {
  document.getElementById('results').innerHTML = "Sorry, no results...";
 }

}

function addr_search()
{
 var inp = document.getElementById("addr");
 var xmlhttp = new XMLHttpRequest();
 var url = "https://nominatim.openstreetmap.org/search?format=json&limit=3&q=" + inp.value;
 xmlhttp.onreadystatechange = function()
 {
   if (this.readyState == 4 && this.status == 200)
   {
    var myArr = JSON.parse(this.responseText);
    myFunction(myArr);
   }
 };
 xmlhttp.open("GET", url, true);
 xmlhttp.send();
}


</script>


							