<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=".$nama_file.".xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
<table border="1" width="100%">
  <tr>
    <th>Nama Komersial</th>
    <th>Kode POS</th>
    <th>Alamat Jalan</th>
    <th>Kontak</th>
    <th>twitter</th>
    <th>website</th>
    <th>facebook</th>
  </tr>
    <tr>
      <td><?php echo $d_a->nama_komersial;?></td>
      <td><?php echo $d_a->kodepos;?></td>
      <td><?php echo $d_a->alamat_jalan;?></td>
      <td><?php echo $d_a->no_telp;?></td>
      <td><?php echo $d_a->twitter;?></td>
      <td><?php echo $d_a->website;?></td>
      <td><?php echo $d_a->facebook;?></td>
    </tr>
 </table>