<!DOCTYPE html>
<html>
<head>
	<title>Fourth view</title>
</head>
<body>

<?php 
	if($this->session->userdata('user_id')!=null){
?>
	<a href="<?php echo base_url()?>logout">Logout</a>
		<?php }
?>

</body>
</html>