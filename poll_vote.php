<?php
//http://www.w3schools.com/php/php_ajax_poll.asp
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "poll_result.txt";
$content = file($filename);

//put content in array
$options = explode("||", $content[0]);
$opt_0 = $options[0];
$opt_1 = $options[1];
$opt_2 = $options[2];
$opt_3 = $options[3];
$opt_4 = $options[4];
$opt_5 = $options[5];

//set votes count to 0
if ($vote == 0) {
  $opt_0 = $opt_0 + 1;
}
if ($vote == 1) {
  $opt_1 = $opt_1 + 1;
}
if ($vote == 2) {
  $opt_2 = $opt_2 + 1;
}
if ($vote == 3) {
  $opt_3 = $opt_3 + 1;
}
if ($vote == 4) {
  $opt_4 = $opt_4 + 1;
}
if ($vote == 5) {
  $opt_5 = $opt_5 + 1;
}

$count = array_sum($options);

//insert votes to txt file
$insertvote = $opt_0."||".$opt_1."||".$opt_2."||".$opt_3."||".$opt_4."||".$opt_5;
$fp = fopen($filename,"w");
fputs($fp,$insertvote);
fclose($fp);
?>

<!--results view -->
<div class="row"> 
  <fieldset class="col-md-8 col-md-offset-2"><legend>Results</legend>
    <div class="table-resonsive">
    <table class="table table-compact">
      <tr>
        <td><p class="lead">Leviathan Wakes</p></td>
        <td><img src="new.gif" width="<?php echo ((100*round($opt_0/$count,2))*5); ?>" height="12" class="img-rounded"><?php echo " " . (100*round($opt_0/$count,2)); ?>%</td>
      </tr>
      <tr>
        <td><p class="lead">Caliban's War</p></td>
        <td><img src="new.gif" width="<?php echo ((100*round($opt_1/$count,2))*5); ?>" height="12" class="img-rounded"><?php echo " " . (100*round($opt_1/$count,2)); ?>%</td>
      </tr>
      <tr>
        <td><p class="lead">Abaddon's Gate</p></td>
        <td><img src="new.gif" width="<?php echo ((100*round($opt_2/$count,2))*5); ?>" height="12" class="img-rounded"><?php echo " " . (100*round($opt_2/$count,2)); ?>%</td>
      </tr>
      <tr>
        <td><p class="lead">Cibola Burn</p></td>
        <td><img src="new.gif" width="<?php echo ((100*round($opt_3/$count,2))*5); ?>" height="12" class="img-rounded"><?php echo " " . (100*round($opt_3/$count,2)); ?>%</td>
      </tr>
      <tr>
        <td><p class="lead">Nemesis Games</p></td>
        <td><img src="new.gif" width="<?php echo((100*round($opt_4/($count),2))*5); ?>" height="12" class="img-rounded"><?php echo " " . (100*round($opt_4/($count),2)); ?>%</td>
      </tr>
      <tr>
        <td><p class="lead">Babylon's Ashes</td>
        <td><img src="new.gif" width="<?php echo((100*round($opt_5/($count),2))*5); ?>" height="12" class="img-rounded"><?php echo " " . (100*round($opt_5/($count),2)); ?>%</td>
    </tr>
    </table>
    </div>
  </fieldset>
</div>

