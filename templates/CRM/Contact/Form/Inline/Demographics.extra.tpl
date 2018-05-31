{literal}
<!-- ui changes SoL -->
<script type="text/javascript">
  CRM.$('#CIVICRM_QFID_1_gender_id').parent().parent().hide();
  //Uncomment the line below to hide birth date
  //CRM.$('#birth_date').parent().parent().hide();
  CRM.$('#is_deceased').prop('onclick',null).off('click');
</script>
{/literal}
