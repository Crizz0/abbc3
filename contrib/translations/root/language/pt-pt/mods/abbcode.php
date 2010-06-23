<?php
/**
*
* abbcode [Portugu�s Portugu�s]
* @package language
* @version $Id: abbcode.php, v 1.0.6 2008/01/10 15:25:07 leviatan21 Exp $
* @Vers�o portugu�sa $Id: $ phpBB 3.0.0 - 1.0.2
* @copyright leviatan21 < info@mssti.com > (Gabriel) http://www.mssti.com/phpbb2/
* @Li�en�a http://opensource.org/licenses/gpl-license.php GNU Public License
* @tradutor: electric - http://www.phpbb.com/community/memberlist.php?mode=viewprofile&u=384755
* 
*/

/**
* N�O MUDAR
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DESENVOLVEDORE OBSERVE
//
// Todos os arquivos devem utilizar linguagem UTF-8 como sua codifica��o e os arquivos n�o devem conter uma BOM.
//
// Local titulares agora pode conter fim informa��o, por exemplo, Em vez de
// 'P�gina% s de% s' voc� pode (e deve) escrever' P�gina% 1 $ s de% 2 $ s', isso permite
// Reordenar a sa�da dos dados, assegurando ao mesmo tempo que continua correcta
//
// Voc� n�o precisa ter esse �nico lugar onde os titulares s�o utilizados, por exemplo, 'Mensagem% d' esta bom
// Igualmente quando uma string cont�m apenas dois titulares lugar, que s�o usados para quebrar texto
// Num url novamente voc� n�o precisa especificar uma ordem por exemplo, 'Clique% sHERE% s'  esta bom
//
// Referencia: http://www.phpbb.com/mods/documentation/phpbb-documentation/language/index.php#lang-use-php

/**
* NOTa: A maioria dos itens s�o usados na linguagem javascript
* se voc� quiser usar aspas ou outros caracteres que necessitam de escape, certifique-se de que lhes escape duplo
* (Especialmente para ', voc� deve usar \\\' em vez de \'. For " apenas precisa de usar \".
*/

