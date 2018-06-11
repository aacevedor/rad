<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 * 
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function adaptivetheme_subtheme_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.
  
  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
/* -- Delete this line if you want to use this function
function adaptivetheme_subtheme_process_html(&$vars) {
}
// */


/**
 * Override or insert variables for the page templates.
 */
/* -- Delete this line if you want to use these functions
function adaptivetheme_subtheme_preprocess_page(&$vars) {
}
function adaptivetheme_subtheme_process_page(&$vars) {
}
// */


/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function adaptivetheme_subtheme_preprocess_node(&$vars) {
}
function adaptivetheme_subtheme_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function adaptivetheme_subtheme_preprocess_comment(&$vars) {
}
function adaptivetheme_subtheme_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function rad_preprocess_block(&$vars) {
}
function rad_process_block(&$vars) {
}
// */
function rad_preprocess_page(&$vars, $hook) {
	if ((arg(0) == 'node')) {
		$current_node = node_load(arg(1));
		$node_id = arg(1);
		$current_node_type = '';
		if( $node_id && arg(1) != 'add'){
			$current_node_type = $current_node->type;
		}
		if( $current_node_type == 'evento'){
			$vars['title_prefix'] = '<div class="proyect-last">';
			$vars['title'] = 'Evento';
			$vars['title_sufix'] = '</div>';
		}
		if( $current_node_type == 'miembros' ){
			$vars['title_prefix'] = '<div class="proyect-last">';
			$vars['title'] = 'Consejo Directivo';
			$vars['title_sufix'] = '</div>';
		}
		if( $current_node_type == 'proyecto' ){
			global $language;
			//print '<pre>'.print_r($current_node, true).'</pre>';
			$count_field_languages = count($current_node->field_estado);
			foreach( $current_node->field_estado as $key=>$value ){
				if( $key == $language->language ){
					$key_lan = $language->language;
				}elseif( $key == 'und' ){
					$key_lan = 'und';
				}
			}
			$term_name = @$current_node->field_estado[$key_lan][0]['taxonomy_term']->name;
			if( $term_name == 'anteriores' ){
				$vars['title_prefix'] = '<div class="proyects"><div class="prefix-title proyect-last">Proyectos anteriores</div>';
				$vars['title_sufix'] = '</div>';
			}else{
				$vars['title_prefix'] = '<div class="proyects"><div class="prefix-title proyect-new">Proyectos en curso</div>';
				$vars['title_sufix'] = '</div>';
			}
			
		}elseif( $current_node_type == 'recurso' ){
			global $language;
			$count_field_languages = count($current_node->field_categoria);
			foreach( $current_node->field_categoria as $key=>$value ){
				if( $key == $language->language ){
					$key_lan = $language->language;
				}elseif( $key == 'und' ){
					$key_lan = 'und';
				}
			}
			$term_name = @$current_node->field_categoria[$key_lan][0]['taxonomy_term']->name;
			$term_id = @$current_node->field_categoria['und'][0]['tid'];
			
			if( $term_id == 3 ){
				$vars['title_prefix'] = '<div class="resource"><div class="prefix-title resource-title" value="3">Investigaciones docentes</div>';
				$vars['title_sufix'] = '</div>';
			}elseif( $term_id == 2 ){
				$vars['title_prefix'] = '<div class="resource"><div class="prefix-title resource-title" value="2">Memorias RAD</div>';
				$vars['title_sufix'] = '</div>';
			}else{
				$vars['title_prefix'] = '<div class="resource"><div class="prefix-title resource-title" value="1">Proyectos Estudiantiles </div>';
				$vars['title_sufix'] = '</div>';
			}

			/*if( $_SERVER['REMOTE_ADDR'] == '190.60.93.86' ){
				var_dump($current_node);
			}
			if( $term_name == 'Investigaciones docentes' ){
				$vars['title_prefix'] = '<div class="resource"><div class="prefix-title resource-title">Investigaciones docentes</div>';
				$vars['title_sufix'] = '</div>';
			}elseif( $term_name == 'Memorias RAD' ){
				$vars['title_prefix'] = '<div class="resource"><div class="prefix-title resource-title">Memorias RAD</div>';
				$vars['title_sufix'] = '</div>';
			}else{
				$vars['title_prefix'] = '<div class="resource"><div class="prefix-title resource-title">Proyectos Estudiantiles </div>';
				$vars['title_sufix'] = '</div>';
			}*/
		}elseif( arg(1) == 34 ){
			$vars['title_prefix'] = '<div class="contact-page">';
			$vars['title_sufix'] = '</div>';
		}elseif( $current_node_type == 'page' ){
			$vars['title_prefix'] = '<div class="page-div">';
			$vars['title_sufix'] = '</div>';
		}elseif( arg(1) == 29 ){
			$vars['title_prefix'] = '<div class="proyect-last">';
			$vars['title_sufix'] = '</div>';
		}
		
		if( arg(0) == 'node' && arg(1) == 'add' ){
			$vars['title_prefix'] = '<div class="proyect-last">';
			$vars['title'] = 'Publique su proyecto.';
			$vars['title_sufix'] = '</div>';
			
		}
	}
	if( arg(0) == 'proyectos' || arg(0) == 'calendariografico' || arg(0) == 'calendariolista' || arg(0) == 'calendariolistam' || arg(0) == 'proyectosm'){
		if( arg(1) ){
			$tid = arg(1);
			$term = taxonomy_term_load($tid);
			$term_name = isset($term->name) ? $term->name : '';
			if( $term_name == 'anteriores'){
				$vars['title_prefix'] = '<div class="proyect-last">';
			}else{
				$vars['title_prefix'] = '<div class="proyect-new">';
			}
			$vars['title_sufix'] = '</div>';
		}else{
			$vars['title_prefix'] = '<div class="proyect-new">';
			$vars['title_sufix'] = '</div>';
		}
	}elseif( arg(0) == 'recursos' || arg(0) == 'recursosm'){
		$term_name = false;
		if( arg(1) ){
			$tid = arg(1);
			$term = taxonomy_term_load($tid);
			$term_name = $term->name;
		}
		if( $term_name == 'Memorias RAD' ){
			$vars['title_prefix'] = '<div class="resource-title-page">';
			$vars['title'] = 'Memorias RAD';
		}elseif( $term_name == 'Proyectos Estudiantiles' ){
			$vars['title_prefix'] = '<div class="resource-title-page">';
			$vars['title'] = 'Proyectos Estudiantiles';
		}else{
			$vars['title_prefix'] = '<div class="resource-title-page">';
			$vars['title'] = 'Investigaciones docentes';
		}
		$vars['title_sufix'] = '</div>';
	}elseif( arg(0) == 'asociados' || arg(0) == 'asociadosm'){
		$vars['title_prefix'] = '<div class="proyect-last">';
		$vars['title_sufix'] = '</div>';
	}elseif( arg(0) == 'consejo_directivo' || arg(0) == 'consejo_directivom'){
		$vars['title_prefix'] = '<div class="proyect-last">';
		$vars['title_sufix'] = '</div>';
	}elseif( arg(0) == 'user' ){
		$vars['title_prefix'] = '<div class="proyect-last">';
		$vars['title'] = 'Mi cuenta';
		$vars['title_sufix'] = '</div>';
	}
	if( arg(1) == 'actas' || arg(1) == 'temas-de-interes' || arg(1) == 'base-de-datos' ){
		$vars['title_prefix'] = '<div class="proyect-last">';
		$vars['title_sufix'] = '</div>';
	}
}