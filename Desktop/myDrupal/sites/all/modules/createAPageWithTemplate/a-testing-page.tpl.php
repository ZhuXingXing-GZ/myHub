<?php

/**
 * @file
 * Default theme implementation for a testing page.
 *
 * Available variables:
 * - $title: The page title.
 * - $head: Header tags.
 * - $language: Language code. e.g. "en" for english.
 * - $language_rtl: TRUE or FALSE depending on right to left language scripts.
 * - $base_url: URL to home page.
 * - $contents: Main contents from database you want to render in this template.
 *
 * @see template_preprocess_a_testing_page()
 *
 * @ingroup themeable
 */
?>
<div id="testing-page">
	<?php print $title; ?>
  	<div id="lg"><img hidefocus="true" src="<?php print $logo; ?>" height="129" width="270"></div>
    <?php print $contents; ?>
</div>