<?php $__env->startSection('search',route('menu.distributor.search')); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-12">
          <div class="mdc-card">
            <h6 class="card-title">Distributor</h6>
            <form action="<?php echo e(route('menu.distributor.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="name" required id="text-field-hero-input">
                      <?php if($errors->has('name')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('name')); ?></strong>
                      <?php endif; ?>
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="phone" required id="text-field-hero-input">
                      <?php if($errors->has('phone')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('phone')); ?></strong>
                      <?php endif; ?>
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Phone</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="address" required id="text-field-hero-input">
                      <?php if($errors->has('address')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('address')); ?></strong>
                      <?php endif; ?>
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Address</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.969919748761058; --mdc-ripple-fg-translate-start:-26.600006103515625px, -21px; --mdc-ripple-fg-translate-end:18.816665649414062px, -10px;">
                  Save Data
                </button>
              </div>
            </form>
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
              <div class="mdc-card p-0">
                <div class="table-responsive">
                  <table class="table table-hoverable">
                    <thead>
                      <?php
                      $nomor = 1;
                      ?>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <?php $__currentLoopData = $distributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                      <tr>
                        <td><?php echo e($nomor++.'.'); ?></td>
                        <td><?php echo e($distributor->name); ?></td>
                        <td><?php echo e($distributor->address); ?></td>
                        <td><?php echo e($distributor->phone); ?></td>
                        <td>
                          <a href="<?php echo e(route('menu.distributor.edit', $distributor->id)); ?>"><button class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Edit</button></a>

                        </td>
                        <td>
                          <form action="<?php echo e(route('menu.distributor.delete', $distributor->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="mdc-button mdc-button--unelevated filled-button--danger mdc-ripple-upgraded" onclick="return confirm('Are You Sure?');">Delete</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/POS/resources/views/main/admin/distributor/index.blade.php ENDPATH**/ ?>