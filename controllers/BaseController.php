<?
namespace Controller;

class BaseController
{
    public static function send($res,$data,$code,$oldapi = 1)
	{
		if($code == 200 || $code == 201)
		{
			if($oldapi == 1)
			{
				$payload = json_encode($data, JSON_UNESCAPED_SLASHES);
        		$res->getBody()->write($payload);
        		return $res
        		  ->withHeader('Content-Type', 'application/json')
        		  ->withStatus($code);
			}
			else if ($oldapi == 0)
			{
				$payload = json_encode($data, JSON_UNESCAPED_SLASHES);
        		$res->getBody()->write($payload);
        		return $res
        		  ->withHeader('Content-Type', 'application/json')
        		  ->withStatus(426);	
			}
		}
		else
		{
			$payload = json_encode($data, JSON_UNESCAPED_SLASHES);
        	$res->getBody()->write($payload);
        	return $res
        		->withHeader('Content-Type', 'application/json')
        		->withStatus($code);
		}
	}
	
	function gen_code()
	{
    	$code = rand(100000,999999);
		return $code;
	}
	
	function t($phrase,$lang)
	{
    	static $translations = NULL;
    	if (is_null($translations))
		{
			if(check_lang($lang))
			{
        		$lang_file = INCLUDE_PATH . '/lang/' . $lang . '.txt';
        		$lang_file_content = file_get_contents($lang_file);
        		$translations = json_decode($lang_file_content, true);
			}
			else
			{
				$lang_file = INCLUDE_PATH . '/lang/en_US.txt';
        		$lang_file_content = file_get_contents($lang_file);
        		$translations = json_decode($lang_file_content, true);
			}
    	}
    	return $translations[$phrase];
	}
	
	function check_lang($lang)
	{
		switch ($lang)
		{
			case 'en_US':
				return true;
				break;
			case 'ru_RU':
				return true;
				break;
			default:
				return false;
		}
	}
	
	function va_view($str)
	{
		include($_SERVER['DOCUMENT_ROOT'] . '/views/admin/content/'.$str);
	}
	
	function vr_view($str,$data=null)
	{
		include($_SERVER['DOCUMENT_ROOT'] . '/views/restor/content/'.$str.'.php');
	}
}
?>