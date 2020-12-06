<header class="mdc-top-app-bar">
  <div class="mdc-top-app-bar__row">
    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
      <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
      <span class="mdc-top-app-bar__title">Point Of Sale</span>
      <form action="<?php echo $__env->yieldContent('search'); ?>" method="get">
        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
          <i class="material-icons mdc-text-field__icon">search</i>
          <input class="mdc-text-field__input" name="search" id="text-field-hero-input">
          <div class="mdc-notched-outline">
            <div class="mdc-notched-outline__leading"></div>
            <div class="mdc-notched-outline__notch">
              <label for="text-field-hero-input" class="mdc-floating-label">Search</label>
            </div>
            <div class="mdc-notched-outline__trailing"></div>
          </div>
        </div>
      </form>
    </div>
    <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
      <div class="menu-button-container menu-profile d-none d-md-block">
        <button class="mdc-button mdc-menu-button">
          <span class="d-flex align-items-center">
            <span class="figure">
              <img src="<?php echo e(asset('admin/assets/images/faces/face1.jpg')); ?>" alt="user" class="user">
            </span>
            <span class="user-name"><?php echo e(auth()->user()->username); ?></span>
          </span>
        </button>
        <div class="mdc-menu mdc-menu-surface" tabindex="-1">
          <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              <li class="mdc-list-item" role="menuitem">
                <div class="item-thumbnail item-thumbnail-icon-only">
                  <i class="mdi mdi-settings-outline text-primary"></i>
                </div>
                <div class="item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="item-subject font-weight-normal">Logout</h6>

                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                  </form>
                </div>
              </li>
            </a>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header><?php /**PATH C:\laragon\www\POS\resources\views/layouts/dashboard/partials/navbar.blade.php ENDPATH**/ ?>