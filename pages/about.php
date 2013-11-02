

 <div class="col-4 col-lg-4">

<div class="list-group">
  <a href="#" class="list-group-item active">

    <h4 class="list-group-item-heading">Features</h4>
</a>
  <p class="list-group-item">Responsive</p>
  <p class="list-group-item">Customizable</p>
  <p class="list-group-item">Scalable</p>
  <p class="list-group-item">Object Oriented</p>
  <p class="list-group-item">Bootstrap 3.0</p>

</div></div>

<?php
$infotext = "<p>R501 takes a fresh approach to interaction between non-profit organizations and their contributors.</p>";
$infotext .= "<p>Through simple and effective user engagement, it allows communication between administrative staff, office staff, 
volunteers--and most importantly: clients, customers, and contributors.</p>";
$infotext .= "<p>To achieve this task, we believe the best approach is a modular one. This keeps dataflow consistent and organized, which
 through our experience in non-profit consulation, we found to be the biggest hinderance to success.</p>";
$info = new altpanel();
$info->set_type("primary");
$info->set_size("6");
$info->set_lead("R501");
$info->set_content($infotext);
$info->makepanel();
?>




<?php
$approachtext = "<p>Tribe501 takes a fresh approach to interaction between non-profit organizations and their contributors.</p>";
$approachtext .= "<p>Through simple and effective user engagement, it allows communication between administrative staff, office staff, 
volunteers--and most importantly: clients, customers, and contributors.</p>";
$approachtext .= "<p>To achieve this task, we believe the best approach is a modular one. This keeps dataflow consistent and organized, which
 through our experience in non-profit consulation, we found to be the biggest hinderance to success.</p>";

$approach = new altpanel();
$approach->set_type("primary");
$approach->set_size("8");
$approach->set_lead("Technical Approach");
$approach->set_content($approachtext);
$approach->makepanel();
?>


<div class="col-4 col-lg-4">
<div class="list-group">
  <a href="#" class="list-group-item active">

    <h4 class="list-group-item-heading">Requirements</h4>
</a>
  <p class="list-group-item">PHP5</p>
  <p class="list-group-item">MySQL</p>
  <p class="list-group-item">FTP/SCP Access</p>
  <p class="list-group-item">Open Mind</p>

</div>
</div>

</div>
