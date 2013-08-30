<?php

/**
 * @file
 * GEDparse's template to display an individual or partnership.
 *
 * Available variables:
 *
 * - $title...................Used for <title> and <h1>.
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
<div class="row-fluid">
  <div class="span6 <?php print $selected_gender_class; ?>">
    <?php print $selected_html ; ?>
  </div><!-- end span6 selected_html div -->

  <?php if ($partner_html): ?>
    <div class="span6 <?php print $partner_gender_class; ?>">
      <?php print $partner_html ; ?>
    </div><!-- end span6 partner_html div -->
  <?php endif; ?>
</div><!-- end row-fluid wrapper div -->

<?php if ($family_html): ?>
  <div class="row-fluid">
    <div class="span12 family-info">
      <div class="row-fluid">
        <div class="span6">
          <h2>Family Information</h2>
          <?php print $family_html ; ?>
        </div><!-- end span6 family div -->
        <div class="span6">
          <?php print $children_list ; ?>
        </div><!-- end span6 children div -->
      </div><!-- end row-fluid div -->
    </div><!-- end span12 div -->
  <!-- end row-fluid family div -->
<?php endif; ?>

</div><!-- end row-fluid wrapper div -->
</div><!-- end gedparse div -->
