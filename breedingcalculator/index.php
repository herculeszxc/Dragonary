<?php
$pOneFStat=0;
$pOneSStat=0;
$pOneTStat=0;

$pTwoFStat=0;
$pTwoSStat=0;
$pTwoTStat=0;

$firstStat=0;
$secondStat=0;
$thirdStat=0;

$percentage =0.2;

$finalStats=0;
$finalSecondPStats=0;
$finalThirdPStats=0;

$finals=0;
$dStats=0;
$fFinalS=0;
$sFinalS=0;
$tFinalS=0;
$dPercentage=0;


if(isset($_POST["result"]))
{
	$pOneFStat=$_POST["pOneFStat"];
	$pOneSStat=$_POST["pOneSStat"];
  $pOneTStat=$_POST["pOneTStat"];

  $pTwoFStat=$_POST["pTwoFStat"];
	$pTwoSStat=$_POST["pTwoSStat"];
  $pTwoTStat=$_POST["pTwoTStat"];
  
  $firstStat = $pOneFStat+$pTwoFStat;
  $firstStatDiv = $firstStat/2;
  $firstStatP = $firstStatDiv*$percentage;
  $fFinalS = $firstStatP+$firstStatDiv;
  
  $secondStat = $pOneSStat+$pTwoSStat;
  $secondStatDiv = $secondStat/2;
  $secondStatP = $secondStatDiv*$percentage;
  $sFinalS = $secondStatP+$secondStatDiv;

  $thirdStat = $pOneTStat+$pTwoTStat; 
  $thirdStatDiv = $thirdStat/2;
  $thirdStatP = $thirdStatDiv*$percentage;
  $tFinalS = $thirdStatP+$thirdStatDiv;
  $dPercentage=$fFinalS+$sFinalS+$tFinalS;

}
 
?>
<!doctype html>
<script>alert('note : this is not totally 100% correct maybe 95% :D');</script>
<html>
<head>
<meta charset="utf-8">
<title>Dragonary breeding calculator</title>
<style>
	label{
		display: block;
	}
		
</style>
</head>
 
<body>
<script>alert($fFinalS);</script>
  <h1>Dragon first stat result:<?=round($fFinalS)?></h1>
  <h1>Dragon second stat result:<?=round($sFinalS)?></h1>
  <h1>Dragon third stat result:<?=round($tFinalS)?></h1>
  <h1>Final dragon stats percentage :<?=round($dPercentage)?>%</h1>
	<form method="post">
		<label>Parent number 1 first stat:
			<input type="text" name="pOneFStat" value="<?=$pOneFStat?>">
		</label>
		<label>Parent number 1 second stat:
			<input type="text" name="pOneSStat" value="<?=$pOneSStat?>">
		</label>
    <label>Parent number 1 third stat:
			<input type="text" name="pOneTStat" value="<?=$pOneTStat?>">
		</label>
    <br>
    <label>Parent number 2 first stat:
			<input type="text" name="pTwoFStat" value="<?=$pTwoFStat?>">
		</label>
		<label>Parent number 2 second stat:
			<input type="text" name="pTwoSStat" value="<?=$pTwoSStat?>">
		</label>
    <label>Parent number 2 third stat:
			<input type="text" name="pTwoTStat" value="<?=$pTwoTStat?>">
		</label>
		<button type="submit" name="result">See result</button>
	</form>
</body>
</html>