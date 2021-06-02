
					
					<div class="col-lg-12">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Input size</h3>
							</div>



							<!--Input Size-->
							<!--===================================================-->
							<?= form_open_multipart('data_dudi/edit'); ?>
								<div class="panel-body"><div class="form-group">

									<div style="margin-bottom: 20px" class="col-sm-9">
										<input type="text" placeholder="Nama Dudi" value="<?php echo $tampil['nama_dudi']?>" name="nama_dudi" class="form-control input-lg" id="demo-is-inputnormal">
										<input type="hidden" value="<?php echo $tampil['id_dudi']?>" name="id_dudi">
									</div>
									<div style="margin-bottom: 20px" class="col-sm-3"><div class="select">
										<select name="jurusan_dudi" style="height: 48px">
											<option value="1">RPL</option>
											<option value="2">TKJ</option>
											<option value="3">TKRO</option>
					
										</select>
									</div></div>
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input type="file" name="gambar" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">
									</div>
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="email_dudi" type="text" value="<?php echo $tampil['email_dudi']?>" placeholder="Email" class="form-control input-lg" id="demo-is-inputlarge">
									</div>
									<input type="hidden" name="lon" id="lon" size=12 value="<?php echo $tampil['lon']?>" class="form-control" id="inputCity">


									<input type="hidden" name="lat" id="lat" size=12 value="<?php echo $tampil['lat']?>"
									class="form-control" id="inputCity">
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="telepon_dudi" type="text" placeholder="Telepon Dudi" class="form-control input-lg" value="<?php echo $tampil['no_telepon']?>" id="demo-is-inputlarge">
									</div>
									<div style="margin-bottom: 20px" class="col-sm-6">
										<input name="nama_pembimbing" value="<?php echo $tampil['nama_pembimbing']?>"	 type="text" placeholder="nama pembimbing" class="form-control input-lg" id="demo-is-inputlarge">
									</div>


									<div class="col-md-6">
										<textarea placeholder="deskripsi" class="form-control" id="inputCity" name="tentang" style=" width: 100%; height: 100px; margin-bottom: 20px"><?php echo $tampil['tentang']?></textarea>
									</div>

									<div class="col-md-6">
										<div id="search">
											<input type="text" name="addr" class="form-control" value="" id="addr" size="58" />
											<button type="button" onclick="addr_search();">Search</button>
											<div id="results"></div>
										</div>
									</div>
									<div id="map"></div>
									<style type="text/css">
										html, body { width:100%;padding:0;margin:0; }
										.container { width:100%;max-width:980px;padding:1% 2%;margin:0 auto }
										#lat, #lon { text-align:right }
										#map { width:100%;height:225px;padding:0;margin:0; }
										.address { cursor:pointer }
										.address:hover { color:#AA0000;text-decoration:underline }
									</style>
									<div style="margin-top: 20px" class="col-md-12">
										<textarea class="form-control" id="inputCity"  name="alamat" style="height: 100px; width:100%;"><?php echo $tampil['alamat']?></textarea>

									</div>

								</div></div>
								<div class="panel-footer">
									<div class="row">
										<div>
											<button  class="btn btn-mint" type="submit">Edit</button>
								
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
var startlat = <?php echo $tampil['lat']?>;
var startlon = <?php echo $tampil['lon']?>;

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


							