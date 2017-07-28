<?php phpinfo(); ?>
<header id="header">
  <section class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <?php if ($page['top-header-tel']): ?>
            <?php print render($page['top-header-tel']); ?>
          <?php endif; ?>
        </div>
        <div class="col-sm-6 col-12">
          <?php if ($page['top-header-soc']): ?>
            <?php print render($page['top-header-soc']); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <nav class="bottom-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-12">
          <?php if ($page['bottom-header-logo']): ?>
            <?php print render($page['bottom-header-logo']); ?>
          <?php endif; ?>
        </div>
        <div class="col-sm-9 col-12">
          <ul class="nav navbar-nav navbar header-menu pull-right">
            <?php if ($page['bottom-header-menu']): ?>
              <?php print render($page['bottom-header-menu']); ?>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>
<section class="site-content">
  <div class="strip"></div>
  <div class="container">
    <h1 class="text-center"><?php print $title ?></h1>
    <div class="row">
      <div class="col-xl-5 col-sm-4 col-12">
        <?php if ($page['front-slider']): ?>
          <?php print render($page['front-slider']); ?>
        <?php endif; ?>
      </div>
      <div class="col-xl-6 col-xl-offset-1 col-sm-7 col-sm-offset-1 col-12">
        <?php if ($page['front-content']): ?>
          <?php print render($page['front-content']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<section class="feedback">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-xl-offset-6 col-lg-7 col-lg-offset-5 col-md-12">
        <?php if ($page['feedback']): ?>
          <?php print render($page['feedback']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 col-12 text-sm-left text-center">
        <?php if ($page['footer-copyright']): ?>
          <?php print render($page['footer-copyright']); ?>
        <?php endif; ?>
      </div>
      <div class="col-sm-7 col-12 text-sm-left text-center">
        <?php if ($page['footer-mail']): ?>
          <?php print render($page['footer-mail']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
