
<?php $__env->startSection('content'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Goods</h6>
                        <?php if($pay = Session::get('pay')): ?>
                        <form action="<?php echo e(route('menu.cashier.purchase')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="id" value="<?php echo e($pay->id); ?>">
                            <div class="template-demo">
                                <div class="mdc-layout-grid__inner">
                                    <!-- name     -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" value="<?php echo e($pay->name); ?>" readonly name="name" required id="text-field-hero-input">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="text-field-hero-input" class="mdc-floating-label">Name</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- price -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="price" value="<?php echo e($pay->price); ?>" readonly type="number" required id="price">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="price" class="mdc-floating-label">Price</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- stock -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                        <input class="mdc-text-field__input" name="stock" value="<?php echo e($pay->stock); ?>" readonly type="hidden" required id="stock_hidden">    
                                        <input class="mdc-text-field__input" name="stock" value="<?php echo e($pay->stock); ?>" readonly type="number" required id="stock">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="stock" class="mdc-floating-label">Stock</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- description -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="description" readonly value="<?php echo e($pay->description); ?>" required id="description">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="description" class="mdc-floating-label">Description</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="input" oninput="sum()" type="number" required id="input">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="" class="mdc-floating-label">Input Stock</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- money -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="money" type="number" oninput="pay()" required id="money">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="" class="mdc-floating-label">Money</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- total -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="total" value="0" type="number" required id="total">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="" class="mdc-floating-label">Total</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- returns -->
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="returns" value="0" type="number" required id="returns">
                                            <div class="mdc-notched-outline">
                                                <div class="mdc-notched-outline__leading"></div>
                                                <div class="mdc-notched-outline__notch">
                                                    <label for="" class="mdc-floating-label">Return</label>
                                                </div>
                                                <div class="mdc-notched-outline__trailing"></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                                <button class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" id="button" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.969919748761058; --mdc-ripple-fg-translate-start:-26.600006103515625px, -21px; --mdc-ripple-fg-translate-end:18.816665649414062px, -10px;">
                                    Purchase
                                </button>
                            </div>
                        </form>
                        <script>

                            window.onload = function() {
                                document.getElementById('button').disabled = true
                            }
                            function pay() {
                                let money = document.getElementById('money');
                                let returns = document.getElementById('returns');
                                returns.value = parseInt(money.value) - parseInt(document.getElementById('total').value);
                            }
                            function sum() {
                                let stock = document.getElementById('stock_hidden').value
                                let input = document.getElementById('input').value
                                let price = document.getElementById('price').value
                                total = parseInt(stock) - parseInt(input)
                                result = parseInt(price) * parseInt(input)
                                if (!isNaN(total)) {
                                    if (total < 0 || input < 0) {
                                        document.getElementById('total').value = '0'
                                        document.getElementById('stock').value = '0'
                                    } else {
                                        document.getElementById('stock').value = total
                                        document.getElementById('total').value = result
                                    }
                                }
                            }

                            document.addEventListener('input', function() {
                                let total = document.getElementById('total').value
                                let returns = document.getElementById('returns').value;
                                if (parseInt(total) <= 0 || parseInt(returns) < 0 || document.getElementById('money').value == 0) {
                                    document.getElementById('button').disabled = true
                                } else {

                                    document.getElementById('button').disabled = false
                                }
                            })

                            function rupiah() {
                                angka = document.getElementById('price').value
                                let reverse = angka.toString().split('').reverse().join('')
                                ribuan = reverse.match(/\d{1,3}/g)
                                ribuan = ribuan.join(',').split('').reverse().join('')
                                return ribuan
                            }
                        </script>

                        <?php endif; ?>
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
                                                <th>Date Of Entry</th>
                                                <th>Name</th>
                                                <th>Merk</th>
                                                <th>Distributor</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php $__currentLoopData = $goods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $good): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($nomor++.'.'); ?></td>
                                                <td><?php echo e($good->created_at->format('d F, Y')); ?></td>
                                                <td><?php echo e($good->name); ?></td>
                                                <td><?php echo e($good->merk->merk); ?></td>
                                                <td><?php echo e($good->distributor->name); ?></td>
                                                <td><?php echo e($good->price); ?></td>
                                                <td><?php echo e($good->stock); ?></td>
                                                <td><?php echo e($good->description); ?></td>
                                                <td><a href="<?php echo e(route('menu.cashier.pay',$good->id)); ?>" class="mdc-button mdc-button--unelevated filled-button--success mdc-ripple-upgraded" style="--mdc-ripple-fg-size:56px; --mdc-ripple-fg-scale:1.969919748761058; --mdc-ripple-fg-translate-start:-26.600006103515625px, -21px; --mdc-ripple-fg-translate-end:18.816665649414062px, -10px;">Pay<i class="material-icons">add</i></a>
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
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\POS\resources\views/main/cashier/home.blade.php ENDPATH**/ ?>