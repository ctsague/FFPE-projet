<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: record_cart_order.php 57947 2016-03-17 19:29:02Z jyhem $

function payment_behavior_record_cart_order( $items = array() )
{
	global $tikilib;

	if (!count($items)) {
		return false;
	}

	$mid = " WHERE `itemId` IN (" . implode(",", array_fill(0, count($items), '?')) . ")";
	$query = "UPDATE `tiki_tracker_items` SET `status` = 'o'" . $mid;
	$tikilib->query($query, $items);
	return true;	
}

