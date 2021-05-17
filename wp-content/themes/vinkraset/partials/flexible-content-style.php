<?php 
if( have_rows('flexible_content_style') ):
    while ( have_rows('flexible_content_style') ) : the_row();
      $filename = str_replace('_', '-', get_row_layout());
      $module_file = locate_template('/partials/flexiblecontent/'.$filename.'.php');
      if ($module_file && file_exists($module_file)) {
        include($module_file);
      }
    endwhile;
  endif;
?>