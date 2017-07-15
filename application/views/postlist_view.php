<div class="uk-width-1-2 uk-align-center">
      <ul class="uk-list uk-list-divider uk-clearfix">
        <?php foreach($post_list as $post): ?>
        <li><?php echo $post->post_title; ?>
          <a class="uk-float-right uk-text-warning" href=<?php echo "/clanak/{$post->post_id}"; ?>>Pogledaj više</a>
        </li>
      <?php endforeach; ?>
      </ul>
      <?php echo $this->pagination->create_links(); ?>
</div>
