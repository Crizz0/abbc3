<?php
/** 
*
* abbcode [Bulgarian]
* @package language
* @version $Id: abbcode.php, v 1.0.6 2008/01/10 15:25:07 leviatan21 Exp $
* @English version $Id: $ phpBB 3.0.0 - 1.0.2
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb2/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* @translator: alfa - http://www.boinc-bulgaria.net
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
	'BBCODE_STYLES_TIP'			=> '�����: ��������� ���� �� ����� ��������� ��� ������ �����.',
	
	// Dropdown titles options
	'ABBCODE_FONT_TYPE'			=> '��� ����� ',
	'ABBCODE_FONT_SIZE'			=> '������ �� ������',
	'ABBCODE_FONT_HILI'			=> '��������',
	'ABBCODE_FONT_GIANT'		=> '�������',
	
	// Text to be applied to the helpline & mouseover 
	'ABBCODE_JUSTIFY_MOVER'		=> '������������',
	'ABBCODE_JUSTIFY_HELP'		=> ' [align=justify]�����[/align]',

	'ABBCODE_RIGHT_MOVER'		=> '�������� �������',
	'ABBCODE_RIGHT_HELP'		=> ' [align=right]�����[/align]',
	
	'ABBCODE_CENTER_MOVER'		=> '���������',
	'ABBCODE_CENTER_HELP'		=> ' [align=center]�����[/align]',
	
	'ABBCODE_LEFT_MOVER'		=> '�������� ������',
	'ABBCODE_LEFT_HELP'			=> ' [align=left]�����[/align]',
	
	'ABBCODE_PRE_MOVER'			=> '������������� �����',
	'ABBCODE_PRE_HELP'			=> ' [pre]�����[/pre]',
	
	'ABBCODE_SUP_MOVER'			=> '������� ������ ���� ����� ������',
	'ABBCODE_SUP_HELP'			=> ' [sup]text[/sup]',
	
	'ABBCODE_SUB_MOVER'			=> '������� ������ ���� ����� ������',
	'ABBCODE_SUB_HELP'			=> ' [sub]text[/sub]',
	
	'ABBCODE_BOLD_MOVER'		=> '��������',
	'ABBCODE_BOLD_HELP'			=> ' [b]�����[/b]',
	
	'ABBCODE_ITA_MOVER'			=> '��������',
	'ABBCODE_ITA_HELP'			=> ' [i]�����[/i]',
	
	'ABBCODE_UNDER_MOVER'		=> '���������',
	'ABBCODE_UNDER_HELP'		=> ' [u]�����[/u]',
	
	'ABBCODE_STRIKE_MOVER'		=> '���������',
	'ABBCODE_STRIKE_HELP'		=> ' [s]�����[/s]',
	
	'ABBCODE_FADE_MOVER'		=> '���������� �����',
	'ABBCODE_FADE_HELP'			=> ' [fade]�����[/fade]',
	
	'ABBCODE_GRAD_MOVER'		=> '��������',
	'ABBCODE_GRAD_HELP'			=> ' [grad]�����[/grad]',
	
	'ABBCODE_RTL_MOVER'			=> '����� � ��������� �� ����� �� ����',
	'ABBCODE_RTL_HELP'			=> ' [dir=rtl]�����[/dir]',
	
	'ABBCODE_LTR_MOVER'			=> '����� � ��������� �� ���� �� �����',
	'ABBCODE_LTR_HELP'			=> ' [dir=LTR]text[/dir]',
	
	'ABBCODE_MARQD_MOVER'		=> '������� ������',
	'ABBCODE_MARQD_HELP'		=> ' [marq=down]�����[/marq]',
	
	'ABBCODE_MARQU_MOVER'		=> '������� ������',
	'ABBCODE_MARQU_HELP'		=> ' [marq=up]�����[/marq]',
	
	'ABBCODE_MARQR_MOVER'		=> '������� �������',
	'ABBCODE_MARQR_HELP'		=> ' [marq=right]�����[/marq]',
	
	'ABBCODE_MARQL_MOVER'		=> '������� ������',
	'ABBCODE_MARQL_HELP'		=> ' [marq=left]�����[/marq]',
	
	'ABBCODE_TABLE_MOVER'		=> '������ �������',
	'ABBCODE_TABLE_HELP'		=> ' [table=(ccs ����)][tr=(ccs ����)][td=(ccs ����)]�����[/td][/tr][/table]',
	
	'ABBCODE_QUOTE_MOVER'		=> '�����',
	'ABBCODE_QUOTE_HELP'		=> ' [quote]�����[/quote] ��� [quote=\"member\"]�����[/quote]',
	
	'ABBCODE_CODE_MOVER'		=> '���',
	'ABBCODE_CODE_HELP'			=> ' [code]���[/code]',
	
	'ABBCODE_SPOIL_MOVER'		=> '����� �����',
	'ABBCODE_SPOIL_HELP'		=> ' [spoil]�����[/spoil]',
	
	'ABBCODE_ED2K_MOVER'		=> 'eD2K �����',
	'ABBCODE_ED2K_HELP'			=> ' [url]ed2k �����[/url] ��� [url=ed2k �����]ed2k ���[/url]',
	
	'ABBCODE_URL_MOVER'			=> '�������� �����',	
	'ABBCODE_URL_HELP'			=> ' [url]http://...[/url] ��� [url=http://...]��� �� ����[/url]',
	
	'ABBCODE_EMAIL_MOVER'		=> 'Email',
	'ABBCODE_EMAIL_HELP'		=> ' [email]����������@server.com[/email] ��� [email=����������@server.com][/email]',
	
	'ABBCODE_WEB_MOVER'			=> '�������� ���� � ��������',
	'ABBCODE_WEB_HELP'			=> ' [web]���� �����[/web]',

	'ABBCODE_IMG_MOVER'			=> '�������� ������',
	'ABBCODE_IMG_HELP'			=> ' [img]http://...[/img]',

	'ABBCODE_THUMB_MOVER'		=> '������ ���������',
	'ABBCODE_THUMB_HELP'		=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	
	'ABBCODE_IMGSHARK_MOVER'	=> '�������� ������ �� imageshack',
	'ABBCODE_IMGSHARK_HELP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	
	'ABBCODE_FLASH_MOVER'		=> '�������� flash ����',
	'ABBCODE_FLASH_HELP'		=> ' [flash width=# height=#]Flash �����[/flash]',
	
	'ABBCODE_VIDEO_MOVER'		=> '�������� ����',
	'ABBCODE_VIDEO_HELP'		=> ' [video width=# height=#]����� �����[/video]',
	
	'ABBCODE_STREAM_MOVER'		=> '�������� ����',
	'ABBCODE_STREAM_HELP'		=> ' [stream]Stream �����[/stream]',
	
	'ABBCODE_RAM_MOVER'			=> '�������� Real Media',
	'ABBCODE_RAM_HELP'			=> ' [ram]Real Media �����[/ram]',
	
	'ABBCODE_QUICKTIME_MOVER'	=> '������ Quick time',
	'ABBCODE_QUICKTIME_HELP'	=> ' [quicktime width=# height=#]Quick time �����[/quicktime]',

	'ABBCODE_STAGE6_MOVER'		=> '�������� ����� �� Stage6', // �� http://www.stage6.com/
	'ABBCODE_STAGE6_HELP'		=> ' [stage6]Stage6 ID[/stage6]',
	
	'ABBCODE_GVIDEO_MOVER'		=> '�������� ����� �� Google',
	'ABBCODE_GVIDEO_HELP'		=> ' [GVideo]����� �����[/GVideo]',
	
	'ABBCODE_YOUTUBE_MOVER'		=> '�������� ����� �� Youtube',
	'ABBCODE_YOUTUBE_HELP'		=> ' [youtube]����� �����[/youtube]',
	
	'ABBCODE_LISTB_MOVER'		=> '��������� �� �����',
	'ABBCODE_LISTB_HELP'		=> ' [list]�����[/list] ���������: ����������� [*] �� �� ��������� �����',
	
	'ABBCODE_LISTM_MOVER'		=> '��������� ������',
	'ABBCODE_LISTM_HELP'		=> ' [list=1|a]�����[/list] ���������: ����������� [*] �� �� ��������� �����',
	
	'ABBCODE_HR_MOVER'			=> '��������',
	'ABBCODE_HR_HELP'			=> ' [hr] ���������: ������� �������� �� ��������� �����',
	
	'ABBCODE_TEXTC_MOVER'		=> '�������',
	'ABBCODE_TEXTC_HELP'		=> ' [color=red]�����[/color] ���������: ���� �� ���������� html ������� color=#FF0000 ��� color=red',
	
	'ABBCODE_TEXTS_MOVER'		=> '������',
	'ABBCODE_TEXTS_HELP'		=> ' [size=300]������� �����[/size] ���������: ���������� ����� �� ���� �������������� ���� �������',
	
	'ABBCODE_TEXTF_MOVER'		=> '��� �����',
	'ABBCODE_TEXTF_HELP'		=> ' [font=Tahoma]�����[/font]',
	
	'ABBCODE_TEXTH_MOVER'		=> '�������� �����',
	'ABBCODE_TEXTH_HELP'		=> ' [highlight=red]�����[/highlight] ���������: ���� �� ���������� html ������� color=#FF0000 ��� color=red',
	
	'ABBCODE_CUT_MOVER'			=> '�������� �������� �����',
	'ABBCODE_COPY_MOVER'		=> '������� �������� �����',
	'ABBCODE_PASTE_MOVER'		=> '������� �������� �����',
	'ABBCODE_PLAIN_MOVER'		=> '�������� BBCode ��������� �� �������� �����',
	'ABBCODE_PASTE_ERROR'		=> '����, ����� ��������� ����� � ����� �� �������� ',
	'ABBCODE_NOSELECT_ERROR'	=> '����, ����� �������� ����� ',

	// Wizard texts
	'ABBCODE_ERROR'				=> '������ : ',
	'ABBCODE_ERROR_TAG'			=> '���������� ������ ����������� ������ : ',
	
	'ABBCODE_ID'				=> '�������� �������������� :',
	'ABBCODE_NOID'				=> '��� �� ��������� �������������',
	'ABBCODE_LINK'				=> '�������� ����� �� ',
	'ABBCODE_DESC'				=> '�������� �������� �� ',
	'ABBCODE_NAME'				=> '��������',
	'ABBCODE_NOLINK'			=> '�� ��������� ����� �� ',
	'ABBCODE_NODESC'			=> '�� ��������� �������� �� ',
	'ABBCODE_WIDTH'				=> '�������� ��������',
	'ABBCODE_WIDTH_NOTE'		=> '���������: ������� ���� �� ���� �������������� ���� �������',
	'ABBCODE_NOWIDTH'			=> '�� ��������� ����������',
	'ABBCODE_HEIGHT'			=> '�������� �������',
	'ABBCODE_HEIGHT_NOTE'		=> '���������: ������� ���� �� ���� �������������� ���� �������',
	'ABBCODE_NOHEIGHT'			=> '�� ��������� ��������',
	
	'ABBCODE_ED2K_TAG'			=> 'ed2k',
	'ABBCODE_ED2K_NOTE' 		=> '', //'������: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',

	'ABBCODE_URL_TAG'			=> '��������',
	'ABBCODE_URL_NOTE' 			=> '������: http://www.google.com',

	'ABBCODE_WEB_TAG'			=> '����',
	'ABBCODE_WEB_NOTE'			=> '������: http://www.google.com',

	'ABBCODE_EMAIL_TAG'			=> 'email',
	'ABBCODE_EMAIL_NOTE' 		=> '������: ����������@server.com',
	
	'ABBCODE_IMG_TAG'			=> '������',
	'ABBCODE_IMG_NOTE'			=> '������: http://www.google.com/intl/en_com/images/logo_plain.png',
	
	'ABBCODE_THUMB_TAG'			=> '���������',
	'ABBCODE_THUMB_NOTE'		=> '������: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBCODE_FLASH_TAG'			=> 'flash',
	'ABBCODE_FLASH_NOTE'		=> '������: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',
	
	'ABBCODE_VIDEO_TAG'			=> '�����',
	'ABBCODE_VIDEO_NOTE'		=> '', //'������: ???',
	
	'ABBCODE_STREAM_TAG'		=> '����',
	'ABBCODE_STREAM_NOTE'		=> '', //'������: ???',
	
	'ABBCODE_RAM_TAG'			=> 'Real Media',
	'ABBCODE_RAM_NOTE'			=> '', //'������: ???',
	
	'ABBCODE_QUICKTIME_TAG'		=> 'Quick time',
	'ABBCODE_QUICKTIME_NOTE'	=> '������: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',
	
	'ABBCODE_STAGE6_TAG'		=> 'Stage6 �����',
	'ABBCODE_STAGE6_NOTE'		=> '������: 2068715',
	
	'ABBCODE_GVIDEO_TAG'		=> 'Google �����',
	'ABBCODE_GVIDEO_NOTE'		=> '������: http://video.google.com/videoplay?docid=-8351924403384451128',
	
	'ABBCODE_YOUTUBE_TAG'		=> 'Youtube �����',
	'ABBCODE_YOUTUBE_NOTE'		=> '������: http://www.youtube.com/watch?v=aabbcc12',

	'ABBCODE_TABLE_STYLE'		=> '�������� ���� �� �������',
	'ABBCODE_TABLE_NOTE'		=> '������: width:50%;border:1px solid #ccccc;',
	'ABBCODE_ROW_NUMBER'		=> '�������� ����� �� ������',
	'ABBCODE_ROW_ERROR'			=> '�� ��������� ����� �� ������',
	'ABBCODE_ROW_STYLE'			=> '�������� ���� �� ��������',
	'ABBCODE_ROW_NOTE'			=> '������: text-align:center;',
	'ABBCODE_CELL_NUMBER'		=> '�������� ����� �� �������',
	'ABBCODE_CELL_ERROR'		=> '�� ��������� ����� �� �������',
	'ABBCODE_CELL_STYLE'		=> '�������� ���� �� ���������',
	'ABBCODE_CELL_NOTE'			=> '������: border:1px solid #ccccc;',

	'ABBCODE_GRAD_MIN_ERROR'	=> '����, ����� �������� ������ : ',
	'ABBCODE_GRAD_MAX_ERROR'	=> '��������� � ���� ��-����� �� 120 ����� : ',
	
	'SPOILER_SHOW'				=> '������ ������',
	'SPOILER_HIDE'				=> '����� �����',
	
	// Custom bbcodes
	
));

?>