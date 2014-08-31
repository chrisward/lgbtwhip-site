<?php
global $pagename;

get_header();

if ($pagename == "constituency")
{
?>
    <div class="row center">
      <div class="large-12 columns">
        <h4 id="constituencyTitle"></h4>
        <a href="#" data-reveal-id="myModal"><i class="fi-magnifying-glass margin"></i>New postcode search</a>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="separator">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-4 small-4 columns">
        <div class="headshot">
          <img src="<?php echo get_template_directory_uri(); ?>/img/a1.png">
        </div>
        <h1 id="cand1name"></h1>
        <h3 id="cand1party"></h3>
        <div class="center white">
          <a href="" id="cand1twitter" class="fi-social-twitter margin"></a>
          <a href="mailto:bonep@parliament.uk" id="cand1email" class="fi-mail margin"></a>
          <a href="http://en.wikipedia.org/wiki/Peter_Bone" id="cand1wikipedia" class="fi-address-book"></a>
        </div>
      </div>
      <div class="large-4 small-4 columns">
        <div class="headshot">
          <img src="<?php echo get_template_directory_uri(); ?>/img/a2.jpeg"/>
        </div>
        <h1 id="cand2name"></h1>
        <h3 id="cand2party"></h3>
        <div class="center white">
          <a href="https://twitter.com/stephen_gilbert" id="cand2twitter" class="fi-social-twitter margin"></a>
          <a href="http://stephengilbert.org.uk/en/" id="cand2email" class="fi-mail margin"></a>
          <a href="http://en.wikipedia.org/wiki/Steve_Gilbert" id="cand1wikipedia" class="fi-address-book"></a>
        </div>
      </div>
      <div class="large-4 small-4 columns">
        <div class="headshot">
          <img src="<?php echo get_template_directory_uri(); ?>/img/a3.png"/>
        </div>
        <h1 id="cand3name"></h1>
        <h3 id="cand3party"></h3>
        <div class="center white">
          <a href="" id="cand3twitter" class="fi-social-twitter margin"></a>
          <a href="http://stephengilbert.org.uk/en/" id="cand3email" class="fi-mail margin"></a>
          <a href="http://richardgarvie.org/" id="cand1wikipedia" class="fi-address-book"></a>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <h2>Reduce age of consent for homosexual acts to 16</h2>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 columns">
            <div class="no">
              <i class="fi-x"></i>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="yes">
              <i class="fi-check"></i>
            </div>
          </div>
          <div class="large-4 columns">
            <div class="undecided">
              <p>?</p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--<div class="row">
      <h2>Reduce age of consent for homosexual acts to 16</h2>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns">
            <div class="no">
              <i class="fi-x"></i>
            </div>
            <div class="like">
              <i class="fi-like"></i>
            </div>
          </div>
          <div class="large-4 small-4 columns">
            <div class="yes">
              <i class="fi-check"></i>
            </div>
            <div class="dislike">
              <i class="fi-dislike"></i>
            </div>
          </div>
          <div class="large-4 small-4 columns">
            <div class="undecided">
              <p>?</p>
            </div>
            <div class="like">
              <i class="fi-like"></i>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="question">
        <h2>Reduce age of consent for homosexual acts to 16</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/checkmark.png" id="cand1vote1" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" id="cand1issue1" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/crossmark.png" id="cand2vote1" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are not in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand2issue1" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" id="cand3vote1" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate has no historical preference for this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand3issue1" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">
        <h2>Introduction of civil partnerships</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/checkmark.png" id="cand1vote2" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" id="cand1issue2" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/crossmark.png" id="cand2vote2" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are not in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand2issue2" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" id="cand3vote2" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate has no historical preference for this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand3issue2" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">
        <h2>Repeal of Section 28</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/checkmark.png" id="cand1vote3" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" id="cand1issue3" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/crossmark.png" id="cand2vote3" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are not in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand2issue3" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" id="cand3vote3" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate has no historical preference for this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand3issue3" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">
        <h2>Equality Act (Sexual Orientation) Regulations</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/checkmark.png" id="cand1vote4" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" id="cand1issue4" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/crossmark.png" id="cand2vote4" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are not in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand2issue4" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" id="cand3vote4" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate has no historical preference for this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" id="cand3issue4" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">
        <h2>IVF treatment for lesbian couples</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/checkmark.png" id="cand1vote5" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/crossmark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are not in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate has no historical preference for this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">    
        <h2>Marriage (Same-sex Couples) Bill</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/checkmark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/crossmark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate's past voting history indicates that they are not in favor of this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="Candidate has no historical preference for this issue"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">
        <h2>Repeal of the 12 month deferral of men who have sex with men (MSM) from donating blood</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">    
        <h2>Asylum in the UK for LGBT+ people fleeing persecution</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="question">
        <h2>Recognition of trans* identities in all public services</h2>
      </div>
      <div class="large-12 columns styled-block">
        <div class="row">
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered yes to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey"/>
          </div>
          <div class="large-4 small-4 columns center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/question_mark.png" data-tooltip aria-haspopup="true" class="has-tip scale margin" title="As this is a current issue, no past voting information is available."/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/dont_support_icon.png" data-tooltip aria-haspopup="true" class="has-tip scale" title="Candidate answered no to this question in the survey" />
          </div>
        </div>
      </div>
    </div>
    

<?php
}

get_footer();
?>