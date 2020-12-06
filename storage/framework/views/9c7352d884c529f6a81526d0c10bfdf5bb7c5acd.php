<?php $__env->startSection('search',route('menu.goods.search')); ?>
<?php $__env->startSection('content'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Goods</h6>
                        <form action="<?php echo e(route('menu.goods.update', $goods->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="template-demo">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="name" value="<?php echo e($goods->name); ?>" required id="text-field-hero-input">
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
                                            <select name="merk_id" class="mdc-text-field__input" id="merek" required>
                                                <?php $__currentLoopData = $merks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $merk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e($merk->id == $goods->merk_id ? 'selected' : ''); ?> value="<?php echo e($merk->id); ?>"><?php echo e($merk->merk); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('merk_id')): ?>
                                            <strong class="text-warning"><?php echo e($errors->first('merk_id')); ?></strong>
                                            <?php endif; ?>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <select name="distributor_id" class="mdc-text-field__input" id="distri" required>
                                                <?php $__currentLoopData = $distributors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e($distributor->id == $goods->distributor_id ? 'selected' : ''); ?> value="<?php echo e($distributor->id); ?>"><?php echo e($distributor->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php if($errors->has('distributor_id')): ?>
                                            <strong class="text-warning"><?php echo e($errors->first('distributor_id')); ?></strong>
                                            <?php endif; ?>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="price" type="number" value="<?php echo e($goods->price); ?>" required id="text-field-hero-input">
                                            <?php if($errors->has('price')): ?>
                                            <strong class="text-warning"><?php echo e($errors->first('price')); ?></strong>
                                            <?php endif; ?>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Price</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="stock" type="number" value="<?php echo e($goods->stock); ?>" required id="text-field-hero-input">
                                            <?php if($errors->has('stock')): ?>
                                            <strong class="text-warning"><?php echo e($errors->first('stock')); ?></strong>
                                            <?php endif; ?>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Stock</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="description" value="<?php echo e($goods->description); ?>" required id="text-field-hero-input">
                                            <?php if($errors->has('description')): ?>
                                            <strong class="text-warning"><?php echo e($errors->first('description')); ?></strong>
                                            <?php endif; ?>
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Description</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.969919748761058; --mdc-ripple-fg-translate-start:-26.600006103515625px, -21px; --mdc-ripple-fg-translate-end:18.816665649414062px, -10px;">
                                    Update Data
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/POS/resources/views/main/admin/goods/edit.blade.php ENDPATH**/ ?>