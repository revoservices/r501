<div class="panel">
<div class="panel-body">
<?php 
print_r($_POST);
$options = $mysqli->query("SELECT * FROM `site_options`");
while ($option = $options->fetch_assoc()) {
$opt[$option['optname']] = $option['optval'];
$options->close();
}
include('templates/form_site_options.php');
?>

</div></div>
