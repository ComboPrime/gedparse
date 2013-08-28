<?php

/**
 * @file
 * GEDparse's template to display an individual or partnership.
 *
 * Available variables:
 *
 * - $title...................Used for <title> and <h1>.
 * - $selected_gender_class...A class setting to style the selected person's
 *                            display based on gender.
 * - $selected_html...........The rendered HTML for the selected person.
 *
 * - The following variables are available only if a partner is displayed.
 *
 * - $partner_gender_class....(optional) A class setting to style the partner's
 *                            display based on gender.
 * - $partner_html............(optional) The rendered HTML for the partner.
 *
 * - $family_html............(optional) The rendered HTML for the family.
*/
?>


<div class="row-fluid gedparse">
<div class="span6 selected <?php print $selected_gender_class; ?>">
<?php print $selected_html ; ?>
</div><!-- end span6 selected person div -->

<?php if ($partner_html): ?>
  <div class="span6 partner <?php print $partner_gender_class; ?>">
  <?php print $partner_html ; ?>
  </div><!-- end span6 partner div -->
  </div><!-- end row-fluid wrapper div -->

  <div class="row-fluid gedparse">
  <div class="span12">
  <?php print $family_html ; ?>
  </div>
  <!-- end span12 union div -->
<?php endif; ?>

</div><!-- end row-fluid wrapper div -->
