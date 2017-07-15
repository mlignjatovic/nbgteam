<div class="uk-width-3-5 uk-align-center">
  <div class="uk-child-width-expand@s uk-text-center" uk-grid>
      <?php if($this->session->userdata('username')): ?>
          <h3 class="uk-text-warning uk-text-capitalize"><?php echo 'Dobrodošao '.$this->session->userdata('username');?></h3>
     <?php endif; ?>
    <div class="uk-align-right">
      <a class="uk-button uk-button-danger" href="/administracija/novi-clanak">Dodaj novi članak</a>
    </div>
  </div>
  <?php if($this->session->flashdata('post-message')): ?>
      <p class="uk-text-success"><?php echo $this->session->flashdata('post-message'); ?></p>
  <?php endif; ?>
  <table class="uk-table uk-table-divider">
      <?php foreach($posts as $post): ?>
         <tr>
            <td class="uk-table-expand"><?php echo $post->post_title; ?></td>
            <td class="uk-table-shrink"><a href="<?php echo '/administracija/edituj-clanak/'.$post->post_id; ?>" uk-icon="icon: file-edit"></a></td>
            <td class="uk-table-shrink"><a href="<?php echo '/administracija/obrisi-clanak/'.$post->post_id; ?>" uk-icon="icon: trash"></a></td>
         </tr>
      <?php endforeach; ?>
  </table>
  <div>
    <?php echo $this->pagination->create_links(); ?>
  </div>

</div>
