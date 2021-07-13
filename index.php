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
$CNY = round($currencyLayer->convertCurrency($HundrdNairaToDll,'CNY'), 6);
$EUR = round($currencyLayer->convertCurrency($HundrdNairaToDll,'EUR'), 6);
$GBP = round($currencyLayer->convertCurrency($HundrdNairaToDll,'GBP'), 6);
$GHS = round($currencyLayer->convertCurrency($HundrdNairaToDll,'GHS'), 6);
$KRW = round($currencyLayer->convertCurrency($HundrdNairaToDll,'KRW'), 6);
$PHP = round($currencyLayer->convertCurrency($HundrdNairaToDll,'PHP'), 6);
$RUB = round($currencyLayer->convertCurrency($HundrdNairaToDll,'RUB'), 6);
$SAR = round($currencyLayer->convertCurrency($HundrdNairaToDll,'SAR'), 6);
$ZAR = round($currencyLayer->convertCurrency($HundrdNairaToDll,'ZAR'), 6);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link href="./assets/docs.css" rel="stylesheet">
    <link href="./css/flag-icon.css" rel="stylesheet">
    <title>Currency Exchange Rate</title>
  </head>
  <body>
  <div class="content">
    
    <div class="container">
      <h2 class="mb-5" style="text-align: center;">Currency Exchange Rate by Computer Science, HND 1B. <a href="wd">check cities temperature</a></h2>
      
      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  
              <th scope="col">Country</th>
              <th scope="col">Flag</th>
              <th scope="col">Currency</th>
              <th scope="col">Code</th>
              <th scope="col">NGN <div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-ng" title="ng" id="ng"></div></div></th>
              <th scope="col">Rate</th>
            </tr>
          </thead>
<!-- <div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-ng" title="ng" id="ng"></div></div> -->
          <tbody>
            <tr scope="row">
              <td>United State of America</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-us" title="us" id="us"></div></div></td>
              <td>US Dollar</td>
              <td>USD</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo round($HundrdNairaToDll, 6); ?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>

            <tr>
              <td>China</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-cn" title="cn" id="cn"></div></div></td>
              <td>Yuan</td>
              <td>CNY</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $CNY; ?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>

            <tr>
              <td>Euro Member Countries</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-ck" title="ck" id="ck"></div></div></td>
              <td>Euro</td>
              <td>EUR</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $EUR; ?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>

            <tr>
              <td>British</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-gb" title="gb" id="gb"></div></div></td>
              <td>Pound Sterling</td>
              <td>GBP</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $GBP; ?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>

            <tr>
              <td>Ghana</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-gn" title="gn" id="gn"></div></div></td>
              <td>Ghanaian Cedi</td>
              <td>GHS</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $GHS; ?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>

            <tr>
              <td>South Korea</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-kr" title="kr" id="kr"></div></div></td>
              <td>South Korean Won</td>
              <td>KRW</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $KRW; ?></td>
            </tr>
            <tr class="spacer"><td colspan="100"></td></tr>

            <tr>
              <td>Philippine</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-ph" title="ph" id="ph"></div></div></td>
              <td>Philippine Peso</td>
              <td>PHP</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $PHP; ?></td>
            </tr>

            <tr>
              <td>Russia</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-ru" title="ru" id="ru"></div></div></td>
              <td>Russian Ruble</td>
              <td>RUB</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $RUB; ?></td>
            </tr>

            <tr>
              <td>Saudi Arabia</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-sa" title="sa" id="sa"></div></div></td>
              <td>Saudi Riyal</td>
              <td>SAR</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $SAR; ?></td>
            </tr>

            <tr>
              <td>South Africa</td>
              <td><div class="flag-wrapper"><div class="img-thumbnail flag flag-icon-background flag-icon-za" title="za" id="za"></div></div></td>
              <td>South African Rand</td>
              <td>ZAR</td>
              <td><?php echo $NairaAmount; ?></td>
              <td><?php echo $ZAR; ?></td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="./assets/docs.js"></script>
  </body>
</html>