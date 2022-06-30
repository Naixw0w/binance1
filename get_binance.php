<?php
$start = microtime(true);
require './php-binance-api.php';

$api_key = "";
$api_secret = "";

$api = new Binance\API($api_key, $api_secret);
// Получаем цену  монет
$tickers = $api->prices();

$ETHBTC1 = $tickers['ETHBTC'];
$BNBBTC1 = $tickers['BNBBTC'];
$SOLBTC1 = $tickers['SOLBTC'];
$XRPBTC1 = $tickers['XRPBTC'];
$ADABTC1 = $tickers['ADABTC'];
$AVAXBTC1 = $tickers['AVAXBTC'];
$WAVESBTC1 = $tickers['WAVESBTC'];
$LTCBTC1 = $tickers['LTCBTC'];
$MATICBTC1 = $tickers['MATICBTC'];
$DOTBTC1 = $tickers['DOTBTC'];
$LINKBTC1 = $tickers['LINKBTC'];
$XTZBTC1 = $tickers['XTZBTC'];
$XMRBTC1 = $tickers['XMRBTC'];
$GALABTC1 = $tickers['GALABTC'];
$TRXBTC1 = $tickers['TRXBTC'];
$GMTBTC1 = $tickers['GMTBTC'];
$DOGEBTC1 = $tickers['DOGEBTC'];
$SANDBTC1 = $tickers['SANDBTC'];
$FTMBTC1 = $tickers['FTMBTC'];
$NEARBTC1 = $tickers['NEARBTC'];
$APEBTC1 = $tickers['APEBTC'];
$EGLDBTC1 = $tickers['EGLDBTC'];
$RUNEBTC1 = $tickers['RUNEBTC'];
$AXSBTC1 = $tickers['AXSBTC'];
$UNIBTC1 = $tickers['UNIBTC'];
$MANABTC1 = $tickers['MANABTC'];
$POLYBTC1 = $tickers['POLYBTC'];
$ATOMBTC1 = $tickers['ATOMBTC'];
$VETBTC1 = $tickers['VETBTC'];
$BELBTC1 = $tickers['BELBTC'];
$PYRBTC1 = $tickers['PYRBTC'];
$ZILBTC1 = $tickers['ZILBTC'];
// USDT
$ETHUSDT1 = $tickers['ETHUSDT'];
$BNBUSDT1 = $tickers['BNBUSDT'];
$SOLUSDT1 = $tickers['SOLUSDT'];
$XRPUSDT1 = $tickers['XRPUSDT'];
$ADAUSDT1 = $tickers['ADAUSDT'];
$AVAXUSDT1 = $tickers['AVAXUSDT'];
$WAVESUSDT1 = $tickers['WAVESUSDT'];
$LTCUSDT1 = $tickers['LTCUSDT'];
$MATICUSDT1 = $tickers['MATICUSDT'];
$DOTUSDT1 = $tickers['DOTUSDT'];
$LINKUSDT1 = $tickers['LINKUSDT'];
$XTZUSDT1 = $tickers['XTZUSDT'];
$XMRUSDT1 = $tickers['XMRUSDT'];
$GALAUSDT1 = $tickers['GALAUSDT'];
$TRXUSDT1 = $tickers['TRXUSDT'];
$GMTUSDT1 = $tickers['GMTUSDT'];
$DOGEUSDT1 = $tickers['DOGEUSDT'];
$SANDUSDT1 = $tickers['SANDUSDT'];
$FTMUSDT1 = $tickers['FTMUSDT'];
$NEARUSDT1 = $tickers['NEARUSDT'];
$APEUSDT1 = $tickers['APEUSDT'];
$EGLDUSDT1 = $tickers['EGLDUSDT'];
$RUNEUSDT1 = $tickers['RUNEUSDT'];
$AXSUSDT1 = $tickers['AXSUSDT'];
$UNIUSDT1 = $tickers['UNIUSDT'];
$MANAUSDT1 = $tickers['MANAUSDT'];
$POLYUSDT1 = $tickers['POLYUSDT'];
$ATOMUSDT1 = $tickers['ATOMUSDT'];
$VETUSDT1 = $tickers['VETUSDT'];
$BELUSDT1 = $tickers['BELUSDT'];
$PYRUSDT1 = $tickers['PYRUSDT'];
$ZILUSDT1 = $tickers['ZILUSDT'];

