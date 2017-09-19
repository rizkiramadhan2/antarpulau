<?php foreach($result as $row): ?>
	<?= 'Asal : Malang<br>Tujuan : '.$row->nama_kota.'<br>Berat : '.$row->berat?>
<table class="table table-striped table-list-search animated fadeIn">
  <tr>
    <th>Jalur</th>
    <th>Tarif</th> 
    <th>Estimasi</th>
  </tr>
  <tr>
    <td>Darat</td>
    <td><?php if(isset($row->tarif_darat)){
    	echo $row->tarif_darat*$row->berat;
    	}else{
    		echo '-';
    		}?></td> 
    <td><?php if(isset($row->estimasi1)){
    	echo $row->estimasi1;
    	}else{
    		echo '-';
    		}?></td>
  </tr>
  <tr>
    <td>Laut</td>
    <td><?= $row->tarif_laut*$row->berat?></td> 
    <td><?= $row->estimasi2?></td>
  </tr>
  <tr>
    <td>Udara</td>
    <td><?= $row->tarif_udara*$row->berat?></td> 
    <td><?= $row->estimasi3?></td>
  </tr>
</table>
<?php endforeach ?>

