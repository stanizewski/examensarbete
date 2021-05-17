<?php
echo '<div class="section-headline';
if (isset($class) && !empty($class)) {
  echo ' ' . $class;
}
if (isset($toggle) && !empty($toggle)) {
  echo ' toggle-icon';
}
if (isset($open) && $open === false) {
  echo ' closed';
}
echo '">';
if (isset($headline)) {
  echo '<h6>'.$headline.'</h6>';
}
if (isset($right)) {
  echo '<div>'.$right.'</div>';
}
if (isset($toggle) && !empty($toggle)) {
  echo '<span data-toggle="'.$toggle.'"></span>';
}

echo '</div>';
?>