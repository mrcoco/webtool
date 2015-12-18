<?php
namespace Cempaka\Webtool;
/**
* 
*/
class Helper extends Component
{
	
	public static function rupiah($rp)
	{
		return "Rp. ".number_format($rp,0,'','.').",-";
	}

	
}