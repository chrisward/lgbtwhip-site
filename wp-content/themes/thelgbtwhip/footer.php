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

                            // Now go through the issues
                            for (var j = 0; j < arConstituency["candidates"][i]["issues"].length; j++)
                            {
                                var issues = arConstituency["candidates"][i]["issues"][j];
                                
                                if (issues["issue_description"] == "Reduce age of consent for homosexual acts to 16")
                                {
                                    
                                }
                                else if (issues["issue_description"] == "Introduction of civil partnerships")
                                {

                                }
                                else if (issues["issue_description"] == "Equality Act (Sexual Orientation) Regulations")
                                {

                                }
                                else if (issues["issue_description"] == "IVF treatment for lesbian couples")
                                {

                                }
                                else if (issues["issue_description"] == "Marriage (Same-sex Couples) Bill")
                                {

                                }
                                else if (issues["issue_description"] == "Reduce age of consent for homosexual acts to 16")
                                {

                                }
                                else if (issues["issue_description"] == "Repeal of the 12 month deferral of men who have sex with men  (MSM) from donating blood.")
                                {

                                }
                                else if (issues["issue_description"] == "Asylum in the UK for LGBT+ people fleeing persecution")
                                {

                                }
                                else if (issues["issue_description"] == "Recognition of trans* identities in all public services")
                                {

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