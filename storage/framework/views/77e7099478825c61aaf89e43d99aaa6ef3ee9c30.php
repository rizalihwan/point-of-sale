<!-- partial:partials/_sidebar.html -->
<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
  <div class="mdc-drawer__content">
    <div class="mdc-list-group">
      <nav class="mdc-list mdc-drawer-menu">
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.home')); ?>">
            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">home</i>
            Dashboard
          </a>
        </div>
        <?php if(auth()->user()->level == 'admin'): ?>
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.user.index')); ?>">
            <i class="material-icons" aria-hidden="true">account_circle</i>
            Users
          </a>
        </div>
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.goods.index')); ?>">
            <i class="material-icons" aria-hidden="true">assignment_turned_in</i>
            Goods
          </a>
        </div>
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.merk.index')); ?>">
            <i class="material-icons" aria-hidden="true">confirmation_number</i>
            Merk
          </a>
        </div>
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.distributor.index')); ?>">
            <i class="material-icons" aria-hidden="true">contacts</i>
            Distributor
          </a>
        </div>
        <?php endif; ?>
        <?php if(auth()->user()->level == 'kasir'): ?>
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.cashier.index')); ?>">
            <i class="material-icons" aria-hidden="true">account_circle</i>
            Cashier
          </a>
        </div>
        <?php endif; ?>
        <?php if(auth()->user()->level == 'manager'): ?>
        <div class="mdc-list-item mdc-drawer-item">
          <a class="mdc-drawer-link" href="<?php echo e(route('menu.manager.index')); ?>">
            <i class="material-icons" aria-hidden="true">assessment</i>
            Report
          </a>
        </div>
        <?php endif; ?>
      </nav>
    </div>
  </div>
</aside>
<?php /**PATH /opt/lampp/htdocs/POS/resources/views/layouts/dashboard/partials/sidebar.blade.php ENDPATH**/ ?>