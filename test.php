<?php
require_once( 'amfphp/core/amf/app/Gateway.php');
require_once( AMFPHP_BASE . 'amf/io/AMFSerializer.php');
require_once( AMFPHP_BASE . 'amf/io/AMFDeserializer.php');
  include_once('ustreamrip.class.php');
  $rip = new Ustreamrip();
  $rip->Init();
//  $rip->setChannel('dj-kentai-jcore-hardcore-mix');
  $rip->setChannel('test-show-devving-ripper');
  $data = $rip->getRTMPCommand();
  var_dump($data);
//  var_dump($rip->command);

/*require_once( 'amfphp/core/amf/app/Gateway.php');
require_once( AMFPHP_BASE . 'amf/io/AMFSerializer.php');
require_once( AMFPHP_BASE . 'amf/io/AMFDeserializer.php');

$amf = new AMFObject($rip->amfData);
$deserializer = new AMFDeserializer($amf->rawData);*/
//var_dump($deserializer->deserialize($amf),$amf->_bodys);

  
/*  include_once('sabreAMF/Deserializer.php');
  include_once('sabreAMF/InputStream.php');
  $Sabre = new SabreAMF_InputStream($rip->amfData);
//  $Sabre = new SabreAMF_Deserializer($rip->amfData);
  $lawl = $Sabre->readBuffer(strlen($rip->amfData));
  $Sabre2 = new SabreAMF_Deserializer($lawl);
//  var_dump($Sabre2-/>)*/
  
  /*include_once('amfphp 1.9/core/amf/app/Gateway.php');
  include_once('amfphp 1.9/core/amf/io/AMFDeserializer.php');
  $amf = new AMFDeserializer($rip->amfData);
  $amf->readAny();
  var_dump($amf);*/
  
  /*include_once('SabreAMF/InputStream.php');
  include_once('SabreAMF/Deserializer.php');
  include_once('SabreAMF/AMF3/Deserializer.php');
  $amf = new SabreAMF_InputStream($rip->amfData);
  $amfData = $amf->readBuffer(strlen($rip->amfData));
  $amf2 = new SabreAMF_AMF3_Deserializer($amfData);
  $amf2->readAMFData();
  var_dump($amf);*/
  
?>
