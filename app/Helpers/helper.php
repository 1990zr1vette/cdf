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

function maxLength($length, $en, $fr)
{
	if (Session::get('lang') == 'EN')
	{
		if (strlen($en) < $length)
		{
			return $en;
		}
		else
		{
			$section1 = substr($en, 0, $length);
			$section2 = substr($en, $length, strlen($en) - $length); 
			
			$return = '<span>' . $section1 . '</span>';
			$return .= '<a class="moretag" href="javascript:void(0);">&nbsp;[+] MORE&nbsp;</a>';
			$return .= '<span class="morespan">' . $section2 . '&nbsp;&nbsp;<a class="lesstag" href="javascript:void(0);">[-] Less</a></span>';
			
			return $return;
		}
	}
	else
	{
		if (strlen(trim($fr)) < $length)
		{
			return $fr;
		}
		else
		{
			return  substr($fr, 0, $length) . '&nbsp;&nbsp;&nbsp;&nbsp;<a class="moretag" href="javascript:void(0);">[+]</a>&nbsp;&nbsp;Plus ';
		}
	}
}

function publishedOn($mysqlDate)
{
	$monthsen = array('January', 'February', 'March', 'April', 'May', 'June', 
					  'July', 'August', 'September', 'October', 'November', 'December');
	$monthsfr = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
	                  'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'); 
	
	if (Session::get('lang') == 'FR')
	{
		setlocale(LC_TIME, "fr_FR"); 
		$pubon = 'Publié sur ' . strftime("le %d %B, %Y", strtotime( $mysqlDate ));
		return str_replace($monthsen, $monthsfr, $pubon);		
	}
	else
	{
		return 'Published on ' . date('F j, Y', strtotime($mysqlDate));
	}
}