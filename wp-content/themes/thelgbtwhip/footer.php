<div id="myModal" class="reveal-modal" data-reveal>
    <form> 
        <h5>Enter your postcode</h5>
        <div class="separator">
        </div>
        <div class="row">
            <div class="large-4 columns">
                <div class="row collapse postfix-round">
                    <div class="small-9 columns">
                        <input type="text" id="postcodeSearchValue" placeholder="Enter postcode">
                    </div>
                    <div class="small-3 columns">
                        <a href="#" id="postcodeSearchSubmit" class="button postfix">Go</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script>
    $(document).foundation();
</script>

<script>
    $(document).ready(function() {
        $('#postcodeSearchSubmit').on("click", function() {
            var sPostcode = $('#postcodeSearchValue').val().replace(/ /g, '');
            location.href = '<?php echo esc_url(home_url('/')); ?>/constituency/?postcode=' + sPostcode;
        });

<?php
if ($pagename == "constituency") {
    if (isset($_REQUEST["postcode"]) && ctype_alnum($_REQUEST["postcode"])) {
        ?>
                var sPostcode = "<?php echo($_REQUEST["postcode"]); ?>";

                jQuery.ajax({
                    type: "POST",
                    url: "<?php echo(esc_url(home_url('/'))); ?>wp-admin/admin-ajax.php",
                    data: "action=lgbtwhip_postcodelookup&postcode=" + encodeURIComponent(sPostcode),
                    success: function(data) {
                        var arConstituency = JSON.parse(data);
                        console.log(arConstituency);

                        // Update the constituency name
                        $('#constituencyTitle').html(arConstituency["name"]);
                        $('#givenPostcode').html(sPostcode);

                        // Now insert the candidates
                        for (var i = 0; i < arConstituency["candidates"].length; i++)
                        {
                            $('#cand' + (i + 1) + 'name').html(arConstituency["candidates"][i]["name"]);
                            $('#cand' + (i + 1) + 'party').html(arConstituency["candidates"][i]["party"]);
                            if (arConstituency["candidates"][i]["twitter"].length > 0)
                            {
                                $('#cand' + (i + 1) + 'twitter').attr("href", arConstituency["candidates"][i]["twitter"]);
                            }
                            else
                            {
                                $('#cand' + (i + 1) + 'twitter').hide();
                            }

                            if (arConstituency["candidates"][i]["email"].length > 0)
                            {
                                $('#cand' + (i + 1) + 'email').attr("href", "mailto:" + arConstituency["candidates"][i]["email"]);
                            }
                            else
                            {
                                $('#cand' + (i + 1) + 'email').hide();
                            }

                            if (arConstituency["candidates"][i]["wikipedia"].length > 0)
                            {
                                $('#cand' + (i + 1) + 'wikipedia').attr("href", "mailto:" + arConstituency["candidates"][i]["wikipedia"]);
                            }
                            else
                            {
                                $('#cand' + (i + 1) + 'wikipedia').hide();
                            }
                            
                            var candidateId = i + 1;
                            
                            for (var j in arConstituency["candidates"][i]["voting_record"]) {
                                var currentVote = arConstituency["candidates"][i]["voting_record"][j];
                                
                                console.log(currentVote);
                        
                                var vote = currentVote['vote'];
                                var image = getImageName(vote);
                                var title = getTooltip(vote);
                                
                                if (currentVote["bill"] == "Reduce age of consent for homosexual acts to 16")
                                {
                                    $("#cand" + candidateId + "vote1").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (currentVote["bill"] == "Introduction of civil partnerships")
                                {
                                    $("#cand" + candidateId + "vote2").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (currentVote["bill"] == "Equality Act (Sexual Orientation) Regulations")
                                {
                                    $("#cand" + candidateId + "vote3").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (currentVote["bill"] == "IVF treatment for lesbian couples")
                                {
                                    $("#cand" + candidateId + "vote4").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (currentVote["bill"] == "Marriage (Same-sex Couples) Bill")
                                {
                                    $("#cand" + candidateId + "vote5").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (currentVote["bill"] == "Reduce age of consent for homosexual acts to 16")
                                {
                                    $("#cand" + candidateId + "vote6").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                            }
                            
                            j = 0;
                            
                            // Now go through the issues
                            for (var j = 0; j < arConstituency["candidates"][i]["issues"].length; j++)
                            {
                                var issues = arConstituency["candidates"][i]["issues"][j];
                                
                                var vote = arConstituency["candidates"][i]["issues"][j]['vote'];
                                var image = getImageName(vote);
                                var title = getTooltip(vote);
                                
                                if (issues["issue_description"] == "Reduce age of consent for homosexual acts to 16")
                                {
                                    $("#cand" + candidateId + "issue1").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Introduction of civil partnerships")
                                {
                                    $("#cand" + candidateId + "issue2").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Equality Act (Sexual Orientation) Regulations")
                                {
                                    $("#cand" + candidateId + "issue3").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "IVF treatment for lesbian couples")
                                {
                                    $("#cand" + candidateId + "issue4").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Marriage (Same-sex Couples) Bill")
                                {
                                    $("#cand" + candidateId + "issue5").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Reduce age of consent for homosexual acts to 16")
                                {
                                    $("#cand" + candidateId + "issue6").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Repeal of the 12 month deferral of men who have sex with men  (MSM) from donating blood.")
                                {
                                    $("#cand" + candidateId + "issue7").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Asylum in the UK for LGBT+ people fleeing persecution")
                                {
                                    $("#cand" + candidateId + "issue8").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                                else if (issues["issue_description"] == "Recognition of trans* identities in all public services")
                                {
                                    $("#cand" + candidateId + "issue9").attr("src", "<?= get_template_directory_uri(); ?>/img/" + image + ".png").attr("title", title);
                                }
                            }
                        }

                        // Get the issues
                        jQuery.ajax({
                            type: "POST",
                            url: "<?php echo(esc_url(home_url('/'))); ?>wp-admin/admin-ajax.php",
                            data: "action=lgbtwhip_issueslookup",
                            success: function(data) {
                                var arIssues = JSON.parse(data);
                                console.log(arIssues);
                            }
                        });
                    }
                });

                function getImageName(vote) {
                    switch (parseInt(vote)) {
                        case 1:
                            return 'support_icon';
                        case -1:
                            return 'dont_support_icon';
                        case 0:
                        default:
                            return 'question_mark';
                    }
                };
                
                function getTooltip(vote) {
                    switch (parseInt(vote)) {
                        case 1:
                            return 'Candidate answered yes to this question in the survey';
                        case -1:
                            return 'Candidate answered no to this question in the survey';
                        case 0:
                        default:
                            return 'Candidate has not answered this survey question';
                    }
                };
                
                function getPartyLogoClass(party) {
                    switch (party) {
                        case 'Conservative':
                            return 'conservative';
                        case 'Liberal Democrat':
                            return 'libdem';
                        case 'Labour':
                            return 'labour';
                        case 'Green':
                            return 'green';
                        case 'UKIP':
                            return 'ukip';
                        default:
                            return '';
                    }
                };
                

        <?php
    } else {
        ?>
                location.href = "<?php echo esc_url(home_url('/')); ?>";
        <?php
    }
}
?>
    });
</script>
</body>
</html>