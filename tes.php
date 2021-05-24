<!DOCTYPE html>
<html lang="en">
<head>
<title>Leaflet Address Lookup and Coordinates</title>
<meta charset="utf-8">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<style type="text/css">
html, body { width:100%;padding:0;margin:0; }
.container { width:95%;max-width:980px;padding:1% 2%;margin:0 auto }
#lat, #lon { text-align:right }
#map { width:100%;height:50%;padding:0;margin:0; }
.address { cursor:pointer }
.address:hover { color:#AA0000;text-decoration:underline }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@3.0.1/dist/esri-leaflet.js"
    integrity="sha512-JmpptMCcCg+Rd6x0Dbg6w+mmyzs1M7chHCd9W8HPovnImG2nLAQWn3yltwxXRM7WjKKFFHOAKjjF2SC4CgiFBg=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
    integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
    crossorigin=""></script>
</head>
<body>
    <?php
    include 'koneksi.php';
    $ambil=$koneksi->query("SELECT * FROM dudi WHERE id_dudi='$_GET[id]'");
    $pecah=$ambil->fetch_assoc();
    $lo=$pecah['lon'];
    $la=$pecah['lat'];
    $nama=$pecah['nama_dudi'];
    $alamat=$pecah['alamat'];
    ?>
    <div id="mapid" style="height:100vh;"></div>
    <script>
    var mapOptions = {
      center: [<?php echo $la?>,<?php echo $lo?>],
      zoom: 25
    }
    var mapid = new L.map('mapid', mapOptions);
    var marker = L.marker([<?php echo $la?>,<?php echo $lo?>]).addTo(mapid);
   
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox.streets',
      accessToken: 'pk.eyJ1IjoicGF4aXRvdDE5OSIsImEiOiJja2Jmenp4M3MxMHA1MnhvNXl1cDdvaDQxIn0.qC-z0-WmnyfnWC8Yo_mQMg'
    }).addTo(mapid);
    </script>
</body>
</html>