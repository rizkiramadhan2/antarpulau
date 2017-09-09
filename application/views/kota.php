<?php foreach($data as $row): ?>
	<?php $new_array[]=$row['nama_kota'].', '.$row['provinsi'];

	 ?>
<?php endforeach ?>
<?php 

echo json_encode($new_array,TRUE);
?>
