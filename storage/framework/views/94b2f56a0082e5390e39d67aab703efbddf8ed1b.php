<?php $__env->startSection('search',route('menu.merk.search')); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-12">
          <div class="mdc-card">
            <h6 class="card-title">Merk</h6>
            <form action="<?php echo e(route('menu.merk.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="merk" required id="text-field-hero-input">
                      <?php if($errors->has('merk')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('merk')); ?></strong>
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
                        <th>Merk</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <?php $__currentLoopData = $merks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                      <tr>
                        <td><?php echo e($nomor++.'.'); ?></td>
                        <td><?php echo e($merk->merk); ?></td>
                        <td>
                          <a href="<?php echo e(route('menu.merk.edit', $merk->id)); ?>"><button class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Edit</button></a>
                        </td>
                        <td>
                          <form action="<?php echo e(route('menu.merk.delete', $merk->id)); ?>" method="post">
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
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/POS/resources/views/main/admin/merek/index.blade.php ENDPATH**/ ?>