<?php
/*
example usage
currencyLayer ver 1.0

You must get an API key from https://currencylayer.com/product
and enter it in the currency.class.php file
*/

//turning off low level notices
error_reporting(E_ALL ^ E_NOTICE);

//set your plan to diplay features associated with it.
//plans are free, basic, professional and enterprise
$plan = 'free';

//instantiate the class
include('currency.class.php');
$currencyLayer = new currencyLayer();

/*
Get basic quotes
*/

//set our endpoint
//defaults to the live endpoint, but we will set it just to be safe
$currencyLayer->setEndPoint('live');

//specify the currencies we want quotes for
//if this parameter is not set, quotes for all 168 supported currencies will be returned
//we want to limit the bandwidth and response time by only getting the currencies we need
$currencyLayer->setParam('currencies','CNY,EUR,GBP,GHS,KRW,NGN,PHP,RUB,SAR,ZAR');

//get the response from the api
$currencyLayer->getResponse();

$NairaAmount = 100;
//the reponse property will contain the response returned from the api
$OneDllToNaira = $currencyLayer->response->quotes->USDNGN;
$HundrdNairaToDll = $NairaAmount/$OneDllToNaira;
// $HundrdNairaToDll = round($HundrdNairaToDll, 6);

/*
Convert currency using the class method
*/

echo '<h4>Currency conversion using class method</h4>';
$EUR = round($currencyLayer->convertCurrency($HundrdNairaToDll,'EUR'), 6);
$GBP = round($currencyLayer->convertCurrency($HundrdNairaToDll,'GBP'), 6);
$RUB = round($currencyLayer->convertCurrency($HundrdNairaToDll,'RUB'), 6);

echo '100 NGN = '.$EUR.' EUR<br>';
echo '100 NGN = '.$GBP.' GBP<br>';
echo '100 NGN = '.$RUB.' RUB<br>';

//get the response from the api
// $currencyLayer->getResponse();


?>