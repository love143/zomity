<?php 
global $base_url;

function baystreet_preprocess_html(&$variables) {
	drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic', array('type' => 'external'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900', array('type' => 'external'));
	
	
	drupal_add_css(base_path().path_to_theme().'/css/reset.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/css/style.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/css/font-awesome/css/font-awesome.min.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/css/responsive-leyouts.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/js/mainmenu/sticky.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/js/mainmenu/bootstrap.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/js/mainmenu/fhmm.css', array('type' => 'external'));
	
	drupal_add_css(base_path().path_to_theme().'/js/cubeportfolio/cubeportfolio.min.css', array('type' => 'external'));
	
	//tabs
	drupal_add_css(base_path().path_to_theme().'/js/tabs/assets/css/responsive-tabs.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/js/tabs/assets/css/responsive-tabs2.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/js/tabs/assets/css/responsive-tabs3.css', array('type' => 'external'));
	
	//carousel
	drupal_add_css(base_path().path_to_theme().'/js/carousel/flexslider.css', array('type' => 'external'));
	drupal_add_css(base_path().path_to_theme().'/js/carousel/skin.css', array('type' => 'external'));
	
	//accordion
	drupal_add_css(base_path().path_to_theme().'/js/accordion/accordion.css', array('type' => 'external'));
	
	//progressbar
	drupal_add_css(base_path().path_to_theme().'/js/progressbar/ui.progress-bar.css', array('type' => 'external'));
	
	//Lightbox
	drupal_add_css(base_path().path_to_theme().'/js/lightbox/jquery.fancybox.css', array('type' => 'external'));
	
	
	drupal_add_css(base_path().path_to_theme().'/css/update.css', array('type' => 'external'));

	//JS Footer
	
	drupal_add_js(base_path().path_to_theme().'/js/universal/jquery.js', array('type' => 'file', 'scope' => 'footer'));
	//style switcher
	drupal_add_js(base_path().path_to_theme().'/js/style-switcher/jquery-1.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/style-switcher/styleselector.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_css(base_path().path_to_theme().'/js/style-switcher/color-switcher.css', array('type' => 'external'));
	
	
	
	//jquery jcarousel
	drupal_add_js(base_path().path_to_theme().'/js/carousel/jquery.jcarousel.min.js', array('type' => 'file', 'scope' => 'footer'));
	//scroll up
	drupal_add_js(base_path().path_to_theme().'/js/scrolltotop/totop.js', array('type' => 'file', 'scope' => 'footer'));
	//tabs
	drupal_add_js(base_path().path_to_theme().'/js/tabs/assets/js/responsive-tabs.min.js', array('type' => 'file', 'scope' => 'footer'));
	
	//accordion
	drupal_add_js(base_path().path_to_theme().'/js/accordion/custom.js', array('type' => 'file', 'scope' => 'footer'));
	//sticky menu
	drupal_add_js(base_path().path_to_theme().'/js/mainmenu/sticky.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/mainmenu/modernizr.custom.75180.js', array('type' => 'file', 'scope' => 'footer'));
	//cubeportfolio
	drupal_add_js(base_path().path_to_theme().'/js/cubeportfolio/jquery.cubeportfolio.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/cubeportfolio/main.js', array('type' => 'file', 'scope' => 'footer'));
	
	//carousel
	drupal_add_js(base_path().path_to_theme().'/js/carousel/jquery.flexslider.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/carousel/custom.js', array('type' => 'file', 'scope' => 'footer'));
	
	//lightbox
	drupal_add_js(base_path().path_to_theme().'/js/lightbox/jquery.fancybox.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/lightbox/custom.js', array('type' => 'file', 'scope' => 'footer'));
	
	
	
	//update drupalet
	drupal_add_js(base_path().path_to_theme().'/js/update.js', array('type' => 'file', 'scope' => 'footer'));
	
	//mega menu
	drupal_add_js(base_path().path_to_theme().'/js/mainmenu/bootstrap.min.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/mainmenu/fhmm.js', array('type' => 'file', 'scope' => 'footer'));
	drupal_add_js(base_path().path_to_theme().'/js/mainmenu/main.js', array('type' => 'file', 'scope' => 'footer'));
	
	//Flick
	drupal_add_js(base_path().path_to_theme().'/js/jflickrfeed.js', array('type' => 'file', 'scope' => 'footer'));
}


