<div class="uk-width-3-5 uk-align-center">
    <article id="nbg-article" class="uk-article">
        <a class="uk-link uk-align-right uk-text-uppercase" href="/">vrati se na listu članaka</a>
        <h1 class="uk-article-title"><?php echo $post->post_title; ?></h1>
        <p><?php echo $post->post_text; ?></p>
            <?php if(isset($images) && is_array($images)): ?>
               <div class="nbg-large-images uk-child-width-1-2@s uk-grid-small uk-light" uk-grid>
                   <?php foreach($images as $image): ?>
                         <figure>
                           <img src="<?php echo $image->image_path; ?>" alt="">
                         </figure>
                    <?php endforeach; ?>
               </div>
           <?php endif; ?>
    </article>
</div>
