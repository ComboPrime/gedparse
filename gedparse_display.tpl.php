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
 * - $selected_parents........The rendered HTML for the selected person's parents.
 *
 * - $selected_html...........The rendered HTML for the selected person.
 *
 * - $selected_partners.......The rendered HTML for the selected person's partners.
 *
 * - $selected_siblings.......The rendered HTML for the selected person's siblings.
 *
 * - The following variables are available only if a partner is displayed.
 *
 * - $partner_gender_class....(optional) A class setting to style the partner's
 *                            display based on gender.
 * - $partner_parents.........The rendered HTML for the partner's parents.
 *
 * - $partner_html............The rendered HTML for the partner.
 *
 * - $partner_partners........The rendered HTML for the partner's partners.
 *
 * - $partner_siblings........The rendered HTML for the partner's siblings.
 *
 * - $family_html.............(optional) The rendered HTML for the family.
 *
 * - $children_list...........(optional) The rendered HTML for the children.
*/
?>

<div id="gedparse">
<div class="row-fluid">
  <div class="span6 <?php print $selected_gender_class; ?>">
    <?php print $selected_parents ; ?>
  </div><!-- end span6 selected_parents div -->

  <?php if ($partner_parents): ?>
    <div class="span6 <?php print $partner_gender_class; ?>">
      <?php print $partner_parents ; ?>
    </div><!-- end span6 partner div -->
  <?php endif; ?>
</div><!-- end span6 partner_parents div -->

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

<?php if ($selected_partners || $partner_partners): ?>
  <div class="row-fluid">
    <div class="span6 <?php print $selected_gender_class; ?>">
      <?php print $selected_partners ; ?>
    </div><!-- end span6 selected_html div -->

    <?php if ($partner_partners): ?>
      <div class="span6 <?php print $partner_gender_class; ?>">
        <?php print $partner_partners ; ?>
      </div><!-- end span6 partner_partners div -->
    <?php endif; ?>
  </div><!-- end row-fluid wrapper div -->
<?php endif; ?>

<?php if ($selected_siblings || $partner_siblings): ?>
  <div class="row-fluid">
    <div class="span6 <?php print $selected_gender_class; ?>">
      <?php print $selected_siblings ; ?>
    </div><!-- end span6 selected_siblings div -->

    <?php if ($partner_siblings): ?>
      <div class="span6 <?php print $partner_gender_class; ?>">
        <?php print $partner_siblings ; ?>
      </div><!-- end span6 partner_siblings div -->
    <?php endif; ?>
  </div><!-- end row-fluid wrapper div -->
<?php endif; ?>

<?php if $family_info: ?>
  <div class="row-fluid">
    <div class="span12">
      <div class="row-fluid">
        <div class="span6">
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
