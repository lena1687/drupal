<?php
?>
<?php print render($page['header']); ?>
<header id="header">
  <section class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <?php print render($page['top-header-tel']); ?>
        </div>
        <div class="col-sm-6 col-12">
          <?php print render($page['top-header-soc']); ?>
        </div>
      </div>
    </div>
  </section>
  <nav class="bottom-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-12">
          <?php print render($page['bottom-header-logo']); ?>
        </div>
        <div class="col-sm-9 col-12">
          <ul class="nav navbar-nav navbar header-menu pull-right">
            <?php print render($page['bottom-header-menu']); ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
