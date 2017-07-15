<section id="nbg-post-section" class="uk-width-2-3 uk-align-center">
  <h2 class="uk-text-warning">Dodavanje Članaka</h2>
  <form class="nbg-form uk-form" action="/administracija/novi-clanak" method="post" enctype="multipart/form-data">
      <!-- Naslov -->
      <label for="nbg-title">Naslov:</label>
      <input id="nbg-title"
             class="uk-input uk-margin-bottom"
             type="text"
             name="title"
             value="<?php echo isset($edit) ? $edit->post_title : '' ; ?>"
             required>
             <!-- Tekst -->
      <label for="nbg-post">Tekst:</label>
      <textarea id="nbg-post"
                class="uk-textarea"
                name="post"><?php echo isset($edit) ? $edit->post_text : '' ; ?></textarea>
    <div class="uk-child-width-expand@s uk-text-center uk-margin-top" uk-grid>
        <!-- Dodavanje slika -->
      <div class="">
        <label for="">Dodaj Sliku:</label>
        <input type="file" name="images[]" multiple>
      </div>
            <!-- Edit i Povratak na glavnu stranu -->
        <div class="uk-child-width-1-2@s uk-grid-small uk-text-center" uk-grid>
          <div class="uk-text-right">
            <a class="uk-button uk-button-danger" href="/administracija">otkaži</a>
          </div>
          <!-- Submit -->
          <div class="uk-text-left">
              <?php if($this->session->flashdata('mode') == 'insert'):?>
                  <input class="uk-button uk-button-danger" type="submit" name="submit-insert" value="Dodaj članak">
              <?php else: ?>
                  <input class="uk-button uk-button-danger" type="submit" name="submit-update" value="Edituj članak">
                  <input type="hidden" name="edit-post_id" value="<?php echo isset($edit) ? $edit->post_id : '' ; ?>">
              <?php endif; ?>
          </div>
        </div>
    </div>
  </form>
        <!-- Slike se prikazuju ako je ruta kroz edit -->
        <?php if(isset($images) && is_array($images)): ?>
          <div class="nbg-small-images uk-child-width-1-4@s uk-grid-small uk-light uk-margin-large-top" uk-grid>
             <?php foreach($images as $image): ?>
                    <div>
                        <img src="<?php echo $image->image_path; ?>" alt="">
                          <form action="/administracija/obrisi-sliku" method="post">
                            <input type="hidden" name="image-id" value="<?php echo $image->image_id; ?>">
                            <input type="hidden" name="post-id" value="<?php echo $image->post_id; ?>">
                            <input type="hidden" name="image-name" value="<?php echo $image->image_name; ?>">
                            <input class="uk-button uk-button-danger uk-width-1-1 uk-margin-small-top" type="submit" name="delete-image" value="Obriši">
                          </form>
                    </div>
            <?php endforeach; ?>
          </div>
  <?php endif; ?>
</section>
