<?php
class Web366_Nav_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0,  $args = array() )
	{
		if($depth==0) {
			$output .= '<ul class="nav-dropdown nav-dropdown-default">';
		} else {
			$output .= '<ul class="nav-column nav-dropdown-default">';
		}
	}
	public function end_lvl( &$output, $depth = 0, $args = array() )
	{
		$output .= '</ul>';
	}
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
	{
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		if($item->current_item_ancestor || $item->current) $classes[] = 'current-menu-ancestor active';
		if($item->current_item_parent) $classes[] = 'current-menu-parent';		
		$obj_walker = $args->walker;
		$has_child = $obj_walker->has_children;
		if($has_child){
			$classes[] = 'has-dropdown'; 
			if($depth==1) {
				$classes[] = 'nav-dropdown-col';				
			}
		}
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
		$attributes = '';
		$atts = array();
		$atts['title'] = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel'] = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href'] = ! empty( $item->url ) ? $item->url : '';
		if($atts){
			foreach($atts as $att_k=>$att_v){
				if($att_v)
				$attributes .= $att_k .'="'.$att_v.'"';
			}
		}				
		$item_output = $args->before;
		$item_output .= '<a '. $attributes . ' class="nav-top-link'.$item->classes[0].'">';
		$item_output .= $args->link_before . apply_filters( 'the_title', '', $item->ID ) . $item->title . $args->link_after;
		if($has_child){ 
			if($depth==1){
				$item_output = '';
				$item_output .= '<a href="#'.$item->classes[0].'">';
				$item_output .= $args->link_before . apply_filters( 'the_title', '', $item->ID ) . $item->title;
			}else{
				$item_output = '';
				$item_output .= '<a href="#" class="'.$item->classes[0].'">';
				$item_output .= $args->link_before . apply_filters( 'the_title', '', $item->ID ) . $item->title;
				$item_output .= '<i class="icon-angle-down"></i>';
			}
		}
		$item_output .= '</a>';
		if($has_child){
			$item_output .= '';
		}
		$item_output .= $args->after;
		$output .= '<li '.$id.' '.$class_names.' >';
			$output .= $item_output;
	}
	public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
	{
		$output .= '</li>';
	}
}

