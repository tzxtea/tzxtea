<?php 
header("Content-type:text/html;charset=utf8");
$nickname = $_GET["nickname"];

/*
$xml = new DOMDocument();
$xml->load("users.xml");
$root = $xml->documentElement;
$nodes = $root->getElementsByTagName("Item");
$res[$nodes->item(0)->getAttribute('id')] =$nodes->item(0)->getAttribute('amount');
echo $nodes->item(0)->getAttribute('amount');*/

$xml = simplexml_load_file('users.xml');
$SQL="/Items/Item[@id='".$nickname."']/@*";
//利用xpath方法查找节点位置
$query =  $xml->xpath($SQL);
if(count($query)==2)
{
	echo $query[1];
}else
{
	echo "no";
}
//echo $query;
//var_dump($query);
?>