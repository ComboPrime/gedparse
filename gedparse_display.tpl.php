<?php

/**
 * @file
 * GEDparse's template to display an individual or partnership.
 *
 * Available variables:
 *
 * - $title:   Used for <title> and <h1>.
 * - $gender:  A class setting to style the person's display based on gender.
 * - $html:    The rendered HTML for the selected person.
 * - $partner: The rendered HTML for the partner, if any.
 */
?>


<div class="row-fluid gedparse">
<div class="span6 selected <?php print $gender; ?>">
<?php print $html ; ?>
</div><!-- end span6 selected person div -->

<?php if ($partner): ?>
  <div class="span6 partner">
  <?php print $partner ; ?>
  </div><!-- end span6 partner div -->
  </div><!-- end row-fluid wrapper div -->

  <div class="row-fluid gedparse">
  <div class="span12">
  <h2>Information on this union</h2>
  <p><strong>Married:</strong> Yes</p>
  <h3>Children</h3>
  <ul>
  <li>One</li>
  <li>Two</li>
  </ul>
  </div>
  <!-- end span12 union div -->
<?php endif; ?>

</div><!-- end row-fluid wrapper div -->
