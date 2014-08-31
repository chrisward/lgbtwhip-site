<?php 
global $pagename;

// Store baseUri for use below
$templateBaseUri = get_template_directory_uri();

get_header(); 

?>
    <div class="row center">
      <a href="#" data-reveal-id="myModal"><i class="fi-magnifying-glass margin"></i>New postcode search</a>
      <div class="splashintro">
        <h1>What is The LGBT Whip?</h1><br />
        <p>The LGBT Whip is dedicated to bring together the community and supporters, to choose election candidates who will vote for and not repeal hard-won LGBT rights. Enter your postcode now to view and compare declared candidates' views on relevant issues and incumbents' previous voting histories.</p><br />
        <p>Made with <img src="<?= $templateBaseUri ?>/img/heart_cropped.png" style="width:1rem; height:1rem; margin-right:0.5rem"/> at the Intertech + Facebook #makestuffbetter Hakathon by <a href="http://www.twitter.com/adrianavecc" target="_blank">@AdrianaVecc</a>, <a href="http://www.twitter.com/chimeren" target="_blank">@chimeren</a>, <a href="http://www.twitter.com/christopherward" target="_blank">@christopherward</a>, <a href="http://www.twitter.com/mdjward" target="_blank">@mdjward</a>, <a href="http://www.twitter.com/pburjanec" target="_blank">@pburjanec</a> and <a href="http://www.twitter.com/thehereward" target="_blank">@thehereward</a> in London.</p>
      </div>
    </div>

<?php
get_footer();
?>
