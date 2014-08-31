<?php
function lgbtwhip_postcodelookup()
{
  if (isset($_POST["postcode"]))
  {
    echo file_get_contents("http://thelgbtwhip.herokuapp.com/constituencies/postcode/" . $_POST["postcode"] . ".json");
  }
  die();
}
add_action('wp_ajax_nopriv_lgbtwhip_postcodelookup', 'lgbtwhip_postcodelookup');
add_action('wp_ajax_lgbtwhip_postcodelookup', 'lgbtwhip_postcodelookup');

function lgbtwhip_issueslookup()
{
  echo file_get_contents("http://thelgbtwhip.herokuapp.com/issues.json");
}
?>