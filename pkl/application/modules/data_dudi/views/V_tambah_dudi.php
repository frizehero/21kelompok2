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
		<li><a href="#">Data Dudi</a></li>
		<li class="active">Tambah dudi</li>
	</ol>

	<input style="margin-bottom: 10px" class="btn btn-purple" class="form-control" type="button" value="Kembali" onclick="history.back(-1)" />
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	<!--End breadcrumb-->

</div>

<div class="col-lg-12">
	<div class="panel">
		<div class="panel-heading">
			<h3 class="panel-title">Tambah Dudi</h3>
		</div>



		<!--Input Size-->
		<!--===================================================-->
		<?= form_open_multipart('data_dudi/tambah'); ?>
		<div class="panel-body"><div class="form-group">

			<div style="margin-bottom: 20px" class="col-sm-9">
				<input required="" type="text" placeholder="Nama Dudi" name="nama_dudi" class="form-control input-lg" id="demo-is-inputnormal">
			</div>
			<div style="margin-bottom: 20px" class="col-sm-3"><div class="select">
				<select required name="jurusan_dudi" style="height: 48px">
					<option value="">Pilih Jurusan</option>
					<?php foreach ($tampil_jurusan as $ee) {?>
						<option value="<?php echo $ee->id_jurusan?>"><?php echo $ee->nama?></option>
					<?php }?>
					
				</select>
			</div></div>
			<div style="margin-bottom: 20px" class="col-sm-6">
				<input required="" type="file" name="gambar" placeholder=".input-lg" class="form-control input-lg" id="demo-is-inputlarge">
			</div>
			<div style="margin-bottom: 20px" class="col-sm-6">
				<input required="" name="email_dudi" type="text" placeholder="Email" class="form-control input-lg" id="demo-is-inputlarge">
			</div>
			<input required="" type="hidden" name="lon" id="lon" size=12 value="" class="form-control" id="inputCity">


			<input type="hidden" name="lat" id="lat" size=12 value=""
			class="form-control" id="inputCity">
			<div style="margin-bottom: 20px" class="col-sm-6">
				<input name="telepon_dudi" type="text" placeholder="Telepon Dudi" class="form-control input-lg" id="demo-is-inputlarge">
			</div>
			<div style="margin-bottom: 20px" class="col-sm-6">
				<input name="nama_pembimbing" type="text" placeholder="nama pembimbing" class="form-control input-lg" id="demo-is-inputlarge">
			</div>


			<div class="col-md-6">
				<textarea placeholder="deskripsi" class="form-control" id="inputCity" name="tentang" style=" width: 100%; height: 70px; margin-bottom: 20px"></textarea>
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
			<div style="margin-top: 10px" class="col-md-12">
				<textarea class="form-control" id="inputCity" name="alamat" style="height: 100px; width:100%;"></textarea>

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


