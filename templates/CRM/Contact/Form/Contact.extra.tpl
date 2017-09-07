{literal}
    <!-- ui changes SoL -->
    <script type="text/javascript">
      cj('#Address_1_IsBilling').parent().hide();
      cj('#tagtree').parent().hide();
      cj('.crm-option-edit-link').hide();
      cj('#employer_id').parent().hide();
      cj('#job_title').parent().hide();
      cj('#image_URL').parent().hide();
      cj('#preferred_mail_format').parent().hide();
      cj('#CIVICRM_QFID_1_communication_style_id').parent().parent().hide();
      cj('#CIVICRM_QFID_1_gender_id').parent().parent().hide();
      cj('#birth_date').parent().parent().hide();
      cj('#is_deceased').prop('onclick',null).off('click');
    </script>
{/literal}
