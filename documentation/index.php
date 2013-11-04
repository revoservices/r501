<!DOCTYPE html>
<html><head>
<title>R501 Documentation</title>

</head>
<body>

            <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
    <a class="brand" href="../readme">Documentation</a>
	
                <ul class="nav">
                  <li><a href="../readme">Home</a></li>
                  <li><a href="../forms">Forms</a></li>
                  <li><a href="../ui">UI Elements</a></li>
                  <li><a href="../security">Security</a></li>
                  <li><a href="#">Database</a></li>
                </ul>
              </div>

            </div>

<xmp theme="spruce" style="display:none;">

<?php
if (isset($_GET['view'])) {
$page = $_GET['view'].".md";
}
if ($_GET['view'] == "main") {
$page = "readme.md";
}
include($page);
?>
</xmp>
<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</body>
</html>