//Преобразуем в число с плавующей точкой 
$ETHBTC=floatval($ETHBTC1);
$BNBBTC=floatval($BNBBTC1);
$SOLBTC=floatval($SOLBTC1);
$XRPBTC=floatval($XRPBTC1);
$ADABTC=floatval($ADABTC1);
$AVAXBTC=floatval($AVAXBTC1);
$WAVESBTC=floatval($WAVESBTC1);
$LTCBTC=floatval($LTCBTC1);
$MATICBTC=floatval($MATICBTC1);
$DOTBTC=floatval($DOTBTC1);
$LINKBTC=floatval($LINKBTC1);
$XTZBTC=floatval($XTZBTC1);
$XMRBTC=floatval($XMRBTC1);
$GALABTC=floatval($GALABTC1);
$TRXBTC=floatval($TRXBTC1);
$GMTBTC=floatval($GMTBTC1);
$DOGEBTC=floatval($DOGEBTC1);
$SANDBTC=floatval($SANDBTC1);
$FTMBTC=floatval($FTMBTC1);
$NEARBTC=floatval($NEARBTC1);
$APEBTC=floatval($APEBTC1);
$EGLDBTC=floatval($EGLDBTC1);
$RUNEBTC=floatval($RUNEBTC1);
$AXSBTC=floatval($AXSBTC1);
$UNIBTC=floatval($UNIBTC1);
$MANABTC=floatval($MANABTC1);
$POLYBTC=floatval($POLYBTC1);
$ATOMBTC=floatval($ATOMBTC1);
$VETBTC=floatval($VETBTC1);
$BELBTC=floatval($BELBTC1);
$PYRBTC=floatval($PYRBTC1);
$ZILBTC=floatval($ZILBTC1);
$ETHUSDT=floatval($ETHUSDT1);
$BNBUSDT=floatval($BNBUSDT1);
$SOLUSDT=floatval($SOLUSDT1);
$XRPUSDT=floatval($XRPUSDT1);
$ADAUSDT=floatval($ADAUSDT1);
$AVAXUSDT=floatval($AVAXUSDT1);
$WAVESUSDT=floatval($WAVESUSDT1);
$LTCUSDT=floatval($LTCUSDT1);
$MATICUSDT=floatval($MATICUSDT1);
$DOTUSDT=floatval($DOTUSDT1);
$LINKUSDT=floatval($LINKUSDT1);
$XTZUSDT=floatval($XTZUSDT1);
$XMRUSDT=floatval($XMRUSDT1);
$GALAUSDT=floatval($GALAUSDT1);
$TRXUSDT=floatval($TRXUSDT1);
$GMTUSDT=floatval($GMTUSDT1);
$DOGEUSDT=floatval($DOGEUSDT1);
$SANDUSDT=floatval($SANDUSDT1);
$FTMUSDT=floatval($FTMUSDT1);
$NEARUSDT=floatval($NEARUSDT1);
$APEUSDT=floatval($APEUSDT1);
$EGLDUSDT=floatval($EGLDUSDT1);
$RUNEUSDT=floatval($RUNEUSDT1);
$AXSUSDT=floatval($AXSUSDT1);
$UNIUSDT=floatval($UNIUSDT1);
$MANAUSDT=floatval($MANAUSDT1);
$POLYUSDT=floatval($POLYUSDT1);
$ATOMUSDT=floatval($ATOMUSDT1);
$VETUSDT=floatval($VETUSDT1);
$BELUSDT=floatval($BELUSDT1);
$PYRUSDT=floatval($PYRUSDT1);
$ZILUSDT=floatval($ZILUSDT1);

//математические вычисления 

