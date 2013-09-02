<?php

/**
 * @file
 * GEDparse's template to display an individual or partnership.
 *
 * Available GEDparse variables:
 *
 * - $selected_gender_class...A class setting to style the selected person's
 *                            display based on gender.
 * - $selected_html...........The rendered HTML for the selected person.
 *
 * - The following variables are available only if a partner is displayed.
 *
 * - $partner_gender_class....(optional) A class setting to style the partner's
 *                            display based on gender.
 * - $partner_html............The rendered HTML for the partner.
 *
 * - $family_html.............(optional) The rendered HTML for the family.
 *
 * - $children_list...........(optional) The rendered HTML for the children.
*/
?>

<div id="gedparse">
  <div class="selected <?php print $selected_gender_class; ?>">
    <?php print $selected_html ; ?>
  </div><!-- end selected div -->

  <?php if ($partner_html): ?>
  <div class="partner <?php print $partner_gender_class; ?>">
    <?php print $partner_html ; ?>
  </div><!-- end partner div -->
  <?php endif; ?>

  <?php if ($family_html): ?>
  <div class="partnership">
    <div class="family-info">
      <h2>Family Information</h2>
      <?php print $family_html ; ?>
    </div><!-- end family-info div -->
    <div class="children">
      <?php print $children_list ; ?>
    </div><!-- end children div -->
  </div><!-- end partnership div -->
  <?php endif; ?>
</div><!-- end gedparse div -->
