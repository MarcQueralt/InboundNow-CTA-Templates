<?php

/**
 * WordPress:     WP Calls To Action Template Config File
 * Template Name: Kerpe
 * @package       DeMomentSomTres WordPress Calls to Action
 * @author        DeMomentSomTres
 */
do_action('wp_cta_global_config'); // The wp_cta_global_config function is for global code added by 3rd party extensions
//gets template directory name to use as identifier - do not edit - include in all template files

$key = basename(dirname(__FILE__));
$this_path = WP_CTA_URLPATH . 'templates/' . $key . '/';
/// Information START - define template information
/**
 * $wp_cta_data[$key]['info']
 * type - multidemensional array
 *
 * This array houses the template metadata
 */
/* $wp_cta_data[$key]['settings'] Parameters

  'version' - (string) (optional)
  Version Number. default = "1.0"

  'label' - (string) (optional)
  Custom Nice Name for templates. default = template file folder name

  'description' - (string) (optional)
  Landing page description.

  'category' - (string) (optional)
  Category for template. default = "all"

  'demo' - (string) (optional)
  Link to demo url.
 */

$wp_cta_data[$key]['info'] = array(
    'data_type' => 'template', // Template Data Type
    'version' => "1.0", // Version Number
    'label' => "Kerpe", // Nice Name
    'category' => 'Box', // Template Category
    //'demo' => 'http://demo.inboundnow.com/go/demo-template-preview/', // Demo Link
    'description' => 'CTA personalitzada per a la web de Kerpe' // template description
);

/**
 * $wp_cta_data[$key]['settings']
 * type - multidemensional array
 *
 * This array houses the metabox options for the template
 */
/* $wp_cta_data[$key]['settings'] Parameters

  'label' - (string) (required)
  Label for Meta Fields.

  'description' - (string) (optional)
  Description for meta Field

  'id' - (string) (required)
  unprefixed-meta-key. The $key (template file path name) is appended in the loop this array is used in.

  'type' - (string) (required)
  Meta box type. default = 'text'

  'default' - (string) (optional)
  Default Field Value.  default = ''

  'context' - (string) (optional)
  where this box will go, will be used for advanced placement/styling.  default = normal

 */

// Define Meta Options for template
$wp_cta_data[$key]['settings'] = array(
    /* camp de missatge */
    array(
        'label' => 'Text', // Label of field
        'description' => "Text que s'ha de mostrar al missatge", // field description
        'id' => 'text', // metakey. The $key Prefix is appended making the meta value demo-text-box-id
        'type' => 'text', // text metafield type
        'default' => 'Missatge', // default content
        'context' => 'normal' // Context in screen for organizing options
    ),
    /* url destí */
    array(
        'label' => 'URL', // Label of field
        'description' => "URL de la pàgina que volem promocionar", // field description
        'id' => 'url', // metakey. The $key Prefix is appended making the meta value demo-text-box-id
        'type' => 'text', // text metafield type
        'default' => 'http://demomentsomtres.com', // default content
        'context' => 'normal' // Context in screen for organizing options
    ),
    /* Imatge pel fons */
    array(
        'label' => 'Fons',
        'description' => "Image de fons",
        'id' => 'media', // called in template's index.php file with lp_get_value($post, $key, 'media-id');
        'type' => 'media',
        'default' => '',
        'context' => 'normal'
    ),
    array(
         'label' => 'Fons fosc?',
         'description' => "Reacciona segons el color del fons",
         'id'  => 'esFosc',
         'type'  => 'dropdown',
         'default'  => 'false',
         'options' => array('false'=>'No', 'true'=>'Sí'),
         'context'  => 'normal'
         ),
);
/* define dynamic template markup */
$wp_cta_data[$key]['markup'] = file_get_contents($this_path . 'index.php');
