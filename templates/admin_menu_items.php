<?php
echo "<table class='table table-bordered table-condensed table-striped'>";
echo "<th>Parent ID</th>";
echo "<th>Order</th>";
echo "<th>Name</th>";
echo "<th>Destination</th>";
echo "<th>Class</th>";
echo "<th>Glyph</th>";
$menuitems = getMenuItems();
$i = "1";
foreach ($menuitems as $item) {
  echo "<tr><td>".$item['menu_name']."</td><td contenteditable='true'>".$item['mitem_order']."</td>";
  echo "<td><div style='display:block' id='editable".$i."' contenteditable='true'><p>".$item['mitem_name']."</p></div>";
  echo "<button type='button' id='save".$i."' name='save'><span>Save</span></button></td>";
  echo "<td contenteditable='true'>".$item['mitem_dest']."</td><td contenteditable='true'>".$item['mitem_class']."</td>";
  echo "<td contenteditable='true'>".$item['mitem_glyph']."</td></tr>";
  echo "
<script>

$(document).ready(function(){
  $(\"#save".$i."\").hide();
  $(\"#editable".$i."\").keyup(function()
  {
    $(\"#save".$i."\").show();
  });
  $(\"#editable".$i."\").blur(function()
  {
    $(\"#save".$i."\").hide();
  });

});
</script>";

  $i++;
}
echo "</table>";
?>
<textarea name="editor1">&lt;p&gt;Initial value.&lt;/p&gt;</textarea>
