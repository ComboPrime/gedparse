GEDparse
========

GEDparse is a Drupal 7 module that parses a GEDCOM file and displays
genealogical information. It is definitely a work in progress and
may not handle every type of field, or even (at the moment) features
like sources.

But feel free to submit a patch on Drupal.org or fork it on GitHub!

Configuration
=============

Once GEDparse is installed and enabled, you'll need to configure some
settings before it will work. Most important of these is telling GEDparse
where your GEDCOM file is!

Visit admin/config/gedparse to enter the path to your GEDCOM file. Note
that this file should NOT be accessible over the Web (for privacy reasons).
This setting is REQUIRED for GEDparse to work.

On this page, you can also optionally change the path that GEDparse constructs
and enter a folder location for headshot images. Currently, these images
MUST be 75px-wide by 100px-high JPEGs named indixxx.jpg, where xxx is the
GEDCOM INDI number for that person.

You'll also need to set permissions for GEDparse. By default (again, out of
privacy concerns), nobody can search or view the records in your GEDCOM file--
not even the site administrator! It is recommended NOT to give anonymous users
access; only allow access to trusted user roles.



Developer: ComboPrime <comboprime@etgdesign.com>
