

<?php $__env->startSection('content'); ?>
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Transaction</h6>

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
                                                <th>Goods Id</th>
                                                <th>User Id</th>
                                                <th>Stock</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($nomor++.'.'); ?></td>
                                                <td><?php echo e($transaction->created_at->format('d F, Y')); ?></td>
                                                <td><?php echo e($transaction->goods_id); ?></td>
                                                <td><?php echo e($transaction->user_id); ?></td>
                                                <td><?php echo e($transaction->stock); ?></td>
                                                <td><?php echo e($transaction->total); ?></td>

                                            </tr>
                                        </tbody>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                    <div class="mdc-card info-card info-card--success">
                        <div class="card-inner">
                            <h5 class="card-title">Stock</h5>
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo e($stock); ?></h5>
                            <p class="tx-12 text-muted">48% target reached</p>
                            <div class="card-icon-wrapper">
                                <i class="material-icons">dvr</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                    <div class="mdc-card info-card info-card--danger">
                        <div class="card-inner">
                            <h5 class="card-title">Total</h5>
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom" id="total"><?php echo e($total); ?></h5>
                            <p class="tx-12 text-muted">55% target reached</p>
                            <div class="card-icon-wrapper">
                                <i class="material-icons">attach_money</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                    <div class="mdc-card info-card info-card--primary">
                        <div class="card-inner">
                            <h5 class="card-title">Stock Product</h5>
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo e($count); ?></h5>
                            <p class="tx-12 text-muted">87% target reached</p>
                            <div class="card-icon-wrapper">
                                <i class="material-icons">trending_up</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop mdc-layout-grid__cell--span-4-tablet">
                    <div class="mdc-card info-card info-card--info">
                        <div class="card-inner">
                            <h5 class="card-title">Product</h5>
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom"><?php echo e($goods); ?></h5>
                            <p class="tx-12 text-muted">87% target reached</p>
                            <div class="card-icon-wrapper">
                                <i class="material-icons">credit_card</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Report</h6>

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
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>Description</th>
                                                <th>Much</th>
                                                <th>Money</th>
                                                <th>Total</th>
                                                <th>Returns</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($nomor++.'.'); ?></td>
                                                <td><?php echo e($report->created_at->format('d F, Y')); ?></td>
                                                <td><?php echo e($report->name); ?></td>
                                                <td><?php echo e($report->price); ?></td>
                                                <td><?php echo e($report->stock); ?></td>
                                                <td><?php echo e($report->description); ?></td>
                                                <td><?php echo e($report->input); ?></td>
                                                <td><?php echo e($report->money); ?></td>
                                                <td><?php echo e($report->total); ?></td>
                                                <td><?php echo e($report->returns); ?></td>

                                            </tr>
                                        </tbody>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Goods</h6>
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
                                                <th><a href="<?php echo e(route('menu.manager.date')); ?> " class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Date Of Entry</a></th>
                                                <th>Name</th>
                                                <th>Merk</th>
                                                <th>Distributor</th>
                                                <th>Price</th>
                                                <th><a href="<?php echo e(route('menu.manager.stock')); ?>" class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Stock</a></th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <?php $__currentLoopData = $goodst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goods): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($goods->id); ?></td>
                                                <td><?php echo e($goods->created_at->format('d F, Y')); ?></td>
                                                <td><?php echo e($goods->name); ?></td>
                                                <td><?php echo e($goods->merk->merk); ?></td>
                                                <td><?php echo e($goods->distributor->name); ?></td>
                                                <td><?php echo e($goods->price); ?></td>
                                                <td><?php echo e($goods->stock); ?></td>
                                                <td><?php echo e($goods->description); ?></td>
                                            </tr>
                                        </tbody>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <script>
                    angka = document.getElementById('total').innerHTML
                    let reverse = angka.toString().split('').reverse().join('')
                    ribuan = reverse.match(/\d{1,3}/g)
                    ribuan = ribuan.join(',').split('').reverse().join('')
                    document.getElementById('total').innerHTML = ribuan
                </script>

            </div>
    </main>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/POS/resources/views/main/manager/index.blade.php ENDPATH**/ ?>