$B2 = $ETHUSDT / $ETHBTC;
$B3 = $BNBUSDT / $BNBBTC;
$B4 = $SOLUSDT / $SOLBTC;
$B5 = $XRPUSDT / $XRPBTC;
$B6 = $ADAUSDT / $ADABTC;
$B7 = $AVAXUSDT / $AVAXBTC; 
$B8 = $WAVESUSDT / $WAVESBTC;
$B9 =  $LTCUSDT / $LTCBTC; 
$B10 = $MATICUSDT / $MATICBTC;
$B11 = $DOTUSDT / $DOTBTC;
$B12 = $LINKUSDT / $LINKBTC;
$B13 = $XTZUSDT / $XTZBTC;
$B14 = $XMRUSDT / $XMRBTC;
$B15 = $GALAUSDT / $GALABTC;
$B16 = $TRXUSDT / $TRXBTC; 
$B17 = $GMTUSDT / $GMTBTC;
$B18 = $DOGEUSDT / $DOGEBTC;
$B19 = $SANDUSDT / $SANDBTC;
$B20 = $FTMUSDT / $FTMBTC;
$B21 = $NEARUSDT / $NEARBTC;
$B23 = $APEUSDT / $APEBTC;
$B24 = $EGLDUSDT / $EGLDBTC;
$B25 = $RUNEUSDT / $RUNEBTC;
$B26 = $AXSUSDT / $AXSBTC; 
$B27 = $UNIUSDT / $UNIBTC;
$B28 = $MANAUSDT / $MANABTC ;
$B29 = $POLYUSDT / $POLYBTC;
$B30 = $ATOMUSDT / $ATOMBTC;
$B31 = $VETUSDT / $VETBTC;
$B32 = $BELUSDT / $BELBTC;
$B33 = $PYRUSDT / $PYRBTC;
$B34 = $ZILUSDT / $ZILBTC;
//Функция округления
if( !function_exists('ceiling') )
{
    function ceiling($number, $significance = 1)
    {
        return ( is_numeric($number) && is_numeric($significance) ) ? (ceil($number/$significance)*$significance) : false;
    }
}
//Нахдим максимальное и минимальное значение
$Bmin = min($B2, $B3, $B4, $B5, $B6, $B7, $B8, $B9, $B10, $B11, $B12, $B13, $B14, $B15, $B16, $B17, $B18, $B19, $B20, $B21, $B23, $B24, $B25,$B26, $B27, $B28, $B29, $B30, $B31, $B32, $B33, $B34); 
$Bmax = max($B2, $B3, $B4, $B5, $B6, $B7, $B8, $B9, $B10, $B11, $B12, $B13, $B14, $B15, $B16, $B17, $B18, $B19, $B20, $B21, $B23, $B24, $B25,$B26, $B27, $B28, $B29, $B30, $B31, $B32, $B33, $B34); 

