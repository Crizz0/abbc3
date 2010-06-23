<?php
/** 
*
* abbcode [Turkish]
* @package language
* @version $Id: abbcode.php, v 1.0.1 2008/01/10 14:55:07 leviatan21 Exp $
* @turkish version $Id: $ phpBB 3.0.0 - 1.0.0
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb2/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: muiketi
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Reference : http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

/**
* NOTE: Most of the language items are used in javascript
* If you want to use quotes or other chars that need escaped, be sure you escape them double 
* (Especially for ', you must use \\\' instead of \'. For " you only need to use \".
*/

/**
* ******************************************************************
* Some characters you may want to copy&paste:
* ******************************************************************
* � - é
* � - è
* � - ê
* � - ë
* � - �
* � - â
* � - ä
* � - î
* � - ï
* � - ò
* � - ô
* � - ù
* � - û
* � - ç
* � = á
* � = �  XX
* � = é
* � = É XX
* � = í
* � = �?
* � = ó
* � = Ó
* � = ú
* � = Ú
* � = ñ
* � = Ñ
* ? = ¿
********************************************************************/

$lang = array_merge($lang, array(
	'BBCODE_STYLES_TIP'				=> 'Kullan�m: Stiller kolayca se�ili metinlere uygulan�r.',
	
	// Dorpdown titles options
	'ABBCODE_FONT_TYPE'				=> 'Yaz� tipi',
	'ABBCODE_FONT_SIZE'				=> 'Yaz� boyutu',
	'ABBCODE_FONT_HILI'				=> 'Yaz� artalan�',
	'ABBCODE_FONT_GIANT'			=> 'Yaz� b�y�kl���',
	
	// Text to be applied to the helpline & mouseover 
	'ABBCODE_JUSTIFY_MOVER'			=> '�ki yana yasla',
	'ABBCODE_JUSTIFY_HELP'			=> ' [align=justify]metin[/align]',
	'ABBCODE_RIGHT_MOVER'			=> 'Sa�a dayal�',
	'ABBCODE_RIGHT_HELP'			=> ' [align=right]metin[/align]',
	'ABBCODE_CENTER_MOVER'			=> 'Ortalanm��',
	'ABBCODE_CENTER_HELP'			=> ' [align=center]metin[/align]',
	'ABBCODE_LEFT_MOVER'			=> 'Sola dayal�',
	'ABBCODE_LEFT_HELP'				=> ' [align=left]metin[/align]',
	'ABBCODE_PRE_MOVER'				=> 'Bi�imlendirilmemi� metin',
	'ABBCODE_PRE_HELP'				=> ' [pre]metin[/pre]',
	'ABBCODE_SUP_MOVER'				=> 'Yaz�y� �st-indis olarak ayarla',
	'ABBCODE_SUP_HELP'				=> ' [sup]metin[/sup]',
	'ABBCODE_SUB_MOVER'				=> 'Yaz�y� alt-indis olarak ayarla',
	'ABBCODE_SUB_HELP'				=> ' [sub]metin[/sub]',
	'ABBCODE_BOLD_MOVER'			=> 'Kal�n yaz�',
	'ABBCODE_BOLD_HELP'				=> ' [b]metin[/b]',
	'ABBCODE_ITA_MOVER'				=> 'E�ik yaz�',
	'ABBCODE_ITA_HELP'				=> ' [i]metin[/i]',
	'ABBCODE_UNDER_MOVER'			=> 'Alt� �izili yaz�',
	'ABBCODE_UNDER_HELP'			=> ' [u]metin[/u]',
	'ABBCODE_STRIKE_MOVER'			=> '�st� �izili yaz�',
	'ABBCODE_STRIKE_HELP'			=> ' [s]metin[/s]',
	'ABBCODE_FADE_MOVER'			=> 'Solukla�an yaz�',
	'ABBCODE_FADE_HELP'				=> ' [fade]metin[/fade]',
	'ABBCODE_GRAD_MOVER'			=> 'Rengarenk yaz�',
	'ABBCODE_GRAD_HELP'				=> ' [grad]metin[/grad]',
	'ABBCODE_RTL_MOVER'				=> 'Sa�dan sola okunan yaz�',
	'ABBCODE_RTL_HELP'				=> ' [dir=rtl]metin[/dir]',
	'ABBCODE_LTR_MOVER'				=> 'Soldan sa�a okunan yaz�',
	'ABBCODE_LTR_HELP'				=> ' [dir=LTR]metin[/dir]',
	'ABBCODE_MARQD_MOVER'			=> 'A�a�� kayan yaz�',
	'ABBCODE_MARQD_HELP'			=> ' [marq=down]metin[/marq]',
	'ABBCODE_MARQU_MOVER'			=> 'Yukar� kayan yaz�',
	'ABBCODE_MARQU_HELP'			=> ' [marq=up]metin[/marq]',
	'ABBCODE_MARQR_MOVER'			=> 'Sa�a kayan yaz�',
	'ABBCODE_MARQR_HELP'			=> ' [marq=right]metin[/marq]',
	'ABBCODE_MARQL_MOVER'			=> 'Sola kayan yaz�',
	'ABBCODE_MARQL_HELP'			=> ' [marq=left]metin[/marq]',
	'ABBCODE_TABLE_MOVER'			=> 'Tablo giriniz',
	'ABBCODE_TABLE_HELP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]metin[/td][/tr][/table]',
	'ABBCODE_QUOTE_MOVER'			=> 'Al�nt�',
	'ABBCODE_QUOTE_HELP'			=> ' [quote]metin[/quote]',
	'ABBCODE_CODE_MOVER'			=> 'Kod',
	'ABBCODE_CODE_HELP'				=> ' [code]kod[/code]',
	'ABBCODE_SPOIL_MOVER'			=> 'Gizli i�erik',
	'ABBCODE_SPOIL_HELP'			=> ' [spoil]metin[/spoil]',
	'ABBCODE_ED2K_MOVER'			=> 'eD2K linki',
	'ABBCODE_ED2K_HELP'				=> ' [url]ed2k linki[/url] veya [url=link ed2k]ed2k g�r�nt�lenecek isim[/url]',
	'ABBCODE_URL_MOVER'				=> 'Web adresi',	
	'ABBCODE_URL_HELP'				=> ' [url]http://...[/url] veya [url=http://...]G�r�nt�lenecek isim[/url]',
	'ABBCODE_EMAIL_MOVER'			=> 'Email',
	'ABBCODE_EMAIL_HELP'			=> ' [email]user@server.ext[/email]',
	'ABBCODE_WEB_MOVER'				=> '�letide g�sterilecek site',
	'ABBCODE_WEB_HELP'				=> ' [web]URL web[/web]',
	'ABBCODE_IMG_MOVER'				=> 'Resim ekle',
	'ABBCODE_IMG_HELP'				=> ' [img]http://...[/img]',
	'ABBCODE_IMGSHARK_MOVER'		=> 'Resim ekle dosyas�n�n imageshack',
	'ABBCODE_IMGSHARK_HELP'			=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBCODE_FLASH_MOVER'			=> 'Flash dosyas� ekle',
	'ABBCODE_FLASH_HELP'			=> ' [flash width=# height=#]Flash dosyas�n�n adresi[/flash]',
	'ABBCODE_VIDEO_MOVER'			=> 'Video ekle',
	'ABBCODE_VIDEO_HELP'			=> ' [video width=# height=#]Video dosyas�n�n adresi[/video]',
	'ABBCODE_STREAM_MOVER'			=> 'Ses ekle',
	'ABBCODE_STREAM_HELP'			=> ' [stream]Ses dosyas�n�n adresi[/stream]',
	'ABBCODE_RAM_MOVER'				=> 'Real Media dosyas� ekle',
	'ABBCODE_RAM_HELP'				=> ' [ram]Real Media dosyas�n�n adresi[/ram]',
	'ABBCODE_STAGE_MOVER'			=> 'Stage6 dan video ekle', // from http://www.stage6.com/
	'ABBCODE_STAGE_HELP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBCODE_GVIDEO_MOVER'			=> 'Google videosu ekle',
	'ABBCODE_GVIDEO_HELP'			=> ' [GVideo]Video dosyas�n�n adresi[/GVideo]',
	'ABBCODE_YOUTUBE_MOVER'			=> 'Youtube videosu ekle',
	'ABBCODE_YOUTUBE_HELP'			=> ' [youtube]Video dosyas�n�n adresi[/youtube]',
	'ABBCODE_LISTB_MOVER'			=> 'S�ras�z liste',
	'ABBCODE_LISTB_HELP'			=> ' [list]metin[/list] Not [*] kullanarak yeni liste ��esi olu�turabilirsiniz.',
	'ABBCODE_LISTM_MOVER'			=> 'S�ral� liste',
	'ABBCODE_LISTM_HELP'			=> ' [list=1|a]metin[/list] Not [*] kullanarak yeni liste ��esi olu�turabilirsiniz.',
	'ABBCODE_HR_MOVER'				=> 'Yatay �izgi',
	'ABBCODE_HR_HELP'				=> ' [hr] Not: Metni ay�rmak i�in yatay bir �izgi olu�turur.',
	'ABBCODE_TEXTC_MOVER'			=> 'Yaz� rengi',
	'ABBCODE_TEXTC_HELP'			=> ' [color=red]metin[/color] Not: Renk de�erini color=#FF0000 veya color=red olrak belirtebilirsiniz.',
	'ABBCODE_TEXTS_MOVER'			=> 'Yaz� boyutu',
	'ABBCODE_TEXTS_HELP'			=> ' [size=300]Yaz� [/size] Not: De�erlery�zde cinsinden al�nacakt�r.',
	'ABBCODE_TEXTF_MOVER'			=> 'Yaz� tipi',
	'ABBCODE_TEXTF_HELP'			=> ' [font=Tahoma]metin[/font]',
	'ABBCODE_TEXTH_MOVER'			=> 'Yaz� artalan�',
	'ABBCODE_TEXTH_HELP'			=> ' [highlight=red]metin[/highlight] Not: Renk de�erini color=#FF0000 veya color=red olrak belirtebilirsiniz.',
	'ABBCODE_CUT_MOVER'				=> 'Se�ili metni sil.',
	'ABBCODE_COPY_MOVER'			=> 'Se�ili metni kopyala.',
	'ABBCODE_PASTE_MOVER'			=> 'Kopyalanan metni yap��t�r.',
	'ABBCODE_PLAIN_MOVER'			=> 'Se�ili metindeki BBCodelar� kald�r.',

	// Wizard texts
	'ABBCODE_ERROR'					=> 'Hata : ',
	'ABBCODE_ERROR_TAG'				=> 'Kod kullan�m�nda beklenmeyen hata : ',
	
	'ABBCODE_GRAD_MIN_ERROR'		=> 'L�tfen �nce metni se�iniz : ',
	'ABBCODE_GRAD_MAX_ERROR'		=> 'Sadece 120 karakter ve alt� : ',
	
	'ABBCODE_TABLE_STYLE'			=> 'Tablo stili' . '\n\n',
	'ABBCODE_TABLE_NOTE'			=> '�rnek: width:50%;border:1px solid #CCCCCC;',
	'ABBCODE_ROW_NUMBER'			=> 'Sat�r say�s�',
	'ABBCODE_ROW_ERROR'				=> 'Sat�r say�s� belirtmediniz',
	'ABBCODE_ROW_STYLE'				=> 'Sat�r stili' . '\n\n',
	'ABBCODE_ROW_NOTE'				=> '�rnek: border:1px solid #CCCCCC;',
	'ABBCODE_CELL_NUMBER'			=> 'H�cre say�s�',
	'ABBCODE_CELL_ERROR'			=> 'H�cre say�s� belirtmediniz.',
	'ABBCODE_CELL_STYLE'			=> 'H�cre stili',
	'ABBCODE_CELL_NOTE'				=> '\n\n' . '�rnek: text-align:center;',
	
	'ABBCODE_ID'					=> 'Tan�mlay�c� giriniz :',
	'ABBCODE_NOID'					=> '\n' . 'Tan�mlay�c�y� belirtmediniz.',
	'ABBCODE_LINK'					=> 'Linki giriniz :',
	'ABBCODE_DESC'					=> 'Link a��klamas�n� giriniz',
	'ABBCODE_NAME'					=> 'A��klama',
	'ABBCODE_NOLINK'				=> '\n' . 'Link belirtmediniz.',
	'ABBCODE_NODESC'				=> '\n' . 'Herhangi bir a��klama belirtmediniz.',
	'ABBCODE_WIDTH'					=> 'Geni�li�i giriniz :',
	'ABBCODE_WIDTH_NOTE'			=> '\n\n' . 'Not: Y�zde cinsinden de�er belirtebilirsiniz.',
	'ABBCODE_NOWIDTH'				=> '\n' . 'Geni�li�i belirtmediniz.',
	'ABBCODE_HEIGHT'				=> 'Y�ksekli�i giriniz :',
	'ABBCODE_HEIGHT_NOTE'			=> '\n\n' . 'Not: Y�zde cinsinden de�er belirtebilirsiniz.',
	'ABBCODE_NOHEIGHT'				=> '\n' . 'Y�ksekli�i belirtmediniz.',
	
	'ABBCODE_ED2K_TAG'				=> ' ed2k linki.',
	'ABBCODE_URL_TAG'				=> ' sayfa.',
	'ABBCODE_WEB_TAG'				=> ' web.',
	'ABBCODE_EMAIL_TAG'				=> ' email.',
	'ABBCODE_IMG_TAG'				=> ' resim.',
	'ABBCODE_FLASH_TAG'				=> ' flash.',
	'ABBCODE_VIDEO_TAG'				=> ' video.',
	'ABBCODE_STREAM_TAG'			=> ' ses.',
	'ABBCODE_RAM_TAG'				=> ' Real Media.',
	'ABBCODE_STAGE_TAG'				=> ' Stage6.',
	'ABBCODE_GVIDEO_TAG'			=> ' Google Video.',
	'ABBCODE_GVIDEO_NOTE'			=> '\n\n' . '�rnek: http://video.google.com/videoplay?docid=-8351924403384451128.',
	'ABBCODE_YOUTUBE_TAG'			=> ' Youtube.',
	'ABBCODE_YOUTUBE_NOTE'			=> '\n\n' . '�rnek: http://www.youtube.com/watch?v=aabbcc12.',

	'SPOILER_SHOW'					=> '��eri�i G�ster',
	'SPOILER_HIDE'					=> '��eri�i Gizle',

));

?>