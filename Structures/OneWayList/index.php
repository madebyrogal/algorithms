<?php

namespace Structures\OneWayList;

require_once 'OneWayList.php';
require_once 'Element.php';
use Structures\OneWayList\OneWayList;
use Structures\OneWayList\Element;


//Create list
$list = new OneWayList();
//Create element
$elem = new Element(1);
//Add element
$list->add($elem);
$elem = new Element(2);
$list->add($elem);
$elem = new Element(5);
$list->add($elem);
$elem = new Element(3);
$list->add($elem);
$elem = new Element(4);
$list->add($elem);

echo 'Lista dodawania bez sortowania<br />';
$list->showAll();

//New list
$list = new OneWayList();
$elem = new Element(1);
$list->addSort($elem);
echo 'Lista dodawania z sortowaniem<br />';
$list->showAll();
$elem = new Element(2);
$list->addSort($elem);
echo 'Lista dodawania z sortowaniem<br />';
$list->showAll();
$elem = new Element(5);
$list->addSort($elem);
echo 'Lista dodawania z sortowaniem<br />';
$list->showAll();
$elem = new Element(3);
$list->addSort($elem);
echo 'Lista dodawania z sortowaniem<br />';
$list->showAll();
$elem = new Element(4);
$list->addSort($elem);
echo 'Lista dodawania z sortowaniem<br />';
$list->showAll();

echo 'Lista dodawania z sortowaniem<br />';
$list->showAll();