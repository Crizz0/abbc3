<?php
/**
*
* abbcode [Portugu�s Brasil]
* @package language
* @version $Id: abbcode.php, v 1.0.1 2008/01/10 14:55:07 leviatan21 Exp $
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb2/
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: Balero - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=384755
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
	'BBCODE_STYLES_TIP'				=> 'Dica: Estilos podem ser aplicados rapidamente nos textos.',
	
	// Dropdown titles options
	'ABBCODE_FONT_TYPE'				=> 'Tipo da Fonte ',
	'ABBCODE_FONT_SIZE'				=> 'Tamanho da Fonte',
	'ABBCODE_FONT_HILI'				=> 'Destacado',
	'ABBCODE_FONT_GIANT'			=> 'Gigante',
	
	// Text to be applied to the helpline & mouseover
	'ABBCODE_JUSTIFY_MOVER'			=> 'Justificar o texto',
	'ABBCODE_JUSTIFY_HELP'			=> ' [align=justify]texto[/align]',
	'ABBCODE_RIGHT_MOVER'			=> 'Alinhar o texto � direita',
	'ABBCODE_RIGHT_HELP'			=> ' [align=right]texto[/align]',
	'ABBCODE_CENTER_MOVER'			=> 'Alinhar o texto ao centro',
	'ABBCODE_CENTER_HELP'			=> ' [align=center]texto[/align]',
	'ABBCODE_LEFT_MOVER'			=> 'Alinhar o texto � esquerda',
	'ABBCODE_LEFT_HELP'				=> ' [align=left]texto[/align]',
	'ABBCODE_PRE_MOVER'				=> 'Texto pr�-formatado',
	'ABBCODE_PRE_HELP'				=> ' [pre]texto[/pre]',
	'ABBCODE_SUP_MOVER'				=> 'Sobrescrito',
	'ABBCODE_SUP_HELP'				=> ' [sup]texto[/sup]',
	'ABBCODE_SUB_MOVER'				=> 'Subscrito',
	'ABBCODE_SUB_HELP'				=> ' [sub]texto[/sub]',
	'ABBCODE_BOLD_MOVER'			=> 'Negrito',
	'ABBCODE_BOLD_HELP'				=> ' [b]texto[/b]',
	'ABBCODE_ITA_MOVER'				=> 'It�lico',
	'ABBCODE_ITA_HELP'				=> ' [i]texto[/i]',
	'ABBCODE_UNDER_MOVER'			=> 'Sublinhado',
	'ABBCODE_UNDER_HELP'			=> ' [u]texto[/u]',
	'ABBCODE_STRIKE_MOVER'			=> 'Texto riscado',
	'ABBCODE_STRIKE_HELP'			=> ' [s]texto[/s]',
	'ABBCODE_FADE_MOVER'			=> 'Esmaecer texto',
	'ABBCODE_FADE_HELP'				=> ' [fade]texto[/fade]',
	'ABBCODE_GRAD_MOVER'			=> 'Texto em gradiente',
	'ABBCODE_GRAD_HELP'				=> ' [grad]texto[/grad]',
	'ABBCODE_RTL_MOVER'				=> 'Fazer com que a caixa de mensagem fique alinhada da Direita para Esquerda',
	'ABBCODE_RTL_HELP'				=> ' [dir=rtl]texto[/dir]',
	'ABBCODE_LTR_MOVER'				=> 'Fazer com que a caixa de mensagem fique alinhada da Esquerda para Direita',
	'ABBCODE_LTR_HELP'				=> ' [dir=LTR]texto[/dir]',
	'ABBCODE_MARQD_MOVER'			=> 'Mover texto para baixo',
	'ABBCODE_MARQD_HELP'			=> ' [marq=down]texto[/marq]',
	'ABBCODE_MARQU_MOVER'			=> 'Mover texto para cima:',
	'ABBCODE_MARQU_HELP'			=> ' [marq=up]texto[/marq]',
	'ABBCODE_MARQR_MOVER'			=> 'Mover texto para direita',
	'ABBCODE_MARQR_HELP'			=> ' [marq=right]texto[/marq]',
	'ABBCODE_MARQL_MOVER'			=> 'Mover texto para esquerda',
	'ABBCODE_MARQL_HELP'			=> ' [marq=left]texto[/marq]',
	'ABBCODE_TABLE_MOVER'			=> 'Inserir tabela',
	'ABBCODE_TABLE_HELP'			=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]texto[/td][/tr][/table]',
	'ABBCODE_QUOTE_MOVER'			=> 'Citar',
	'ABBCODE_QUOTE_HELP'			=> ' [quote]texto[/quote]',
	'ABBCODE_CODE_MOVER'			=> 'C�digo',
	'ABBCODE_CODE_HELP'				=> ' [code]codigo[/code]',
	'ABBCODE_SPOIL_MOVER'			=> 'Spoilers',
	'ABBCODE_SPOIL_HELP'			=> ' [spoil]texto[/spoil]',
	'ABBCODE_ED2K_MOVER'			=> 'Link eD2K',
	'ABBCODE_ED2K_HELP'				=> ' [url]link ed2k[/url] ou [url=link ed2k]Nome ed2k[/url]',
	'ABBCODE_URL_MOVER'				=> 'Endere�o da web',
	'ABBCODE_URL_HELP'				=> ' [url]http://...[/url] ou [url=http://...]Url da P�gina[/url]',
	'ABBCODE_EMAIL_MOVER'			=> 'Inserir e-mail',
	'ABBCODE_EMAIL_HELP'			=> ' [email]user@server.ext[/email]',
	'ABBCODE_WEB_MOVER'				=> 'Inserir p�ginas da internet no seu post',
	'ABBCODE_WEB_HELP'				=> ' [web]URL web[/web]',
	'ABBCODE_IMG_MOVER'				=> 'Inserir imagem',
	'ABBCODE_IMG_HELP'				=> ' [img]http://...[/img]',
	'ABBCODE_IMGSHARK_MOVER'		=> 'Inserir imagem do imageshack',
	'ABBCODE_IMGSHARK_HELP'			=> ' [url=http://imageshack.us][img=http://...][/img][/url]',
	'ABBCODE_FLASH_MOVER'			=> 'Inserir arquivo em flash',
	'ABBCODE_FLASH_HELP'			=> ' [flash width=# height=#]URL do arquivo em flash[/flash]',
	'ABBCODE_VIDEO_MOVER'			=> 'Inserir v�deo',
	'ABBCODE_VIDEO_HELP'			=> ' [video width=# height=#]URL do v�deo[/video]',
	'ABBCODE_STREAM_MOVER'			=> 'Inserir �udio',
	'ABBCODE_STREAM_HELP'			=> ' [stream]URL do �udio[/stream]',
	'ABBCODE_RAM_MOVER'				=> 'Inserir Real Media',
	'ABBCODE_RAM_HELP'				=> ' [ram]URL do Real Media[/ram]',
	'ABBCODE_STAGE_MOVER'			=> 'Inserir v�deo do Stage6', // de http://www.stage6.com/
	'ABBCODE_STAGE_HELP'			=> ' [stage6]Stage6 ID[/stage6]',
	'ABBCODE_GVIDEO_MOVER'			=> 'Inserir v�deo do Google',
	'ABBCODE_GVIDEO_HELP'			=> ' [GVideo]URL video[/GVideo]',
	'ABBCODE_YOUTUBE_MOVER'			=> 'Inserir v�deo do Youtube',
	'ABBCODE_YOUTUBE_HELP'			=> ' [youtube]URL video[/youtube]',
	'ABBCODE_LISTB_MOVER'			=> 'Lista ordenada',
	'ABBCODE_LISTB_HELP'			=> ' [list]texto[/list] Nota: Use [*] para criar listas .',
	'ABBCODE_LISTM_MOVER'			=> 'Lista numerada',
	'ABBCODE_LISTM_HELP'			=> ' [list=1|a]texto[/list] Nota: Use [*] para listas.',
	'ABBCODE_HR_MOVER'				=> 'Inserir linha de espa�amento',
	'ABBCODE_HR_HELP'				=> ' [hr] Nota: Cria uma linha para separar texto.',
	'ABBCODE_TEXTC_MOVER'			=> 'Cor da fonte',
	'ABBCODE_TEXTC_HELP'			=> ' [color=red]texto[/color] Nota: Voc� pode usar tanto c�digo das cores em HTML color=#FF0000 ou color=red.',
	'ABBCODE_TEXTS_MOVER'			=> 'Tamanho da fonte',
	'ABBCODE_TEXTS_HELP'			=> ' [size=300]texto gigante[/size] Nota: O valor ser� interpretado em percentagem.',
	'ABBCODE_TEXTF_MOVER'			=> 'Tipo da fonte',
	'ABBCODE_TEXTF_HELP'			=> ' [font=Tahoma]texto[/font]',
	'ABBCODE_TEXTH_MOVER'			=> 'Texto destacado',
	'ABBCODE_TEXTH_HELP'			=> ' [highlight=red]texto[/highlight] Nota: Voc� pode usar tanto c�digo das cores em HTML color=#FF0000 ou color=red.',
	'ABBCODE_CUT_MOVER'				=> 'Remove o texto selecionado.',
	'ABBCODE_COPY_MOVER'			=> 'Copia o texto selecionado.',
	'ABBCODE_PASTE_MOVER'			=> 'Cola o texto copiado.',
	'ABBCODE_PLAIN_MOVER'			=> 'Remove todos os BBcodes do texto selecionado.',
	
	// Wizard texts
	'ABBCODE_ERROR'					=> 'Erro : ',
	'ABBCODE_ERROR_TAG'				=> 'Erro inesperado usando a tag : ',

	'ABBCODE_GRAD_MIN_ERROR'		=> 'Por favor, primeiro selecione o texto : ',
	'ABBCODE_GRAD_MAX_ERROR'		=> 'S� � permitido menos que 120 caracteres : ',
	
	'ABBCODE_TABLE_STYLE'			=> 'Coloque o estilo da tabela',
	'ABBCODE_TABLE_NOTE'			=> '\n\n' . 'Exemplo:width:50%;border:1px solid #CCCCCC;',
	'ABBCODE_ROW_NUMBER'			=> 'Colocar n�mero de linhas',
	'ABBCODE_ROW_ERROR'				=> 'Voc� n�o colocou um n�mero de linhas',
	'ABBCODE_ROW_STYLE'				=> 'Coloque o estilo de linha',
	'ABBCODE_ROW_NOTE'				=> '\n\n' . 'Exemplo:border:1px solid #CCCCCC;',
	'ABBCODE_CELL_NUMBER'			=> 'Coloque o n�mero de c�lulas',
	'ABBCODE_CELL_ERROR'			=> 'Voc� n�o colocou um n�mero de c�lulas.',
	'ABBCODE_CELL_STYLE'			=> 'Coloque o estilo de c�lula',
	'ABBCODE_CELL_NOTE'				=> '\n\n' . 'Exemplo:texto-align:center;',
	
	'ABBCODE_ID'					=> 'Coloque o identificador (id) :',
	'ABBCODE_NOID'					=> '\n' . 'Voc� n�o colocou o identificador (id).',
	'ABBCODE_LINK'					=> 'Coloque o link :',
	'ABBCODE_DESC'					=> 'Coloque uma descri��o sobre o link',
	'ABBCODE_NAME'					=> 'Descri��o',
	'ABBCODE_NOLINK'				=> '\n' . 'Voc� n�o colocou o link.',
	'ABBCODE_NODESC'				=> '\n' . 'Voc�  n�o colocou uma descri��o.',
	'ABBCODE_WIDTH'					=> 'Coloque a largura:',
	'ABBCODE_WIDTH_NOTE'			=> '\n\n' . 'Nota: O valor tem que estar em porcentagem.',
	'ABBCODE_NOWIDTH'				=> '\n' . 'Voc� n�o colocou o tamanho da largura.',
	'ABBCODE_HEIGHT'				=> 'Coloque a altura :',
	'ABBCODE_HEIGHT_NOTE'			=> '\n\n' . 'Nota: O valor tem que estar em porcentagem.',
	'ABBCODE_NOHEIGHT'				=> '\n' . 'Voc� n�o colocou o tamanho da altura.',
	
	'ABBCODE_ED2K_TAG'				=> ' links ed2k.',
	'ABBCODE_URL_TAG'				=> ' p�g.',
	'ABBCODE_WEB_TAG'				=> ' web.',
	'ABBCODE_EMAIL_TAG'				=> ' email.',
	'ABBCODE_IMG_TAG'				=> ' imagem.',
	'ABBCODE_FLASH_TAG'				=> ' flash.',
	'ABBCODE_VIDEO_TAG'				=> ' v�deo.',
	'ABBCODE_STREAM_TAG'			=> ' �udio.',
	'ABBCODE_RAM_TAG'				=> ' Real Media.',
	'ABBCODE_STAGE_TAG'				=> ' Stage6.',
	'ABBCODE_GVIDEO_TAG'			=> ' Google V�deo.',
	'ABBCODE_GVIDEO_NOTE'			=> '\n\n' . 'Exemplo: http://video.google.com/videoplay?docid=-8351924403384451128.',
	'ABBCODE_YOUTUBE_TAG'			=> ' Youtube.',
	'ABBCODE_YOUTUBE_NOTE'			=> '\n\n' . 'Exemplo: http://www.youtube.com/watch?v=aabbcc12.',
	
	'SPOILER_SHOW'					=> 'Mostrar Spoiler',
	'SPOILER_HIDE'					=> 'Esconder Spoiler',
	
));

?>