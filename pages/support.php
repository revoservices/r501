<div class="alert alert-success">
<p>Here is a list of  general donation suggestions plus a number of specific items that would be of great use. </p>
<p>If you are interested in making a donation, or getting involved please call us at <b>(904) 701 - DoIt (3648)</b>.</p>
</div>
<?php
$moneycontent = "<p>Yeah, we know this seems contradictory to our principles.</p> 
<p>\"Aren't you anti-capitalist?\" is a question we get a lot. 
And we are, however there is no way (at this point in time) to get around the use of money to meet certain project needs, 
like rent, utilities, insurance and things like this. </p>
<p>We are actively working to eliminate costs like this, but in the mean time, donations of money help cover them and keep 
project momentum growing. Becoming a Friend of Burnpile is one of the best things you can do to help if you can’t volunteer.</p>";
$moneylink = "<a href=\"https://www.wepay.com/donations/stupid-isn-t-cool\" target=\"_new\">Click here to go to our WePay page.</a>";

$money = new panel("4","success","Financial Support",$moneycontent,$moneylink);
$money->showpanel();

$fobcontent = "<p><b>What you do:</b></p>
<p>Commit to a regular monthly donation. You choose the amount and the time frame that is appropriate for you. 
(example – $10 a month the first week each month) We can even set up an auto reminder for ease and convenience.</p>

<p><b>What you get:</b></p>
<ul>
<li>The happy making feeling of supporting an independent, grassroots media project.
<li>First access to hot off the press prints.
<li>Spontaneous care packs (including all sorts of goodies from the info-shop) delivered to your door.";
$foblink = "<a href=\"#\" target=\"_new\">Click here to see our current friends.</a>";
$fob = new panel("4","success","Friends of Burnpile",$fobcontent,$foblink);
$fob->showpanel();

?>
<div class="panel-group" id="accordion">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          New Volunteers
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
       We always need volunteers to help out on our multiple projects. If you want to get involved,  get in touch.      </div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          DVDs of Activist Interest
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
We always appreciate new additions to our video collection, especially of hard to find independent media productions and films of interest to activists. We can also make copies if you can’t quite let it go or show your flick at one of our movie nights.      </div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          Books
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
This might go without saying, but we LOVE books!  We appreciate donations of new and gently-used books of relevant topics and issues to become part of our peoples library collection.      </div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
          Art Supplies
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse">
      <div class="panel-body">
We  can always use art and office supplies of all sorts, including things like markers, poster board, canvas, pens and pencils, glue sticks, construction paper, paint, fabric etc.      </div>
    </div>
  </div>
  <div class="panel panel-success">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
	Tools
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse">
      <div class="panel-body">
       We’re always building something and could use some upgrades. Circular saw, liquid nail and a level are a few at the top of the list. We are working towards the establishment of  tool libraries for the communities our homesteads are based in.      </div>
    </div>
  </div>
</div>