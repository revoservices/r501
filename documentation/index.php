<!DOCTYPE html>
<html><head>
<title>Documentation</title>

</head>
<body>
<xmp theme="cerulean" style="display:none;">

<?php
if (isset($_GET['view'])) {
$page = $_GET['view'].".md";
}
else {
$page = "README";
}
include($page);
?>
</xmp>
<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</body>
</html>
