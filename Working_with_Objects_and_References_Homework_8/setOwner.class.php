<?php
class setOwner{
  public function setOwnerName($carInfo){
    $carInfo->setOwner('Ming');
    $carInfo->owned();

    //Dump Object Info
    var_dump(new ReflectionClass($carInfo));

    //Dump Object Methods
    $reflector = new ReflectionClass($carInfo);
    var_dump($reflector->getMethods());

    //Dump Properties
    var_dump($reflector->getProperties());

    //Invoke
    $ownedMethod = $reflector->getMethod('owned');
    $ownedMethod->invoke($carInfo);

    //Set Variable Value
    $ownerName = $reflector->getProperty('name');
    $ownerName->setAccessible(true);
    $ownerName->setValue($carInfo, 'Benjamin');
    var_dump($ownerName->getValue($carInfo));

    //Callback
    var_dump(call_user_func(array($carInfo, 'getOwnerName')));
  }
}
 ?>
