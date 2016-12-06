<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
// 
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: FieldError.php 57951 2016-03-17 19:32:04Z jyhem $

class Services_Exception_FieldError extends Services_Exception
{
	function __construct($field, $message)
	{
		parent::__construct("<!--field[$field]-->" . $message, 409);
	}
}

