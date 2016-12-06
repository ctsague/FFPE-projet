<?php
// (c) Copyright 2002-2016 by authors of the Tiki Wiki CMS Groupware Project
//
// All Rights Reserved. See copyright.txt for details and a complete list of authors.
// Licensed under the GNU LESSER GENERAL PUBLIC LICENSE. See license.txt for details.
// $Id: HtmlWriter.php 57948 2016-03-17 19:29:43Z jyhem $

namespace Tracker\Tabular\Writer;

class HtmlWriter
{
	function __construct()
	{
	}

	function getData(\Tracker\Tabular\Source\SourceInterface $source)
	{
		$schema = $source->getSchema();
		$schema = $schema->getHtmlOutputSchema();

		$columns = $schema->getColumns();

		foreach ($source->getEntries() as $entry) {
			yield array_map(function ($column) use ($entry) {
				return $entry->render($column);
			}, $columns);
		}
	}
}
