<?php
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page && !$teaser): ?>
    <h2<?php print $title_attributes; ?>>
      <?php print $title; ?>
    </h2>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="meta submitted">
      <?php print $user_picture; ?>
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // Hide the comments and links. They are going to be 
			// rendered later.
      hide($content['comments']);
      hide($content['links']);
			
      //print render($content);
    ?>
  </div>
<?php endif; ?>
<?php 
		if ($teaser && $content['field_image']['#object']->type == 'portfolio_piece') {
			$fragment = $content['body'][0]['#markup'];
			//dpm($content);
			$titleInsert = '<h2><a href="' . $node_url . '">' . $title . '</a></h2>';
			$newContent = array('#markup' => $titleInsert . $fragment);
			$content['body'][0]['#markup'] = $titleInsert . $fragment;

			//dpm($titleInsert);
			//$content['body']['#items'][0]['summary'] = $newContent;
		}
    print render($content);
			/*
			 */
?>


  <?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper clearfix">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</div>
