<?php

$your_xml_response = '<?xml version="1.0" encoding="utf-8" ?>
    <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
    <soapenv:Body><ns1:syncOrderRelation xmlns:ns1="http://www.csapi.org/schema/parlayx/data/sync/v1_0/local">
    <ns1:userID><ID>27838548135</ID><type>0</type></ns1:userID>
    <ns1:spID>270110000270</ns1:spID>
    <ns1:productID>2701220000000583</ns1:productID>
    <ns1:serviceID>27012000001458</ns1:serviceID>
    <ns1:serviceList>27012000001458</ns1:serviceList>
    <ns1:updateType>1</ns1:updateType>
    <ns1:updateTime>20141008131324</ns1:updateTime>
    <ns1:updateDesc>Addition</ns1:updateDesc>
    <ns1:effectiveTime>20141008131323</ns1:effectiveTime>
    <ns1:expiryTime>20141107220000</ns1:expiryTime>
    <ns1:extensionInfo>
    <item><key>chargeMode</key><value>0</value></item>
    <item><key>MDSPSUBEXPMODE</key><value>1</value></item>
    <item><key>objectType</key><value>1</value></item>
    <item><key>isAutoExtend</key><value>1</value></item>
    <item><key>isFreePeriod</key><value>false</value></item>
    <item><key>operatorID</key><value>2701</value></item>
    <item><key>payType</key><value>1</value></item>
    <item><key>transactionID</key><value>504021505151410081513231088003</value></item>
    <item><key>orderKey</key><value>999000000000001493</value></item>
    <item><key>durationOfGracePeriod</key><value>0</value></item>
    <item><key>serviceAvailability</key><value>0</value></item>
    <item><key>durationOfSuspendPeriod</key><value>2</value></item>
    <item><key>servicePayType</key><value>0</value></item>
    <item><key>fee</key><value>1000</value></item>
    <item><key>cycleEndTime</key><value>20141107220000</value></item>
    <item><key>Starttime</key><value>20141007220000</value></item>
    <item><key>channelID</key><value>3</value></item>
    <item><key>TraceUniqueID</key><value>504021505151410081513231088006</value></item>
    <item><key>operCode</key><value>en_US</value></item>
    <item><key>rentSuccess</key><value>true</value></item>
    <item><key>try</key><value>false</value></item>
    </ns1:extensionInfo>
    </ns1:syncOrderRelation>
    </soapenv:Body>
    </soapenv:Envelope>';
$clean_xml = str_ireplace(array('soapenv:', 'soap:','ns1:'), array('','',''), $your_xml_response);
$xml = simplexml_load_string($clean_xml);
$body = $xml->Body;
#echo $body;
#print_r($body);
#var_dump($body);
#print_r($body->syncOrderRelation);
$userID = $body->syncOrderRelation->userID->ID;
#die($userID);
echo "msisdn : {$body->syncOrderRelation->userID->ID} <br/>";
echo "SpID: {$body->syncOrderRelation->spID}<br/>";
echo "Product ID: {$body->syncOrderRelation->productID}<br/>";
echo "Service List: {$body->syncOrderRelation->serviceList}<br/>";
echo "updateTime: {$body->syncOrderRelation->updateTime}<br/>";
echo "desc: {$body->syncOrderRelation->updateDesc} <br/>";
echo "effective time: {$body->syncOrderRelation->effectiveTime} <br/>";
echo "expiry time: {$body->syncOrderRelation->expiryTime}<br/>";
echo "======Extension Info <br>";
$item = $body->syncOrderRelation->extensionInfo->item;
foreach($item as $key=>$v){
    echo "$v->key:$v->value;<br>";
}
#print_r($body->syncOrderRelation->extensionInfo);echo "<br/>";
?>
