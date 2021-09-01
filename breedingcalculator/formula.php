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


if(isset($_GET["result"]))
{
$pOneFStat=$_GET["pOneFStat"];
$pOneSStat=$_GET["pOneSStat"];
  $pOneTStat=$_GET["pOneTStat"];

  $pTwoFStat=$_GET["pTwoFStat"];
	$pTwoSStat=$_GET["pTwoSStat"];
  $pTwoTStat=$_GET["pTwoTStat"];
  
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


/*function function_alert($message) {
      
    echo "<script>alert('$message');</script>";
}
  function_alert("Dragon first stat : $fFinalS, Dragon second stat $sFinalS, Dragon third stat : $tFinalS");*/

echo"Dragon first stat result: ",round($fFinalS);
echo"<br>";
echo"Dragon second stat result: ",round($sFinalS);
echo"<br>";
echo"Dragon third stat result: ",round($tFinalS);
echo"<br>";
echo"Final dragon stats percentage: ",round($dPercentage);
?>

