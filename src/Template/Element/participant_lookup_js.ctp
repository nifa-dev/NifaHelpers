
<script type="text/javascript">
    $(document).ready(function(){
        $('#<?= $fieldId ?>-lookup').change(function(event) {
            var valLength = $('#<?= $fieldId ?>-lookup').val().length
            if(valLength == 4) {
               console.log('fire ajax');
                $.ajax({
                    type: 'post',
                    headers: {'Accept':'application/json'},
                    url: '<?= $this->Url->build(['prefix' => false, 'plugin' => 'NifaAppsManager', 'controller' => 'Applications', 'action' => 'makeRequest'])?>',
                    data: {
                        contest_id:<?= $contestId ?>,
                        url: "<?= $url ?>",
                        participant_number: $('#<?= $fieldId ?>-lookup').val()}
                })
                    .done(function(data){
                        console.log(data);

                        if($.isEmptyObject(data.result.data)) {
                            alert("Participant not found...");
                            $('#<?= $fieldId ?>-name').val('');
                            $('#<?= $fieldId ?>').val('');
                            $('#<?= $fieldId ?>-team').val('');

                        } else {
                            $('#<?= $fieldId ?>').val(data.result.data.participant.id);
                            $('#<?= $fieldId ?>-name').val(data.result.data.participant.last_first);
                            $('#<?= $fieldId ?>-team').val(data.result.data.participant.team.name);
                        }

                    })
                    .fail(function(){
                        console.log("fail");
                        $('#<?= $fieldId ?>-name').val('');
                        $('#<?= $fieldId ?>-team').val('');
                        $('#<?= $fieldId ?>').val('');
                    })

            } else if (valLength > 4) {
                //
                alert("More than 4 characters");
            } else {
                //
                alert("Number must be at least 4 digits");
            }

        });
    });
</script>