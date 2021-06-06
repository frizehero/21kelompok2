<?php

$pdf = new Pdf('L', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Cetak Jurnal');
$pdf->SetHeaderMargin(0);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i=0;

$html='<div style="text-align: center">
<img height="80" src="assets/img/'.$ewo["foto_surat"].'" align="center"></a>
</div><br>
<table cellspacing="1" bgcolor="#666666" cellpadding="2">
<tr bgcolor="#ffffff">
<th width="5%" align="center">No</th>
<th width="15%" align="center">tanggal</th>
<th width="40%" align="center">kegiatan</th>
<th width="25%" align="center">Foto Kegiatan</th>
<th width="10%" align="center">TTd</th>

</tr>';
foreach ($tt as $row) 
{
     $date = date('d-m-Y', strtotime($row->tanggal));
    $i++;
    $html.='<tr bgcolor="#ffffff">
    <td align="center">'.$i.'</td>
    <td>'.$date .'</td>
    <td>'.$row->kegiatan .'</td>
    <td><img alt="test alt attribute" width="150" height="100" border="0" src="assets/img/'.$row->foto_kegiatan.'" /> </td>
    <td></td>
    </tr>';


}
$html.='</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('daftar_produk.pdf', 'I');
?>