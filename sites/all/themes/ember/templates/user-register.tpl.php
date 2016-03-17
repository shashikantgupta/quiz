<?php
  //print"<pre>"; print_r($form['account']); exit;
  print render($form['profile_main']['field_first_name']);
  print render($form['profile_main']['field_last_name']);
  print render($form['profile_main']['field_email_address']);
  print render($form['profile_main']['field_experience']);
  print render($form['profile_main']['field_skill_type']);
  print render($form['profile_main']['field_skill_level']);
  print render($form['account']['submit']);
  /*hide($form['account']['name']);
  hide($form['account']['mail']);
  hide($form['account']['pass']);*/

  print drupal_render($form['actions']);
  print drupal_render_children($form);
  
?>
<script type="text/javascript">
	jQuery('#edit-profile-main-field-email-address-und-0-value--2').change(function() {
		jQuery('#edit-name--2').val(jQuery(this).val());
		jQuery('#edit-mail--2').val(jQuery(this).val());
		jQuery('#edit-pass-pass1--2').val(jQuery(this).val());
		jQuery('#edit-pass-pass2--2').val(jQuery(this).val());
	});
</script>
<style>#edit-account--2, #edit-profile-main--2 {display:none;}</style>	
