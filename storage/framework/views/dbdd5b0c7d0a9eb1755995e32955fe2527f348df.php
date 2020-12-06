<?php $__env->startSection('search',route('menu.user.search')); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-12">
          <div class="mdc-card">
            <h6 class="card-title">Register</h6>
            <form action="<?php echo e(route('menu.user.store')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop ">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <select name="level" class="mdc-text-field__input" id="lev" required>
                        <option value="" disabled selected>Choose Level</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                        <option value="manager">Manager</option>
                      </select>
                      <?php if($errors->has('level')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('level')); ?></strong>
                      <?php endif; ?>
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="username" id="text-field-hero-input" required>
                      <?php if($errors->has('username')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('username')); ?></strong>
                      <?php endif; ?>

                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Username</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>

                  </div>
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="password" type="password" id="text-field-hero-input" required>
                      <?php if($errors->has('password')): ?>
                      <strong class="text-warning"><?php echo e($errors->first('password')); ?></strong>
                      <?php endif; ?>
                      <div class="mdc-notched-outline">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                          <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.969919748761058; --mdc-ripple-fg-translate-start:-26.600006103515625px, -21px; --mdc-ripple-fg-translate-end:18.816665649414062px, -10px;">
                  Register
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
                        <th>Level</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                      <tr>
                        <td><?php echo e($nomor++.'.'); ?></td>
                        <td><?php echo e($user->level); ?></td>
                        <td><?php echo e($user->username); ?></td>
                        <td>Dilindungi</td>
                        <td>
                          <form action="<?php echo e(route('menu.user.delete', $user->id)); ?>" method="post">
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
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\POS\resources\views/main/admin/users/index.blade.php ENDPATH**/ ?>