// Add css skin
$setting_skin = theme_get_setting('built_in_skins', 'baystreet');
if(!empty($setting_skin)){
	$skin_color = '/css/colors/'.$setting_skin;
}else{
	$skin_color = '/css/colors/default.css';
}
$css_skin = array(
	'#tag' => 'link', // The #tag is the html tag - <link />
	'#attributes' => array( // Set up an array of attributes inside the tag
	'href' => $base_url.'/'.path_to_theme().$skin_color, 
	'rel' => 'stylesheet',
	'type' => 'text/css',
	'id' => 'skin',
	'data-baseurl'=>$base_url.'/'.path_to_theme()
	),
	'#weight' => 1,
);
drupal_add_html_head($css_skin, 'skin');


function baystreet_form_comment_form_alter(&$form, &$form_state) {
  $form['comment_body']['#after_build'][] = 'baystreet_customize_comment_form';
}

function baystreet_customize_comment_form(&$form) {
  $form[LANGUAGE_NONE][0]['format']['#access'] = FALSE;
  return $form;
}

function baystreet_preprocess_page(&$vars) {
	
	if (isset($vars['node'])) {  
		$vars['theme_hook_suggestions'][] = 'page__'. $vars['node']->type;
	}
	
	//404 page
	$status = drupal_get_http_header("status");  
	if($status == "404 Not Found") {      
		$vars['theme_hook_suggestions'][] = 'page__404';
	}
	if (isset($vars['node'])) :
        if($vars['node']->type == 'page'):
            $node = node_load($vars['node']->nid);
            $output = field_view_field('node', $node, 'field_show_page_title', array('label' => 'hidden'));
            $vars['field_show_page_title'] = $output;
			//sidebar
			$output = field_view_field('node', $node, 'field_sidebar', array('label' => 'hidden'));
            $vars['field_sidebar'] = $output;
        endif;
    endif;
}


// Remove superfish css files.
function baystreet_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
	
//	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
}

function baystreet_form_alter(&$form, &$form_state, $form_id) {
	if ($form_id == 'search_block_form') {
		$form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
		$form['search_block_form']['#default_value'] = t('Search'); // Set a default value for the textfield
		$form['search_block_form']['#attributes']['id'] = array("mod-search-searchword");
		//disabled submit button
		//unset($form['actions']['submit']);
		unset($form['search_block_form']['#title']);
		$form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
		$form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
	}
	if($form_id == 'contact_site_form'){
		$form['mail']['#attributes']['class'] = array("input-contact-form");
		$form['name']['#attributes']['class'] = array("input-contact-form");
		$form['subject']['#attributes']['class'] = array("input-contact-form");
		$form['message']['#attributes']['class'] = array("message-contact-form");
		$form['actions']['submit']['#attributes']['class'] = array('btn btn-success contact-form-button'); 
	}
	if ($form_id == 'comment_form') {
		$form['comment_filter']['format'] = array(); // nuke wysiwyg from comments
	}
}
function baystreet_textarea($variables) {
  $element = $variables['element'];
  $element['#attributes']['name'] = $element['#name'];
  $element['#attributes']['id'] = $element['#id'];
  $element['#attributes']['cols'] = $element['#cols'];
  $element['#attributes']['rows'] = $element['#rows'];
  _form_set_class($element, array('form-textarea'));

  $wrapper_attributes = array(
    'class' => array('form-textarea-wrapper'),
  );

  // Add resizable behavior.
  if (!empty($element['#resizable'])) {
    $wrapper_attributes['class'][] = 'resizable';
  }

  $output = '<div' . drupal_attributes($wrapper_attributes) . '>';
  $output .= '<textarea' . drupal_attributes($element['#attributes']) . '>' . check_plain($element['#value']) . '</textarea>';
  $output .= '</div>';
  return $output;
}
function baystreet_breadcrumb($variables) {
	$crumbs ='';
	$breadcrumb = $variables['breadcrumb'];
	if (!empty($breadcrumb)) {
		
		/*foreach($breadcrumb as $value) {
			$crumbs .= '&nbsp;'.$value.' <i>/</i>';
		} */
	    $breadcrumb[] = drupal_get_title();
	    $output = '' . implode(' » ', $breadcrumb) . '';
	    return $output;
	    //return $crumbs;
	}else{
		return NULL;
	}
}
//custom main menu
function baystreet_menu_tree__main_menu($variables) {
	$str = '';
	$str .= '<ul class="nav navbar-nav">';
		$str .= $variables['tree'];
	$str .= '</ul>';
	
	return $str;
}
function hook_preprocess_page(&$variables) {
       if (arg(0) == 'node' && is_numeric($nid)) {
    if (isset($variables['page']['content']['system_main']['nodes'][$nid])) {
      $variables['node_content'] =& $variables['page']['content']['system_main']['nodes'][$nid];
      if (empty($variables['node_content']['field_show_page_title'])) {
        $variables['node_content']['field_show_page_title'] = NULL;
      }
    }
  }
}
