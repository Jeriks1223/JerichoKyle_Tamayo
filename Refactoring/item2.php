<?php
public function getDistanceTravelled($time, $haggis){
$result = 0;
  $acceleration = $haggis->primaryForce / $haggis->mass;
  
  
  public function primaryTime($computedTime)
  {
    $computedTime = min($time, $haggis->delay);
  }
  
  public function secondaryTime ($computedTime){
  $computedTime = $time - $haggis->delay;
  }
  
  result = 0.5 * $acceleration * $computedTime * $computedTime;
  
  if ($computedTime > 0)
  {
    $primaryVelocity = $acceleration * $haggis->delay;
  }
  return $result;
}
?>
