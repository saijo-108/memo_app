<?php 
// htmlspecialcharsを短くする
function h_s($value) {
  return htmlspecialchars($value, ENT_QUOTES);
}
?>