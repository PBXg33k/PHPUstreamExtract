<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="Oguzhan Uysal">
<meta http-equiv="Reply-to" content="info@yu-go.eu">
<meta name="description" content="Small script that makes it possible for the end-user to record live streams from the ustream network. Usage of this script is questionable in some jurisdictions.">
<meta name="keywords" content="">
<meta name="creation-date" content="06/01/2011">
<meta name="revisit-after" content="15 days">
<title>Ustream Ripper v0.2 ~by PBX_g33k~ ~for #pswg~</title>
<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
    <? if(isset($_POST['channel'])){ ?>
<?
    require_once( 'amfphp/core/amf/app/Gateway.php');
    require_once( AMFPHP_BASE . 'amf/io/AMFSerializer.php');
    require_once( AMFPHP_BASE . 'amf/io/AMFDeserializer.php');
    include_once('ustreamrip.class.php');
    $rip = new Ustreamrip();
    $rip->Init();
    //  $rip->setChannel('dj-kentai-jcore-hardcore-mix');
    $rip->setChannel($_POST['channel']);
    $data = $rip->getRTMPCommand();
    ?>
    Found <?php echo count($data);?> streams. Please try the bellow command(s):<br><br>
    <?
    foreach($data as $command)
    {
        echo $command."<br><br>";
    };
?>
    <? }else{ ?>
    This is a small test. Please write the channel URI and press submit (or enter, whatever floats your boat).<br>
    <form action="" method="POST">
        <input type="text" name="channel">
        <button type="submit" value="submit">~Submit~</button>
    </form>
    <?}?>
</body>
</html>
