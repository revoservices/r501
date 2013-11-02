<div class="panel">
<div class="panel-body">
<form class="form form-horizontal">
<?php
$options = $mysqli->query("SELECT * FROM `site_options`");
while ($option = $options->fetch_assoc()) {
$opt[$option['optname']] = $option['optval'];
}
$fgstart = "<div class='form-group'><label class='col-3 col-lg-3'>";
echo $fgstart;
echo "Site Name";
echo "</label>";
echo "<input type='text' value='".$opt['sitename']."'>";
echo "</div>";
echo $fgstart;
echo "Tagline</label>";
echo "<input type='text' value='".$opt['sitetag']."'>";
echo "</div>";
print_r($opt);
?>
</form>

</div></div>
