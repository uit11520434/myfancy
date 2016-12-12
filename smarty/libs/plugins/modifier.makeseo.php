<?php
    /**
    * replace special chars in text to make it usable in URL
    * Function replaces special characters in given data by -
    * function is registered as Smarty modifier
    * @param String $SEO_text text to which to apply modifications
    * @return String text suitable for URL
    */
    function smarty_modifier_makeseo($str,$separator = 'dash',$lowercase = TRUE)
    {
//decode html entities
$str = html_entity_decode($str,ENT_QUOTES,'UTF-8');

//make lowercase
$str = mb_strtolower($str, 'UTF-8');

//replace special chars, for UTF8 encoding it needs to be defined as array
$trans = array(
'ơ'=>'o',
'Ơ'=>'o',
'ó'=>'o',
'Ó'=>'o',
'ò'=>'o',
'Ò'=>'o',
'ọ'=>'o',
'Ọ'=>'o',
'ỏ'=>'o',
'Ỏ'=>'o',
'õ'=>'o',
'Õ'=>'o',
'ớ'=>'o',
'Ớ'=>'o',
'ờ'=>'o',
'Ờ'=>'o',
'ợ'=>'o',
'Ợ'=>'o',
'ở'=>'o',
'Ở'=>'o',
'ỡ'=>'o',
'Ỡ'=>'o',
'ô'=>'o',
'Ô'=>'o',
'ố'=>'o',
'Ố'=>'o',
'ồ'=>'o',
'Ồ'=>'o',
'ộ'=>'o',
'Ộ'=>'o',
'ổ'=>'o',
'Ổ'=>'o',
'ỗ'=>'o',
'Ỗ'=>'o',
'ú'=>'u',
'Ú'=>'u',
'ù'=>'u',
'Ù'=>'u',
'ụ'=>'u',
'Ụ'=>'u',
'ủ'=>'u',
'Ủ'=>'u',
'ũ'=>'u',
'Ũ'=>'u',
'ư'=>'u',
'Ư'=>'u',
'ứ'=>'u',
'Ứ'=>'u',
'ừ'=>'u',
'Ừ'=>'u',
'ự'=>'u',
'ữ'=>'u',
'Ự'=>'u',
'ử'=>'u',
'Ử'=>'u',
'ữ'=>'u',
'Ữ'=>'u',
'â'=>'a',
'Â'=>'a',
'á'=>'a',
'Á'=>'a',
'à'=>'a',
'À'=>'a',
'ạ'=>'a',
'Ạ'=>'a',
'ả'=>'a',
'Ả'=>'a',
'ã'=>'a',
'Ã'=>'a',
'ấ'=>'a',
'Ấ'=>'a',
'ầ'=>'a',
'Ầ'=>'a',
'ậ'=>'a',
'ạ'=>'a',
'ò'=>'o',
'Ậ'=>'a',
'ẩ'=>'â',
'Ẩ'=>'a',
'ẫ'=>'a',
'Ẫ'=>'a',
'ă'=>'a',
'Ă'=>'a',
'ắ'=>'a',
'Ắ'=>'a',
'ằ'=>'a',
'Ằ'=>'a',
'ặ'=>'a',
'Ặ'=>'a',
'ẳ'=>'a',
'Ẳ'=>'a',
'ẵ'=>'a',
'Ẵ'=>'a',
'ế'=>'e',
'Ế'=>'e',
'ề'=>'e',
'Ề'=>'e',
'ệ'=>'e',
'Ệ'=>'e',
'ể'=>'e',
'Ể'=>'e',
'ễ'=>'e',
'Ễ'=>'e',
'é'=>'e',
'É'=>'e',
'è'=>'e',
'È'=>'e',
'ẹ'=>'e',
'Ẹ'=>'e',
'ẻ'=>'e',
'Ẻ'=>'e',
'ẽ'=>'e',
'Ẽ'=>'e',
'ê'=>'e',
'Ê'=>'e',
'í'=>'i',
'Í'=>'i',
'ì'=>'i',
'Ì'=>'i',
'ỉ'=>'i',
'Ỉ'=>'i',
'ĩ'=>'i',
'Ĩ'=>'i',
'ị'=>'i',
'Ị'=>'i',
'ý'=>'y',
'Ý'=>'y',
'ỳ'=>'y',
'Ỳ'=>'y',
'ỷ'=>'y',
'Ỷ'=>'y',
'ỹ'=>'y',
'Ỹ'=>'y',
'ỵ'=>'y',
'Ỵ'=>'y',
'đ'=>'d',
'Đ'=>'d',
'['=>'',
']'=>'',
';'=>'',
'^'=>'',
'@'=>'',
'$'=>'',
'>'=>'',
'<'=>'',
'~'=>'',
'{'=>'',
'}'=>'',
'‘'=>'',
'’'=>'',
'…'=>'',
'ẩ'=>'a',
'"'=>'',
'ồ'=>'o',
'ấ'=>'a',
'ớ'=>'o',
'ý'=>'y',
'ậ'=>'a',
'ạ'=>'a',
'ế'=>'e',
'ì'=>'i',
'ả'=>'a',
'*'=>' ',
'ó'=>'o',
'ể'=>'e',
'Ấ'=>'a',
'ậ'=>'a',
'ộ'=>'o',
'à'=>'a',
'ợ'=>'o',
'ệ'=>'e',
'`'=>'',
'&gt;'=>'',
'&lt;'=>'',
'&quot;'=>'',
'&amp;'=>'',
'%'=>'',
'á'=>'a',
'ầ'=>'a',
'|'=>'',
'“'=>'',
'”'=>'',
'–'=>'',
'='=>'',
'ặ'=>'a',
'ờ'=>'o',
'ố'=>'o',
'ắ'=>'a',
'ỳ'=>'y',
'é'=>'e',
'ẹ'=>'e',
'ú'=>'u'
);
$str = strtr($str, $trans);

        if ($separator == 'dash')
        {

            $search     = '_';
            $replace    = '-';

        }else
        {

            $search     = '-';
            $replace    = '_';

        }

        $trans = array(
                        '&\#\d+?;'              => '',
                        '&\S+?;'                => '',
                        '\s+'                   => $replace,
                        $replace.'+'            => $replace,
                        $replace.'$'            => $replace,
                        '^'.$replace            => $replace,
                        '\.+$'                  => ''
                        );

        $str = strip_tags($str);
        $str = preg_replace("#\/#ui",'-',$str);

        foreach ($trans AS $key => $val)
        {

            $str = preg_replace("#".$key."#ui", $val, $str);

        }

        if($lowercase === TRUE)
        {

            $str = mb_strtolower($str,'UTF-8');

        }

        return trim(stripslashes($str));

    }
?>