//Покупка Монеты по мин цене
if ($Bmin == $B2){
	$quantity = 11 / $ETHUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("ETHUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("ETHBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$ETHUSDT . '</b>';
}elseif ($Bmin == $B3){
	$quantity = 11 / $BNBUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("BNBUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("BNBBTC", $order_qty);

	echo 'Цена монеты изначальная = <b>'.$BNBUSDT . '</b>';
}elseif($Bmin == $B4){
	$quantity = 11 / $SOLUSDT ;
	$quantity_itog=round($quantity,2);
	$itog = $quantity_itog - 0.2;
	$order = $api->marketBuy("SOLUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("SOLBTC", $order_qty);

	echo 'Цена монеты изначальная = <b>'.$SOLUSDT . '</b>';
}elseif($Bmin == $B5){
	$quantity = 11 / $XRPUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("XRPUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("XRPBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$XRPUSDT . '</b>';
}elseif($Bmin == $B6){
	$quantity = 11 / $ADAUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("ADAUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	$order1 = $api->marketSell("ADABTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$ADAUSDT . '</b>';
}elseif($Bmin == $B7){
	$quantity = 11 / $AVAXUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("AVAXUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("AVABTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$AVAXUSDT . '</b>';
}elseif ($Bmin == $B8){
	$quantity = 11 / $WAVESUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("WAVESUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("WAVESBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$WAVESUSDT . '</b>';
}elseif ($Bmin == $B9){
	$quantity = 11 / $LTCUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("LTCUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("LTCBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$LTCUSDT . '</b>';
}elseif ($Bmin == $B10){
	$quantity = 11 / $MATICUSDT;
	$quantity_itog=round($quantity,1);
	$order = $api->marketBuy("MATICUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("MATICBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$MATICUSDT . '</b>';
}elseif($Bmin == $B11){
		$quantity = 11 / $DOTUSDT;
		$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("DOTUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	
	$order1 = $api->marketSell("DOTBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$DOTUSDT . '</b>';
}elseif ($Bmin == $B12){
	$quantity = 11 / $LINKUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("LINKUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("LINKBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$LINKUSDT . '</b>';
}elseif($Bmin == $B13){
	$quantity = 11 / $XTZUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("XTZUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("XTZBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$XTZUSDT . '</b>';
}elseif($Bmin == $B14){
	$quantity = 11 / $XMRUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("XMRUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("XMRBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$XMRUSDT . '</b>';
}elseif ($Bmin == $B15){
	$quantity = 11 / $GALAUSDT;
	$quantity_itog= ceil($quantity);
	$order = $api->marketBuy("GALAUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("GALABTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$GALAUSDT . '</b>';
}elseif ($Bmin == $B16){
	$quantity = 11 / $TRXUSDT;
	$quantity_itog=round($quantity,1);
	$order = $api->marketBuy("TRXUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("TRXBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$TRXUSDT . '</b>';
}elseif ($Bmin == $B17){
	$quantity = 11 / $GMTUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("GMTUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("GMTBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$GMTUSDT . '</b>';
}elseif($Bmin == $B18){
		$quantity = 11 / $DOGEUSDT;
	$quantity_itog= ceil($quantity);
	$order = $api->marketBuy("DOGEUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("DOGEBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$DOGEUSDT . '</b>';
}elseif ($Bmin == $B19){
	$quantity = 11 / $SANDUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("SANDUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("SANDBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$SANDUSDT . '</b>';
}elseif($Bmin == $B20){
	$quantity = 11 / $FTMUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("FTMUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("FTMBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$FTMUSDT . '</b>';
}elseif($Bmin == $B21){
	$quantity = 11 / $NEARUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("NEARUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("NEARBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$NEARUSDT . '</b>';
}elseif ($Bmin == $B23){
	$quantity = 11 / $APEUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("APEUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("APEBTC", $order_qty);
	echo 'Цена монеты изначальная = <b>'.$APEUSDT . '</b>';
}elseif ($Bmin == $B24){
	$quantity = 11 / $EGLDUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("EGLDUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("EGLDBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$EGLDUSDT . '</b>';
}elseif ($Bmin == $B25){
	$quantity = 11 / $RUNEUSDT;
	$quantity_itog=round($quantity,1);
	$order = $api->marketBuy("RUNEUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("RUNEBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$RUNEUSDT . '</b>';
}elseif($Bmin == $B26){
	$quantity = 11 / $AXSUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("AXSUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("AXSBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$AXSUSDT . '</b>';
}elseif($Bmin == $B27){
	$quantity = 11 / $UNIUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("UNIUSDT", $quantity_itog);
	
$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("UNIBTC", $order_qty);
	echo 'Цена монеты изначальная = <b>'.$UNIUSDT . '</b>';
}elseif($Bmin == $B28){
	$quantity = 11 / $MANAUSDT;
	$quantity_itog=round($quantity,2);

	$order = $api->marketBuy("MANAUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	$order1 = $api->marketSell("MANABTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$MANAUSDT . '</b>';
}elseif($Bmin == $B29){
	$quantity = 11 / $POLYUSDT;
	$quantity_itog=round($quantity,1);
	$order = $api->marketBuy("POLYUSDT", $quantity_itog);
	//-------------------------------------------
$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("POLYBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$POLYUSDT . '</b>';
}elseif ($Bmin == $B30){
	$quantity = 11 / $ATOMUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("ATOMUSDT", $quantity_itog);
	//-------------------------------------------
		$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];

	$order1 = $api->marketSell("ATOMBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$ATOMUSDT . '</b>';
}elseif ($Bmin == $B31){
	$quantity = 11 / $VETUSDT + 1;
	$quantity_itog=round($quantity,1);
	$order = $api->marketBuy("VETUSDT", $quantity_itog);
	//-------------------------------------------
		$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	$order1 = $api->marketSell("VETBTC", $order_qty);

	echo 'Цена монеты изначальная = <b>'.$VETUSDT . '</b>';
}elseif ($Bmin == $B32){
	$quantity = 11 / $BELUSDT;
	$quantity_itog=round($quantity,1);
	$order = $api->marketBuy("BELUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	$order1 = $api->marketSell("BELBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$BELUSDT . '</b>';
}elseif($Bmin == $B33){
		$quantity = 11 / $PYRUSDT;
	$quantity_itog=round($quantity,2);
	$order = $api->marketBuy("PYRUSDT", $quantity_itog);
	//-------------------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];

	$order1 = $api->marketSell("PYRBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$PYRUSDT . '</b>';
}elseif ($Bmin == $B34){
	
	$quantity = 11 / $ZILUSDT;
	$quantity_itog=round($quantity,1);

	$order = $api->marketBuy("ZILUSDT", $quantity_itog);
	//---------------------------------
	$order_qty = $order['fills']['0']['qty'];
	$order_commission = $order['fills']['0']['commission'];
	$order_symbol= $order['symbol'];
	
	$order1 = $api->marketSell("ZILBTC", $order_qty);
	
	echo 'Цена монеты изначальная = <b>'.$ZILUSDT . '</b>';
}else{
	echo 'Ошибка';
	
}
$order_Qty11 = $order['cummulativeQuoteQty'];
$prices = $order['fills']['0']['price'];
//1 операция
	echo ' <br /> Операция 1 покупки'.$order_symbol. ' успешно завершена <br/>';
	echo 'Количество купленной монеты: '.$order_qty. ' комиссия: ' .$order_commission. '<br/>';
	echo 'Количество потраченных USDT - <b>' .$order_Qty11 . '</b><br/>';
	
	echo 'Цена монеты после = <b>'.$prices. '</b>';
	echo '<br/>';
	echo ' Время выполнения 1 этапа скрипта: <b>'.round(microtime(true) - $start, 4).' сек.</b> <br/><br/>';
//Продажа монеты по максимальной цене


if ($Bmax == $B2){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $ETHBTC ; 
	$new_sum1=round($order_sum1,2);
	
	
	$order2 = $api->marketBuy("ETHBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];

	
	$order3 = $api->marketSell("ETHUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];

}elseif ($Bmax == $B3){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $BNBBTC ; 
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("BNBBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
		
	$order3 = $api->marketSell("BNBUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];
}elseif($Bmax == $B4){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $SOLBTC ; 
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("SOLBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("SOLUSDT", $order_qty2);

	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B5){
		$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $XRPBTC ; 
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("XRPBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];

	$order3 = $api->marketSell("XRPUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B6){
		$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $ADABTC ; 
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("ADABTC", $new_sum1);
	//-------------------------------------------
	
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("ADAUSDT", $order_qty2);	
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B7){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $AVAXBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("AVAXBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];

	$order3 = $api->marketSell("AVAXUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B8){
		$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $WAVEBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("WAVEBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];

	$order3 = $api->marketSell("WAVEUSDT", $order_qty2);	
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B9){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	
	$order_sum1 = $order_Qty1 / $LTCBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("LTCBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("LTCUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B10){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $MATICBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("MATICBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("MATICUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];		
}elseif($Bmax == $B11){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $DOTBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("DOTBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("DOTUSDT", $order_qty2);

	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];		
}elseif ($Bmax == $B12){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $LINKBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("LINKBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("LINKUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];		
}elseif($Bmax == $B13){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $XTZBTC ;
	$new_sum1=round($order_sum1,1);
	$order2 = $api->marketBuy("XTZBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("XTZUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B14){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $XMRBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("XMRBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("XMRUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B15){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $GALABTC ;
	$new_sum1= ceil($order_sum1);
	$order2 = $api->marketBuy("GALABTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("GALAUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B16){
$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $TRXBTC ;
	$new_sum1= ceil($order_sum1);
	$order2 = $api->marketBuy("TRXBTC", $new_sum1);
	
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	//-------------------------------------------
	$order3 = $api->marketSell("TRXUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B17){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $GMTBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("GMTBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("GMTUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B18){

	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $DOGEBTC ;
	$new_sum1= ceil($order_sum1);
	$order2 = $api->marketBuy("DOGEBTC", $new_sum1);

	//-------------------------------------------
		$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("DOGEUSDT", $order_qty2);	
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B19){

	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $SANDBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("SANDBTC", $new_sum1);
	
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	//-------------------------------------------

	$order3 = $api->marketSell("SANDUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
	
}elseif($Bmax == $B20){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $FTMBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("FTMBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("FTMUSDT", $itog2);	
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B21){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $NEARBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("NEARBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("NEARUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B23){
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $APEBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("APEBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
		
	$order3 = $api->marketSell("APEUSDT", $order_qty2);	
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B24){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $EGLDBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("EGLDBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("EGLDUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B25){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $RUNEBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("RUNEBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("RUNEUSDT", $order_qty2);	
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B26){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $AXSBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("AXSBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
		
	$order3 = $api->marketSell("AXSUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B27){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $UNIBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("UNIBTC", $new_sum1);
	//-------------------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("UNIUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B28){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $MANABTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("MANABTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("MANAUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
	
}elseif ($Bmax == $B29){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $POLYBTC ;
	$new_sum1= floor($order_sum1);
	$order2 = $api->marketBuy("POLYBTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];

	$order3 = $api->marketSell("POLYUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
	
	
}elseif ($Bmax == $B30){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $ATOMBTC ;
	$new_sum1=round($order_sum1,2);
	$order2 = $api->marketBuy("ATOMBTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	
	$order3 = $api->marketSell("ATOMUSDT",$order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
	
}elseif ($Bmax == $B31){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $VETBTC ;
	$new_sum1= floor($order_sum1);
	$order2 = $api->marketBuy("VETBTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("VETUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
	
}elseif($Bmax == $B32){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $BELBTC ;
	$new_sum1=round($order_sum1,1);
	$order2 = $api->marketBuy("BELBTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("BELUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif ($Bmax == $B33){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $PYRBTC ;
	
	$new_sum1= floor($order_sum1);
	
	$order2 = $api->marketBuy("PYRBTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("PYRUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}elseif($Bmax == $B34){
	$order_qty1 = $order1['fills']['0']['qty'];
	$order_commission1 = $order1['fills']['0']['commission'];
	$order_symbol1= $order1['symbol'];
	$order_Qty1 = $order1['cummulativeQuoteQty'];
	$order_sum1 = $order_Qty1 / $ZILBTC ;
	$new_sum1= ceil($order_sum1);
	
	$order2 = $api->marketBuy("ZILBTC", $new_sum1);
	//---------------------------------
	$order_qty2 = $order2['origQty'];
	$order_commission2 = $order2['fills']['0']['commission'];
	$order_symbol2 = $order2['symbol'];
	
	$order3 = $api->marketSell("ZILUSDT", $order_qty2);
	
	$order_qty3 = $order3['fills']['0']['qty'];
	$order_commission3 = $order3['fills']['0']['commission'];
	$order_symbol3 = $order3['symbol'];	
}

$order_Qty3 = $order3['cummulativeQuoteQty'];
//2 операция 
	echo 'Операция 2 продажи '.$order_symbol1. ' успешно завершена <br/>';
	echo 'Количество продаваемой монеты: '.$order_qty1. ' комиссия: ' .$order_commission1. '<br/>';
	
//3 операция 
	echo 'Операция 3 покупка '.$order_symbol2. ' успешно завершена <br/>';
	echo 'Количество покупаемой монеты: '.$order_qty2. ' комиссия: ' .$order_commission2. '<br/>';
//4 операция 
	echo 'Операция 4 продажа монеты '.$order_symbol3. ' успешно завершена <br/>';
	echo 'Количество продаваемой монеты: '.$order_qty3. ' комиссия: ' .$order_commission3. '<br/>';
	echo 'Получаем USDT - <b>'.$order_Qty3. '</b><br/>';
	
	
print_r ($order);
echo '<br />Операция 2 ------------------------------';
print_r($order1);
print_r ($order2);
echo 'Операция 2 ------------------------------';
print_r($order3);
echo '<br/>';
echo 'Итоговое Время выполнения скрипта: <b>'.round(microtime(true) - $start, 4).' сек.</b>';
