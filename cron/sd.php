<?php
#-- Playing with the url shit
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$ushit);
curl_setopt($ch, CURLOPT_USERAGENT, "User-Agent: Mozilla/5.0 (Windows NT 6.3; WOW64; rv:37.0) Gecko/20100101 Firefox/37.0");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_ENCODING, "");
$pagebody=curl_exec($ch);
curl_close ($ch);

include_once('simple_html_dom.php');
$html = str_get_html($pagebody);
        //Handle the price
        foreach($html->find('span[class=payBlkBig]') as $price1)
        //        echo $price1."</br>";
        $price2 = preg_replace("/<span (.*?)>/","", $price1);
        //Null handling
//        if (empty($price2)) exit("Not a valid Snapdeal Product");
//        echo "Store name Snapdeal</br>";
        //When everything is normal
        $price3 = preg_replace('/[a-zA-Z or . or , or <\/(.*?)>]/',"",$price2);
?>
