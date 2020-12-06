<?php $__env->startSection('content'); ?>
<div class="main-wrapper">
    <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
      <main class="auth-page">
        <div class="mdc-layout-grid">
          <div class="mdc-layout-grid__inner">
            <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
              <div class="mdc-card">
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <b style="color: red;"><?php echo e($message); ?></b>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <b style="color: red;"><?php echo e($message); ?></b>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                  <div class="mdc-layout-grid">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-text-field w-100">
                          <input class="mdc-text-field__input" name="username" id="text-field-hero-input" <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> value="<?php echo e(old('username')); ?>" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> autofocus required>
                          <div class="mdc-line-ripple"></div>
                          <label for="text-field-hero-input" class="mdc-floating-label">Username</label>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-text-field w-100">
                          <input class="mdc-text-field__input" name="password" type="password" id="text-field-hero-input" required>
                          <div class="mdc-line-ripple"></div>
                          <label for="text-field-hero-input" class="mdc-floating-label">Password</label>
                        </div>
                      </div>
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <button type="submit" class="mdc-button mdc-button--success text-white w-100" style="border-radius: 30px;">
                          Login
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
          </div>
        </div>
      </main>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/POS/resources/views/auth/login.blade.php ENDPATH**/ ?>