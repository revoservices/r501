<div class="panel">
<div class="panel-body">
<?php 
/*
$options = $mysqli->query("SELECT * FROM `site_options`");
while ($option = $options->fetch_assoc()) {
$opt[$option['optname']] = $option['optval'];
$options->close();
}*/

if(isset($_POST['updateprefs'])) {
print_r($_POST);
}
include('templates/form_site_options.php');
?>

</div></div>
