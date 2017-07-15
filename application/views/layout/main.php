<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>nbgteam</title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.25/css/uikit.min.css" />
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.25/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.25/js/uikit-icons.min.js"></script>
    <?php if($this->session->userdata('logged_in')): ?>
        <script src= <?php echo base_url()."assets/tinymce/tinymce.min.js"; ?>></script>
    <?php endif; ?>
    <link rel="stylesheet" href= <?php echo base_url()."assets/css/style.css"; ?>>
  </head>
  <body>
    <header class="uk-container uk-container-center">
      <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>

        <div class="uk-navbar-left">
          <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="/">Početna</a></li>
            <li><a href="/login">Uloguj se</a></li>
          </ul>
        </div>
        <div class="uk-navbar-center uk-navbar-item">
          <a href="/" class="uk-navbar-item uk-logo">*nbgteam</a>
        </div>
        <div class="uk-navbar-right">
          <ul class="uk-navbar-nav">
            <?php if($this->session->userdata('logged_in')): ?>
                <li class="uk-active"><a href="/administracija">Lista članaka</a></li>
                <li><a href="/administracija/novi-clanak">Dodavanje članaka</a></li>
                <li class="uk-active"><a href="/administracija/izlaz">Izloguj se</a></li>
            <?php endif; ?>
          </ul>
        </div>

      </nav>
    </header>
    <section class="uk-container uk-container-center uk-padding-large">
        <?php $this->load->view($page); ?>
    </section>
    <?php if($this->session->userdata('logged_in')): ?>
        <script>
            tinymce.init({
                    selector: 'textarea'
                });
        </script>
    <?php endif; ?>
  </body>
</html>
