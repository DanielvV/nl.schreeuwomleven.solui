{literal}
    <!-- ui changes SoL -->
    <script type="text/javascript">
      CRM.$('#Address_1_IsBilling').parent().hide();
      CRM.$('.tag-section').parent().hide();
      CRM.$('.crm-option-edit-link').hide();
      CRM.$('#employer_id').parent().hide();
      CRM.$('#job_title').parent().hide();
      CRM.$('#image_URL').parent().hide();
      CRM.$('#preferred_mail_format').parent().hide();
      CRM.$('.email-signature').parent().hide();
      CRM.$('#CIVICRM_QFID_1_communication_style_id').parent().parent().hide();
      CRM.$('#CIVICRM_QFID_1_gender_id').parent().parent().hide();
      CRM.$('#birth_date').parent().parent().hide();
      CRM.$('#is_deceased').prop('onclick',null).off('click');
      CRM.$('.crm-accordion-wrapper.collapsed').crmAccordionToggle();
      CRM.$('a#expand').attr('href', '#collapse');
      CRM.$('a#expand').text('Alle tabbladen inklappen');
    </script>
{/literal}
