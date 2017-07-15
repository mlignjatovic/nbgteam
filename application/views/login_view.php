<div class="uk-container-center">
    <?php if($this->session->flashdata('login-error')): ?>
        <p class="uk-text-warning uk-text-center"><?php echo $this->session->flashdata('login-error'); ?></p>
    <?php endif; ?>
    <form class="uk-form uk-form-width-medium uk-align-center" action="#" method="post">
        <label for="email">Email</label>
        <input class="uk-input" id="email" type="email" name="email" required>
        <label for="password">Password</label>
        <input class="uk-input" id="password" type="password" name="password" required>
        <input class="uk-button uk-button-danger uk-margin-top" type="submit" name="submit-login" value="Pristupi">
    </form>
  </div>
