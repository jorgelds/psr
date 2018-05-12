<?php
/*
 *	$Id: wsdlclient1.php,v 1.3 2007/11/06 14:48:48 snichol Exp $
 *
 *	WSDL client sample.
 *
 *	Service: WSDL
 *	Payload: document/literal
 *	Transport: http
 *	Authentication: none
 */
//error_reporting(0);
require_once('lib/nusoap.php');
$proxyhost = isset($_POST['proxyhost']) ? $_POST['proxyhost'] : '';
$proxyport = isset($_POST['proxyport']) ? $_POST['proxyport'] : '';
$proxyusername = isset($_POST['proxyusername']) ? $_POST['proxyusername'] : '';
$proxypassword = isset($_POST['proxypassword']) ? $_POST['proxypassword'] : '';

$seed = date('c');

$tranKey = '024h1IlD';

$key = $hashString = sha1($seed
    . $tranKey, false);

$id = '6dd490faf9cb87a9862245da41170ff2';

$wsdl = 'https://test.placetopay.com/soap/pse/';

$client = new nusoap_client($wsdl, true, $proxyhost, $proxyport, $proxyusername, $proxypassword);

$client->setCredentials($id, $key, '');
$client->forceEndpoint = 'https://test.placetopay.com/soap/pse';
//$client->soap_defencoding = 'UTF-8';
//$proxy = $client->getProxy();

echo '<pre>';
//print_r($client);
echo '</pre>';

$err = $client->getError();
if ($err) {
    echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
}
// Doc/lit parameters get wrapped
$param = array(
    'auth' => array (
        'login' => $id,
        'tranKey' => $key,
        'seed' => $seed
    ));
$result = $client->call('getBankList', $param, 'PlacetoPay_PSEService', '', false, true);
// Check for a fault
if ($client->fault) {
    echo '<h2>Fault</h2><pre>';
    print_r($result);
    echo '</pre>';
} else {
    // Check for errors
    $err = $client->getError();
    if ($err) {
        // Display the error
        echo '<h2>Error</h2><pre>' . $err . '</pre>';
    } else {
        // Display the result
        echo '<h2>Result</h2><pre>';
        print_r($result);
        echo '</pre>';
    }
}
echo '<h2>Request</h2><pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2><pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
?>
