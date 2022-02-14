<?php
/*oj make new color palette 20220210*/
/*block*/
function aktk_add_my_editor_color_palette() {
    $palette = get_theme_support( 'editor-color-palette' );
    if ( ! empty( $palette ) ) {
        $palette = array_merge( $palette[0], array(
            array(
                'name'  => 'Color1',
                'slug'  => 'color1',
                'color' => '#cf2d2d',
            ),
            array(
                'name'  => 'Color2',
                'slug'  => 'color2',
                'color' => '#e88727',
            ),
        ) );
        add_theme_support( 'editor-color-palette', $palette );
    }
}

add_action( 'after_setup_theme', 
		   'aktk_add_my_editor_color_palette', 11 );
/*classic*/
function my_mce4_options( $init ) {
    $default_colors = '
        "000000", "Black",
        "993300", "Burnt orange",
        "333300", "Dark olive",
        "003300", "Dark green",
        "003366", "Dark azure",
        "000080", "Navy Blue",
        "333399", "Indigo",
        "333333", "Very dark gray",
        "800000", "Maroon",
        "FF6600", "Orange",
        "808000", "Olive",
        "008000", "Green",
        "008080", "Teal",
        "0000FF", "Blue",
        "666699", "Grayish blue",
        "808080", "Gray",
        "FF0000", "Red",
        "FF9900", "Amber",
        "99CC00", "Yellow green",
        "339966", "Sea green",
        "33CCCC", "Turquoise",
        "3366FF", "Royal blue",
        "800080", "Purple",
        "999999", "Medium gray",
        "FF00FF", "Magenta",
        "FFCC00", "Gold",
        "FFFF00", "Yellow",
        "00FF00", "Lime",
        "00FFFF", "Aqua",
        "00CCFF", "Sky blue",
        "993366", "Brown",
        "C0C0C0", "Silver",
        "FF99CC", "Pink",
        "FFCC99", "Peach",
        "FFFF99", "Light yellow",
        "CCFFCC", "Pale green",
        "CCFFFF", "Pale cyan",
        "99CCFF", "Light sky blue",
        "CC99FF", "Plum",
        "FFFFFF", "White"
        ';
    $custom_colors = '
        "cf2d2d", "Color1",
        "e88727", "Color2",
        ';
    $init['textcolor_map'] = '['.$default_colors.','.$custom_colors.']';
    $init['textcolor_rows'] = 6;
    return $init;
}
add_filter( 'tiny_mce_before_init', 'my_mce4_options' );
/*/oj make new color palette 20220210*/