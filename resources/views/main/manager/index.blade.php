@extends('layouts.dashboard.app')

@section('content')
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
                                            @php
                                            $nomor = 1;
                                            @endphp
                                            <tr>
                                                <th>#</th>
                                                <th>Date Of Entry</th>
                                                <th>Goods Id</th>
                                                <th>User Id</th>
                                                <th>Stock</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        @foreach($transactions as $transaction)
                                        <tbody>
                                            <tr>
                                                <td>{{ $nomor++.'.' }}</td>
                                                <td>{{ $transaction->created_at->format('d F, Y') }}</td>
                                                <td>{{ $transaction->goods_id }}</td>
                                                <td>{{ $transaction->user_id }}</td>
                                                <td>{{ $transaction->stock }}</td>
                                                <td>{{ $transaction->total }}</td>

                                            </tr>
                                        </tbody>
                                        @endforeach
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
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom">{{ $stock }}</h5>
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
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom" id="total">{{ $total }}</h5>
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
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom">{{ $count }}</h5>
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
                            <h5 class="font-weight-light pb-2 mb-1 border-bottom">{{ $goods }}</h5>
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
                                            @php
                                            $nomor = 1;
                                            @endphp
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
                                        @foreach($reports as $report)
                                        <tbody>
                                            <tr>
                                                <td>{{ $nomor++.'.' }}</td>
                                                <td>{{ $report->created_at->format('d F, Y') }}</td>
                                                <td>{{ $report->name }}</td>
                                                <td>{{ $report->price }}</td>
                                                <td>{{ $report->stock }}</td>
                                                <td>{{ $report->description }}</td>
                                                <td>{{ $report->input }}</td>
                                                <td>{{ $report->money }}</td>
                                                <td>{{ $report->total }}</td>
                                                <td>{{ $report->returns }}</td>

                                            </tr>
                                        </tbody>
                                        @endforeach
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
                                            @php
                                            $nomor = 1;
                                            @endphp
                                            <tr>
                                                <th>#</th>
                                                <th><a href="{{ route('menu.manager.date') }} " class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Date Of Entry</a></th>
                                                <th>Name</th>
                                                <th>Merk</th>
                                                <th>Distributor</th>
                                                <th>Price</th>
                                                <th><a href="{{ route('menu.manager.stock') }}" class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Stock</a></th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        @foreach ($goodst as $goods)
                                        <tbody>
                                            <tr>
                                                <td>{{ $goods->id }}</td>
                                                <td>{{ $goods->created_at->format('d F, Y') }}</td>
                                                <td>{{ $goods->name }}</td>
                                                <td>{{ $goods->merk->merk }}</td>
                                                <td>{{ $goods->distributor->name }}</td>
                                                <td>{{ $goods->price }}</td>
                                                <td>{{ $goods->stock }}</td>
                                                <td>{{ $goods->description }}</td>
                                            </tr>
                                        </tbody>
                                        @endforeach
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

@endsection