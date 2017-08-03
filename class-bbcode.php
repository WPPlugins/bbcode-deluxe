<?php class BBCode{
public $use_whitelist=false;
function __construct(){
	if(!function_exists('add_shortcode')) return;
	//Formatting+Style
	add_shortcode('b',array(&$this,'shortcode_bold'));
	add_shortcode('B',array(&$this,'shortcode_bold'));
	add_shortcode('bold',array(&$this,'shortcode_bold'));
	add_shortcode('BOLD',array(&$this,'shortcode_bold'));
	add_shortcode('strong',array(&$this,'shortcode_bold'));
	add_shortcode('STRONG',array(&$this,'shortcode_bold'));
	add_shortcode('center',array(&$this,'shortcode_center'));
	add_shortcode('CENTER',array(&$this,'shortcode_center'));
	add_shortcode('color',array(&$this,'shortcode_color'));
	add_shortcode('COLOR',array(&$this,'shortcode_color'));
	add_shortcode('del',array(&$this,'shortcode_del'));
	add_shortcode('DEL',array(&$this,'shortcode_del'));
	add_shortcode('i',array(&$this,'shortcode_italics'));
	add_shortcode('I',array(&$this,'shortcode_italics'));
	add_shortcode('italic',array(&$this,'shortcode_italics'));
	add_shortcode('ITALIC',array(&$this,'shortcode_italics'));
	add_shortcode('em',array(&$this,'shortcode_italics'));
	add_shortcode('EM',array(&$this,'shortcode_italics'));
	add_shortcode('justify',array(&$this,'shortcode_justify'));
	add_shortcode('JUSTIFY',array(&$this,'shortcode_justify'));
	add_shortcode('left',array(&$this,'shortcode_left'));
	add_shortcode('LEFT',array(&$this,'shortcode_left'));
	add_shortcode('bdo',array(&$this,'shortcode_reverse'));
	add_shortcode('BDO',array(&$this,'shortcode_reverse'));
	add_shortcode('reverse',array(&$this,'shortcode_reverse'));
	add_shortcode('REVERSE',array(&$this,'shortcode_reverse'));
	add_shortcode('right',array(&$this,'shortcode_right'));
	add_shortcode('RIGHT',array(&$this,'shortcode_right'));
	add_shortcode('size',array(&$this,'shortcode_size'));
	add_shortcode('SIZE',array(&$this,'shortcode_size'));
	add_shortcode('s',array(&$this,'shortcode_strikethrough'));
	add_shortcode('S',array(&$this,'shortcode_strikethrough'));
	add_shortcode('strike',array(&$this,'shortcode_strikethrough'));
	add_shortcode('STRIKE',array(&$this,'shortcode_strikethrough'));
	add_shortcode('sub',array(&$this,'shortcode_subscript'));
	add_shortcode('SUB',array(&$this,'shortcode_subscript'));
	add_shortcode('sup',array(&$this,'shortcode_superscript'));
	add_shortcode('SUP',array(&$this,'shortcode_superscript'));
	add_shortcode('u',array(&$this,'shortcode_underline'));
	add_shortcode('U',array(&$this,'shortcode_underline'));
	add_shortcode('underline',array(&$this,'shortcode_underline'));
	add_shortcode('UNDERLINE',array(&$this,'shortcode_underline'));
	//Code and Quotes
	add_shortcode('q',array(&$this,'shortcode_quote'));
	add_shortcode('Q',array(&$this,'shortcode_quote'));
	add_shortcode('quote',array(&$this,'shortcode_quote'));
	add_shortcode('QUOTE',array(&$this,'shortcode_quote'));
	add_shortcode('cite',array(&$this,'shortcode_cite'));
	add_shortcode('CITE',array(&$this,'shortcode_cite'));
	add_shortcode('abbr',array(&$this,'shortcode_abbr'));
	add_shortcode('ABBR',array(&$this,'shortcode_abbr'));
	add_shortcode('acronym',array(&$this,'shortcode_abbr'));
	add_shortcode('ACRONYM',array(&$this,'shortcode_abbr'));
	add_shortcode('code',array(&$this,'shortcode_code'));
	add_shortcode('CODE',array(&$this,'shortcode_code'));
	add_shortcode('kbd',array(&$this,'shortcode_kbd'));
	add_shortcode('KBD',array(&$this,'shortcode_kbd'));
	add_shortcode('key',array(&$this,'shortcode_kbd'));
	add_shortcode('KEY',array(&$this,'shortcode_kbd'));
	add_shortcode('keyboard',array(&$this,'shortcode_kbd'));
	add_shortcode('KEYBOARD',array(&$this,'shortcode_kbd'));
	//Lists and Tables
	add_shortcode('ol',array(&$this,'shortcode_orderedlist'));
	add_shortcode('OL',array(&$this,'shortcode_orderedlist'));
	add_shortcode('ul',array(&$this,'shortcode_unorderedlist'));
	add_shortcode('UL',array(&$this,'shortcode_unorderedlist'));
	add_shortcode('list',array(&$this,'shortcode_unorderedlist'));
	add_shortcode('LIST',array(&$this,'shortcode_unorderedlist'));
	add_shortcode('li',array(&$this,'shortcode_listitem'));
	add_shortcode('LI',array(&$this,'shortcode_listitem'));
	add_shortcode('table',array(&$this,'shortcode_table'));
	add_shortcode('TABLE',array(&$this,'shortcode_table'));
	add_shortcode('thead',array(&$this,'shortcode_thead'));
	add_shortcode('THEAD',array(&$this,'shortcode_thead'));
	add_shortcode('tbody',array(&$this,'shortcode_tbody'));
	add_shortcode('TBODY',array(&$this,'shortcode_tbody'));
	add_shortcode('tfoot',array(&$this,'shortcode_tfoot'));
	add_shortcode('TFOOT',array(&$this,'shortcode_tfoot'));
	add_shortcode('th',array(&$this,'shortcode_th'));
	add_shortcode('TH',array(&$this,'shortcode_th'));
	add_shortcode('tr',array(&$this,'shortcode_tr'));
	add_shortcode('TR',array(&$this,'shortcode_tr'));
	add_shortcode('td',array(&$this,'shortcode_td'));
	add_shortcode('TD',array(&$this,'shortcode_td'));
	//Links and Images
	add_shortcode('email',array(&$this,'shortcode_email'));
	add_shortcode('EMAIL',array(&$this,'shortcode_email'));
	add_shortcode('img',array(&$this,'shortcode_image'));
	add_shortcode('IMG',array(&$this,'shortcode_image'));
	add_shortcode('url',array(&$this,'shortcode_url'));
	add_shortcode('URL',array(&$this,'shortcode_url'));
	add_shortcode('link',array(&$this,'shortcode_url'));
	add_shortcode('LINK',array(&$this,'shortcode_url'));
	//Videos and Audio
	add_shortcode('freesound',array(&$this,'shortcode_freesound'));
	add_shortcode('FREESOUND',array(&$this,'shortcode_freesound'));
	add_shortcode('gvideo',array(&$this,'shortcode_gvideo'));
	add_shortcode('GVIDEO',array(&$this,'shortcode_gvideo'));
	add_shortcode('vimeo',array(&$this,'shortcode_vimeo'));
	add_shortcode('VIMEO',array(&$this,'shortcode_vimeo'));
	add_shortcode('youtube',array(&$this,'shortcode_youtube'));
	add_shortcode('YOUTUBE',array(&$this,'shortcode_youtube'));
	//Misc
	add_shortcode('ip',array(&$this,'shortcode_clientip'));
	add_shortcode('IP',array(&$this,'shortcode_clientip'));
	add_shortcode('hr',array(&$this,'shortcode_hr'));
	add_shortcode('HR',array(&$this,'shortcode_hr'));
	add_shortcode('note',array(&$this,'shortcode_note'));
	add_shortcode('NOTE',array(&$this,'shortcode_note'));
	add_shortcode('useragent',array(&$this,'shortcode_useragent'));
	add_shortcode('USERAGENT',array(&$this,'shortcode_useragent'));
	//Hide and Display Content
	add_shortcode('spoiler',array(&$this,'shortcode_spoiler'));
	add_shortcode('SPOILER',array(&$this,'shortcode_spoiler'));
	add_shortcode('user',array(&$this,'shortcode_user'));
	add_shortcode('USER',array(&$this,'shortcode_user'));
	add_shortcode('guest',array(&$this,'shortcode_guest'));
	add_shortcode('GUEST',array(&$this,'shortcode_guest'));
	if(function_exists('bbp_whitelist_do_shortcode')){
		$this->use_whitelist=true;
	} else {
		$this->use_whitelist=false;
		//Add all shortcodes to -
		add_filter('get_comment_text','do_shortcode',14);//forum topics
		add_filter('bbp_get_reply_content','do_shortcode',14);//forum replies
		//add_filter('bp_get_activity_content_body','do_shortcode', 1);//activity stream
		//add_filter('bp_get_the_topic_post_content','do_shortcode');//group forum posts
		//add_filter('bp_get_the_thread_message_content','do_shortcode');//private messages
	}
}
function do_shortcode($content){
	if(function_exists('bbp_whitelist_do_shortcode')){return bbp_whitelist_do_shortcode($content);}
	else {return do_shortcode($content);}
}
function attributefix($atts=array()){
	if(empty($atts[0])) return $atts;
	if(0!==preg_match('#=("|\')(.*?)("|\')#',$atts[0],$match))
		$atts[0]=$match[2];
	return $atts;
}

//SHORTCODES//
//Formatting+Style
function shortcode_bold($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<strong>'.$this->do_shortcode($content).'</strong>';
}
function shortcode_center($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<span style="text-align:center">'.$this->do_shortcode($content).'</span>';
}
function shortcode_color($atts=array(),$content=NULL){
	if(NULL===$content||''===$atts) return '';
	$attribs=implode('',$atts);
	$color=substr ($attribs, 1);
	if(ctype_xdigit($color))
		$color = '#'.$color;
	return '<span style="color:'.$color.'">'.$this->do_shortcode($content).'</span>';
}
function shortcode_del($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<del>'.$this->do_shortcode($content).'</del>';
}
function shortcode_italics($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<em>'.$this->do_shortcode($content).'</em>';
}
function shortcode_justify($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<span style="text-align:justify">'.$this->do_shortcode($content).'</span>';
}
function shortcode_left($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<span style="text-align:left">'.$this->do_shortcode($content).'</span>';
}
function shortcode_reverse($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<bdo dir="rtl">'.$this->do_shortcode($content).'</bdo>';
}
function shortcode_right($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<span style="text-align:right">'.$this->do_shortcode($content).'</span>';
}
function shortcode_size($atts=array(),$content=NULL){
	if(NULL===$content||''===$atts) return '';
	$attribs = implode('',$atts);
	$subattribs = substr ($attribs, 1);
	return '<span style="font-size:'.$subattribs.'px">'.$this->do_shortcode($content).'</span>';
}
function shortcode_strikethrough($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<s>'.$this->do_shortcode($content).'</s>';
}
function shortcode_subscript($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<sub>'.$this->do_shortcode($content).'</sub>';
}
function shortcode_superscript($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<sup>'.$this->do_shortcode($content).'</sup>';
}
function shortcode_underline($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<span style="text-decoration:underline">'.$this->do_shortcode($content).'</span>';
}

//Code and Quotes
function shortcode_quote($atts=array(),$content=NULL){
	global $bp;global $bbp;
	$css_classes=array('bbcode-quote');
	if(NULL===$content) return '';
	if(empty($atts)){
		return '<div class="'.implode(' ',$css_classes).'"><blockquote>'.$this->do_shortcode($content).'</blockquote></div>';
	} else {
		$name=trim(array_shift($atts),'="');
		$css_classes[]='bbcode-quote-'.$name;
		$user=get_user_by('login',$name);
		if(false!==$user){
			$css_classes[]='bbcode-quote-user';
			if(function_exists('bp_is_active')) $name = '<a href="'.site_url().'/members/'.$user->user_login.'">'.$user->display_name.'</a>';
			elseif ('bbPress'===get_class($bbp)) $name='<a href="'.site_url().'?bbp_user='.$user->ID.'">'.$user->display_name.'</a>';
			else $name=$user->display_name;
		}
		If(''!==$subattribs) return '<div class="'.implode(' ',$css_classes).'"><strong>'.$name.' wrote: </strong><blockquote>'.$this->do_shortcode($content).'</blockquote></div>';
	}
}
function shortcode_cite($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<cite>'.$this->do_shortcode($content).'</cite>';
}
function shortcode_abbr($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	if(!isset($atts['title'])) return '';
	$atts=$this->attributefix($atts);
	return '<abbr title="'.$atts['title'].'">'.$this->do_shortcode($content).'</abbr>';
}
function shortcode_code($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<code>'.$this->do_shortcode($content).'</code>';
}
function shortcode_kbd($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<kbd>'.$this->do_shortcode($content).'</kbd>';
}

//Lists and Tables
function shortcode_orderedlist($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<ol>'.$this->do_shortcode($content).'</ol>';
}
function shortcode_unorderedlist($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<ul>'.$this->do_shortcode($content).'</ul>';
}
function shortcode_listitem($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<li>'.$this->do_shortcode($content).'</li>';
}
function shortcode_table($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<table>'.$this->do_shortcode($content).'</table>';
}
function shortcode_thead($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<thead>'.$this->do_shortcode($content).'</thead>';
}
function shortcode_tbody($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<tbody>'.$this->do_shortcode($content).'</tbody>';
}
function shortcode_tfoot($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<tfoot>'.$this->do_shortcode($content).'</tfoot>';
}
function shortcode_th($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<th>'.$this->do_shortcode($content).'</th>';
}
function shortcode_tr($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<tr>'.$this->do_shortcode($content).'</tr>';
}
function shortcode_td($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<td>'.$this->do_shortcode($content).'</td>';
}

//Links and Images
function shortcode_email($atts=array(),$content=NULL){
	if(empty($atts)){
		//[email]user@www.example.com[/email]
		$url=$content;$text=$content;
	} else {
		//[email=user@www.example.com]text[/email]
		//[email="user@www.example.com"]text[/email]
		$atts=$this->attributefix($atts);
		$url=trim(array_shift($atts),'="');
	}
	if(empty($url)) return '';
	if(empty($text)) $text=$url;
	return '<a href="mailto:'.$url.'">'.$this->do_shortcode($content).'</a>';
}
function shortcode_image($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	$alt='';
	if(!empty($atts))
		$alt=trim(implode(' ',$atts ),'="');
	//[img=alttext]imageurl[/img]
	return '<img src="'.$content.'" alt="'.$alt.'" title="'.$alt.' />';
}
function shortcode_url($atts=array(),$content=NULL){
	if(empty($atts)){
		//[url]http://www.example.com/[/url]
		$url=$content;$text=$content;
	} else {
		//[url=http://www.example.com/]text[/url]
		//[url="http://www.example.com/"]text[/url]
		$atts=$this->attributefix($atts);
		$url=trim(array_shift($atts),'="');
	}
	if(empty($url)) return '';
	if(empty($text)) $text=$url;
	return '<a href="'.$url.'">'.$this->do_shortcode($content).'</a>';
}

//Videos and Audio
function shortcode_freesound($atts=array(),$content=NULL){
	if(''===$content) return 'No Freesound Audio ID Set';
	if(empty($atts)){
		//[freesound]164929[/freesound]
		$size = 'medium';
	} else {
		//[freesound=large]164929[/freesound]
		//[freesound=small]164929[/freesound]
		$size=$this->attributefix($atts);
		$size=trim(array_shift($size),'="');
	}
	$id=$text=$content;
	switch($size){
		case 'big':
		case 'large':
		case 'l':
			return '<iframe frameborder="0" scrolling="no" src="http://www.freesound.org/embed/sound/iframe/'.$id.'/simple/large/" width="920" height="245"></iframe>';
			break;
		case 'little':
		case 'short':
		case 'small':
		case 's':
			return '<iframe frameborder="0" scrolling="no" src="http://www.freesound.org/embed/sound/iframe/'.$id.'/simple/small/" width="375" height="30"></iframe>';
			break;
		case 'mid':
		case 'medium':
		case 'm':
		default:
			return '<iframe frameborder="0" scrolling="no" src="http://www.freesound.org/embed/sound/iframe/'.$id.'/simple/medium/" width="481" height="86"></iframe>';
			break;
	}
}
function shortcode_gvideo($atts=array(),$content=NULL){
	if(''===$content) return 'No Google Video ID Set';
	$id=$text=$content;
	return '<embed style="width:400px;height:325px" id="VideoPlayback" type="application/x-shockwave-flash" src="http://video.google.com/googleplayer.swf?docId='.$id.'&hl=en"></embed>';
}
function shortcode_vimeo($atts=array(),$content=NULL){
	if(''===$content) return 'No Vimeo Video ID Set';
	$id=$content;
	if(!empty($atts)){
		$atts=$this->attributefix($atts);
		$autoplay=($atts['autoplay']==='yes') ? '&amp;autoplay=1' : '';
		$id=(preg_match('~(?:<iframe [^>]*src=")?(?:https?:\/\/(?:[\w]+\.)*vimeo\.com(?:[\/\w]*\/videos?)?\/([0-9]+)[^\s]*)"?(?:[^>]*></iframe>)?(?:<p>.*</p>)?~ix',$atts['url'],$match)) ? $match[1] : false;
		$height=(isset($atts['height'])&&is_numeric($atts['height'])) ? $atts['height'] : '325';
		$width=(isset($atts['width'])&&is_numeric($atts['width'])) ? $atts['width'] : '400';
	}
	return '<iframe width="'.$atts['width'].'" height="'.$atts['height'].'" src="//player.vimeo.com/video/'.$id.'?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff'.$autoplay.'" frameborder="0" allowfullscreen="true"></iframe>';
}
function shortcode_youtube($atts=array(),$content=NULL){
	if(''===$content) return 'No YouTube Video ID Set';
	$id=$content;
	if(!empty($atts)){
		$atts=$this->attributefix($atts);
		$autoplay=($atts['autoplay']==='yes') ? '?autoplay=1' : '';
		$id=(preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',$atts['url'],$match)) ? $match[1] : false;
		$height=(isset($atts['height'])&&is_numeric($atts['height'])) ? $atts['height'] : '325';
		$width=(isset($atts['width'])&&is_numeric($atts['width'])) ? $atts['width'] : '400';
	}
	return '<iframe width="'.$atts['width'].'" height="'.$atts['height'].'" src="http://www.youtube.com/embed/'.$id.$autoplay.'" frameborder="0" allowfullscreen="true"></iframe>';
}

//Misc
function shortcode_clientip($atts=array(),$content=NULL){
	return $_SERVER['REMOTE_ADDR'];
}
function shortcode_hr($atts=array(),$content=NULL){
	return '<hr />';
}
function shortcode_note($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	return '<!--'.$content.'-->';
}
function shortcode_useragent($atts=array(),$content=NULL){
	return $_SERVER['HTTP_USER_AGENT'];
}

//Hide and Display Content
function shortcode_spoiler($atts=array(),$content=NULL){
	if(NULL===$content) return '';
	if(''===$atts) return '<div style="margin:20px;margin-top:5px"><div class="smallfont" style="margin-bottom:2px"><strong>Spoiler: </strong><input type="button" value="Show" style="width:45px;font-size:10px;margin:0px;padding:0px" onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show\'; }"></div><div class="alt2" style="margin: 0px; padding: 6px; border: 1px inset;"><div style="display:none">'. $this->do_shortcode($content) .'</div></div></div>';
	$attribs=implode(" ",$atts);
	$subattribs=substr($attribs, 1);
	return '<div style="margin:20px;margin-top:5px"><div class="smallfont" style="margin-bottom:2px"><strong>Spoiler</strong> for <em>'. $subattribs .'</em> <input type="button" value="Show" style="width:45px;font-size:10px;margin:0px;padding:0px" onClick="if (this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display != \'\') { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'\'; this.innerText = \'\'; this.value = \'Hide\'; } else { this.parentNode.parentNode.getElementsByTagName(\'div\')[1].getElementsByTagName(\'div\')[0].style.display = \'none\'; this.innerText = \'\'; this.value = \'Show\'; }"></div><div class="alt2" style="margin: 0px; padding: 6px; border: 1px inset;"><div style="display:none">'. $this->do_shortcode($content) .'</div></div></div>';
}
function shortcode_guest($atts=array(),$content=NULL){
	if(NULL===$content || is_user_logged_in()) return '';
	return '<div>'.$this->do_shortcode($content).'</div>';
}
function shortcode_user($atts=array(),$content=NULL){
	if(NULL===$content || !is_user_logged_in()) return '';
	return '<div>'.$this->do_shortcode($content).'</div>';
}
}
?>
