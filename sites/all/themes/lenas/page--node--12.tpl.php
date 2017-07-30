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
    <div class="row">
      <div class="col-12">
        <?php if ($page['right-side']): ?>
          <?php print render($page['right-side']); ?>
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