/**
* ******************************************************************
* alguns caracteres que voc� pode querer copiar & colar:
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
	'BBCODE_STYLES_TIP'			=> 'Nota: Estilos podem ser aplicados rapidamente nos textos',
	
	// Dropdown titles options
	'ABBCODE_FONT_TYPE'			=> 'Tipo da Fonte ',
	'ABBCODE_FONT_SIZE'			=> 'Tamanho da Fonte',
	'ABBCODE_FONT_HILI'			=> 'Destacado',
	'ABBCODE_FONT_GIANT'		=> 'Enorme',
	
	// Text to be applied to the helpline & mouseover
	'ABBCODE_JUSTIFY_MOVER'		=> 'Justificar o texto',
	'ABBCODE_JUSTIFY_HELP'		=> ' [align=justify]texto[/align]',

	'ABBCODE_RIGHT_MOVER'		=> 'Alinhar o texto � direita',
	'ABBCODE_RIGHT_HELP'		=> ' [align=right]texto[/align]',

	'ABBCODE_CENTER_MOVER'		=> 'Alinhar o texto ao centro',
	'ABBCODE_CENTER_HELP'		=> ' [align=center]texto[/align]',

	'ABBCODE_LEFT_MOVER'		=> 'Alinhar o texto � esquerda',
	'ABBCODE_LEFT_HELP'			=> ' [align=left]texto[/align]',

	'ABBCODE_PRE_MOVER'			=> 'Texto pr�-formatado',
	'ABBCODE_PRE_HELP'			=> ' [pre]texto[/pre]',

	'ABBCODE_SUP_MOVER'			=> 'Sobrescrito',
	'ABBCODE_SUP_HELP'			=> ' [sup]texto[/sup]',

	'ABBCODE_SUB_MOVER'			=> 'Subscrito',
	'ABBCODE_SUB_HELP'			=> ' [sub]texto[/sub]',

	'ABBCODE_BOLD_MOVER'		=> 'Negrito',
	'ABBCODE_BOLD_HELP'			=> ' [b]texto[/b]',

	'ABBCODE_ITA_MOVER'			=> 'It�lico',
	'ABBCODE_ITA_HELP'			=> ' [i]texto[/i]',

	'ABBCODE_UNDER_MOVER'		=> 'Sublinhado',
	'ABBCODE_UNDER_HELP'		=> ' [u]texto[/u]',

	'ABBCODE_STRIKE_MOVER'		=> 'Texto riscado',
	'ABBCODE_STRIKE_HELP'		=> ' [s]texto[/s]',

	'ABBCODE_FADE_MOVER'		=> 'Esmaecer texto',
	'ABBCODE_FADE_HELP'			=> ' [fade]texto[/fade]',

	'ABBCODE_GRAD_MOVER'		=> 'Texto em gradiente',
	'ABBCODE_GRAD_HELP'			=> ' [grad]texto[/grad]',

	'ABBCODE_RTL_MOVER'			=> 'Fazer com que a caixa de mensagem fique alinhada da Direita para Esquerda',
	'ABBCODE_RTL_HELP'			=> ' [dir=rtl]texto[/dir]',

	'ABBCODE_LTR_MOVER'			=> 'Fazer com que a caixa de mensagem fique alinhada da Esquerda para Direita',
	'ABBCODE_LTR_HELP'			=> ' [dir=LTR]texto[/dir]',

	'ABBCODE_MARQD_MOVER'		=> 'Mover texto para baixo',
	'ABBCODE_MARQD_HELP'		=> ' [marq=down]texto[/marq]',

	'ABBCODE_MARQU_MOVER'		=> 'Mover texto para cima:',
	'ABBCODE_MARQU_HELP'		=> ' [marq=up]texto[/marq]',

	'ABBCODE_MARQR_MOVER'		=> 'Mover texto para direita',
	'ABBCODE_MARQR_HELP'		=> ' [marq=right]texto[/marq]',

	'ABBCODE_MARQL_MOVER'		=> 'Mover texto para esquerda',
	'ABBCODE_MARQL_HELP'		=> ' [marq=left]texto[/marq]',

	'ABBCODE_TABLE_MOVER'		=> 'Inserir tabela',
	'ABBCODE_TABLE_HELP'		=> ' [table=(ccs style)][tr=(ccs style)][td=(ccs style)]texto[/td][/tr][/table]',

	'ABBCODE_QUOTE_MOVER'		=> 'Citar',
	'ABBCODE_QUOTE_HELP'		=> ' [quote]texto[/quote] ou [quote=\"membro\"]texto[/quote]',

	'ABBCODE_CODE_MOVER'		=> 'C�digo',
	'ABBCODE_CODE_HELP'			=> ' [code]c�digo[/code]',

	'ABBCODE_SPOIL_MOVER'		=> 'Spoilers',
	'ABBCODE_SPOIL_HELP'		=> ' [spoil]texto[/spoil]',

	'ABBCODE_ED2K_MOVER'		=> 'Link eD2K',
	'ABBCODE_ED2K_HELP'			=> ' [url]link ed2k[/url] ou [url=link ed2k]Nome ed2k[/url]',

	'ABBCODE_URL_MOVER'			=> 'Endere�o da web',
	'ABBCODE_URL_HELP'			=> ' [url]http://...[/url] ou [url=http://...]Url da P�gina[/url]',

	'ABBCODE_EMAIL_MOVER'		=> 'Inserir e-mail',
	'ABBCODE_EMAIL_HELP'		=> ' [email]user@server.ext[/email] ou [email=user@server.ext]Meu e-mail[/email]',

	'ABBCODE_WEB_MOVER'			=> 'Inserir p�ginas da internet no seu post',
	'ABBCODE_WEB_HELP'			=> ' [web]URL web[/web]',

	'ABBCODE_IMG_MOVER'			=> 'Inserir imagem',
	'ABBCODE_IMG_HELP'			=> ' [img]http://...[/img]',

	'ABBCODE_THUMB_MOVER'		=> 'Inserir miniatura',
	'ABBCODE_THUMB_HELP'		=> ' [thumbnail(=left|right)]http://...[/thumbnail]',
	
	'ABBCODE_IMGSHARK_MOVER'	=> 'Inserir imagem do imageshack',
	'ABBCODE_IMGSHARK_HELP'		=> ' [url=http://imageshack.us][img=http://...][/img][/url]',

	'ABBCODE_FLASH_MOVER'		=> 'Inserir arquivo em flash',
	'ABBCODE_FLASH_HELP'		=> ' [flash width=# height=#]URL do arquivo em flash[/flash]',

	'ABBCODE_VIDEO_MOVER'		=> 'Inserir v�deo',
	'ABBCODE_VIDEO_HELP'		=> ' [video width=# height=#]URL do v�deo[/video]',

	'ABBCODE_STREAM_MOVER'		=> 'Inserir �udio',
	'ABBCODE_STREAM_HELP'		=> ' [stream]URL do �udio[/stream]',

	'ABBCODE_RAM_MOVER'			=> 'Inserir Real Media',
	'ABBCODE_RAM_HELP'			=> ' [ram]URL do Real Media[/ram]',

	'ABBCODE_QUICKTIME_MOVER'	=> 'Inserir Quick time',
	'ABBCODE_QUICKTIME_HELP'	=> ' [quicktime width=# height=#]URL Quick time[/quicktime]',
	
	'ABBCODE_STAGE6_MOVER'		=> 'Inserir v�deo do Stage6', // de http://www.stage6.com/
	'ABBCODE_STAGE6_HELP'		=> ' [stage6]Stage6 ID[/stage6]',

	'ABBCODE_GVIDEO_MOVER'		=> 'Inserir v�deo do Google',
	'ABBCODE_GVIDEO_HELP'		=> ' [GVideo]URL video[/GVideo]',

	'ABBCODE_YOUTUBE_MOVER'		=> 'Inserir v�deo do Youtube',
	'ABBCODE_YOUTUBE_HELP'		=> ' [youtube]URL video[/youtube]',

	'ABBCODE_LISTB_MOVER'		=> 'Lista ordenada',
	'ABBCODE_LISTB_HELP'		=> ' [list]texto[/list] Nota: Use [*] para criar listas ',

	'ABBCODE_LISTM_MOVER'		=> 'Lista numerada',
	'ABBCODE_LISTM_HELP'		=> ' [list=1|a]texto[/list] Nota: Use [*] para listas',

	'ABBCODE_HR_MOVER'			=> 'Inserir linha de espa�amento',
	'ABBCODE_HR_HELP'			=> ' [hr] Nota: Cria uma linha para separar texto',

	'ABBCODE_TEXTC_MOVER'		=> 'Cor da fonte',
	'ABBCODE_TEXTC_HELP'		=> ' [color=red]texto[/color] Nota: Voc� pode usar tanto c�digo das cores em HTML (color=#FF0000 ou color=red)',

	'ABBCODE_TEXTS_MOVER'		=> 'Tamanho da fonte',
	'ABBCODE_TEXTS_HELP'		=> ' [size=300]texto gigante[/size] Nota: O valor ser� interpretado em percentagem',

	'ABBCODE_TEXTF_MOVER'		=> 'Tipo da fonte',
	'ABBCODE_TEXTF_HELP'		=> ' [font=Tahoma]texto[/font]',

	'ABBCODE_TEXTH_MOVER'		=> 'Texto destacado',
	'ABBCODE_TEXTH_HELP'		=> ' [highlight=red]texto[/highlight] Nota: Voc� pode usar tanto c�digo das cores em HTML color=#FF0000 ou color=red',

	'ABBCODE_CUT_MOVER'			=> 'Remove o texto selecionado',
	'ABBCODE_COPY_MOVER'		=> 'Copia o texto selecionado',
	'ABBCODE_PASTE_MOVER'		=> 'Cola o texto copiado',
	'ABBCODE_PLAIN_MOVER'		=> 'Remove todos os BBcodes do texto selecionado',
	'ABBCODE_PASTE_ERROR'		=> 'Por favor, Primeiro copiar o texto, e depois cole-o',
	'ABBCODE_NOSELECT_ERROR'	=> 'Por favor, selecione primeiro o texto',
	
	// Wizard texts
	'ABBCODE_ERROR'				=> 'Erro : ',
	'ABBCODE_ERROR_TAG'			=> 'Erro inesperado ao usar a tag : ',

	'ABBCODE_ID'				=> 'Coloque o identificador (id) :',
	'ABBCODE_NOID'				=> 'Voc� n�o colocou o identificador (id) do ',
	'ABBCODE_LINK'				=> 'Coloque o link do ',
	'ABBCODE_DESC'				=> 'Coloque uma descri��o sobre o link do ',
	'ABBCODE_NAME'				=> 'Descri��o',
	'ABBCODE_NOLINK'			=> 'Voc� n�o colocou o link do ',
	'ABBCODE_NODESC'			=> 'Voc�  n�o colocou uma descri��o do ',
	'ABBCODE_WIDTH'				=> 'Coloque a largura',
	'ABBCODE_WIDTH_NOTE'		=> 'Nota: O valor tem que estar em porcentagem',
	'ABBCODE_NOWIDTH'			=> 'Voc� n�o colocou o tamanho da largura',
	'ABBCODE_HEIGHT'			=> 'Coloque a altura',
	'ABBCODE_HEIGHT_NOTE'		=> 'Nota: O valor tem que estar em porcentagem',
	'ABBCODE_NOHEIGHT'			=> 'Voc� n�o colocou o tamanho da altura',
	
	'ABBCODE_ED2K_TAG'			=> 'ed2k',
	'ABBCODE_ED2K_NOTE' 		=> '', //'Exemplo: ed2k://|file|Robin.Hood.S02E01.Sisterhood.HDTV.XviD-BiA.avi|367335424|6EB031138DE4A80997A13C272760202F|h=CJZXHKH25ZONIMWVUOENVQKJSZDV5JI6|/',

	'ABBCODE_URL_TAG'			=> 'p�g',
	'ABBCODE_URL_NOTE' 			=> 'Exemplo: http://www.google.com',

	'ABBCODE_WEB_TAG'			=> 'web',
	'ABBCODE_WEB_NOTE'			=> 'Exemplo: http://www.google.com',

	'ABBCODE_EMAIL_TAG'			=> 'email',
	'ABBCODE_EMAIL_NOTE' 		=> 'Exemplo: user@server.ext',

	'ABBCODE_IMG_TAG'			=> 'imagem',
	'ABBCODE_IMG_NOTE'			=> 'Exemplo: http://www.google.com/intl/en_com/images/logo_plain.png',

	'ABBCODE_THUMB_TAG'			=> 'thumbnail',
	'ABBCODE_THUMB_NOTE'		=> 'Exemplo: http://www.google.com/intl/en_com/images/logo_plain.png',
	
	'ABBCODE_FLASH_TAG'			=> 'flash',
	'ABBCODE_FLASH_NOTE'		=> 'Exemplo: http://www.adobe.com/support/flash/ts/documents/test_version/version.swf',

	'ABBCODE_VIDEO_TAG'			=> 'v�deo',
	'ABBCODE_VIDEO_NOTE'		=> '', //'Exemplo: ???',

	'ABBCODE_STREAM_TAG'		=> '�udio',
	'ABBCODE_STREAM_NOTE'		=> '', //'Exemplo: ???',

	'ABBCODE_RAM_TAG'			=> 'Real Media',
	'ABBCODE_RAM_NOTE'			=> '', //'Exemplo: ???',

	'ABBCODE_QUICKTIME_TAG'		=> 'Quick time',
	'ABBCODE_QUICKTIME_NOTE'	=> 'Example: http://www.nature.com/neuro/journal/v3/n3/extref/Li_control.mov.qt' . '<br/>' .'http://www.carnivalmidways.com/images/Music/thisisatest.mp3',

	'ABBCODE_STAGE6_TAG'		=> 'Stage6 V�deo',
	'ABBCODE_STAGE6_NOTE'		=> 'Exemplo: 2068715',

	'ABBCODE_GVIDEO_TAG'		=> 'Google V�deo',
	'ABBCODE_GVIDEO_NOTE'		=> 'Exemplo: http://video.google.com/videoplay?docid=-8351924403384451128',

	'ABBCODE_YOUTUBE_TAG'		=> 'Youtube V�deo',
	'ABBCODE_YOUTUBE_NOTE'		=> 'Exemplo: http://www.youtube.com/watch?v=aabbcc12',
	
	'ABBCODE_TABLE_STYLE'		=> 'Coloque o estilo da tabela',
	'ABBCODE_TABLE_NOTE'		=> 'Exemplo: width:50%;border:1px solid #cccccc;',
	'ABBCODE_ROW_NUMBER'		=> 'Colocar n�mero de linhas',
	'ABBCODE_ROW_ERROR'			=> 'Voc� n�o colocou o n�mero da linhas',
	'ABBCODE_ROW_STYLE'			=> 'Coloque o estilo da linha',
	'ABBCODE_ROW_NOTE'			=> 'Exemplo: texto-align:center;',
	'ABBCODE_CELL_NUMBER'		=> 'Coloque o n�mero da c�lulas',
	'ABBCODE_CELL_ERROR'		=> 'Voc� n�o colocou o n�mero da c�lulas',
	'ABBCODE_CELL_STYLE'		=> 'Coloque o estilo da c�lula',
	'ABBCODE_CELL_NOTE'			=> 'Exemplo: border:1px solid #cccccc;',
	
	'ABBCODE_GRAD_MIN_ERROR'	=> 'Por favor, primeiro selecione o texto : ',
	'ABBCODE_GRAD_MAX_ERROR'	=> 'S� � permitido menos de 120 caracteres : ',
	
	'SPOILER_SHOW'				=> 'Mostrar Spoiler',
	'SPOILER_HIDE'				=> 'Esconder Spoiler',
	
	// Custom bbcodes

));

?>