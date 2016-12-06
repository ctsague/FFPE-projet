{* $Id: admin_auto_toc.tpl 54557 2015-03-19 14:45:26Z lindonb $ *}

<div class="media">
	<span class="pull-left fa-stack fa-lg margin-right-18em" alt="{tr}Configuration Wizard{/tr}" title="Configuration Wizard">
		<i class="fa fa-gear fa-stack-2x"></i>
		<i class="fa fa-rotate-270 fa-magic fa-stack-2x margin-left-9em"></i>
	</span>
	{tr}Choose your desired settings below{/tr}</br></br></br>
	<div class="media-body">
		{icon name="file-text-o" size=3 iclass="pull-right"}
		<fieldset>
			<legend>{tr}Auto TOC options{/tr}</legend>
			{preference name=wiki_inline_auto_toc}
			{preference name=wiki_inline_toc_pos}
			<br>
			<em>{tr}See also{/tr} <a href="http://doc.tiki.org/tiki-index.php?page=Auto+TOC" target="_blank">{tr}Auto TOC{/tr} @ doc.tiki.org</a></em>
		</fieldset>
	</div>
</div>