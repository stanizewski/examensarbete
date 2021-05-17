<?php
add_shortcode('testcode', function() { 
ob_start();
    ?>
    <div>
    <h3>Shortcode test</h3>
    </div>
    <?php 
return ob_get_clean();  
}); 
?>