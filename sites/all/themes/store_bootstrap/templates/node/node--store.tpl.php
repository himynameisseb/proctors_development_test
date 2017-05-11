<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 */

?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <header>
      <div class="h1-wrapper"><h1 class="title"><?php print $title; ?></a></h1></div> 
      <?php print render($content['field_store_type']); ?>
  </header>
 
  <div class="open-times">
    <div class="open-times-head">
      <p><?php print t('Opening Times'); ?></p>
    </div>
    <div class="open-times-content">
      <p>
        <?php print t('Monday: 9:00 - 5:30'); ?><br />
        <?php print t('Tuesday: 9:00 - 5:30'); ?><br />
        <?php print t('Wednesday: 9:00 - 5:30'); ?><br />
        <?php print t('Thursday: 9:00 - 5:30'); ?><br />
        <?php print t('Friday: 9:00 - 5:30'); ?><br />
        <?php print t('Saturday: 9:00 - 5:30'); ?><br />
        <?php print t('Sunday: Closed'); ?>
      </p>
    </div>
  </div>

  <?php print render($content['field_store_manager']); ?>

  <?php print render($content['field_address']); ?>

  <?php print l(t('Show on Google maps'), 'http://www.google.com/maps/place/' . render($content['field_latitude']) . ',' . render($content['field_longitude'])); ?>

</article>
