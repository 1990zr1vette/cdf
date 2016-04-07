<?php
function fixSegment($segment1, $segment2 = null)
{
	if (!is_null($segment2))
	{
		if (Session::get('lang') == 'EN')
			return strtolower(str_replace(' ', '-', replaceAccents($segment1)));
		else
			return strtolower(str_replace(' ', '-', replaceAccents($segment2)));
	}
	else
	{
		return strtolower(str_replace(' ', '-', replaceAccents($segment1)));
	}
}

function replaceAccents($str) {
	$search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,ø,Ø,Å,Á,À,Â,Ä,È,É,Ê,Ë,Í,Î,Ï,Ì,Ò,Ó,Ô,Ö,Ú,Ù,Û,Ü,Ÿ,Ç,Æ,Œ");
	$replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,o,O,A,A,A,A,A,E,E,E,E,I,I,I,I,O,O,O,O,U,U,U,U,Y,C,AE,OE");
	return str_replace($search, $replace, $str);
}

function translate($en, $fr)
{
	if (Session::get('lang') == 'EN')
		echo $en;
	else
		echo $fr;
}

function languages($en, $fr)
{
	if (Session::get('lang') == 'EN')
		return $en;
	else
		return $fr;
}