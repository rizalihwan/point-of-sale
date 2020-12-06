@extends('layouts.dashboard.app')

@section('search',route('menu.goods.search'))
@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
    <main class="content-wrapper">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="mdc-layout-grid__cell--span-12">
                    <div class="mdc-card">
                        <h6 class="card-title">Goods</h6>
                        <form action="{{ route('menu.goods.update', $goods->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="template-demo">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-text-field mdc-text-field--outlined">
                                            <input class="mdc-text-field__input" name="name" value="{{ $goods->name }}" required id="text-field-hero-input">
                                            @if($errors->has('name'))
                                            <strong class="text-warning">{{ $errors->first('name') }}</strong>
                                            @endif
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
                                                @foreach ($merks as $merk)
                                                <option {{ $merk->id == $goods->merk_id ? 'selected' : '' }} value="{{ $merk->id }}">{{ $merk->merk }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('merk_id'))
                                            <strong class="text-warning">{{ $errors->first('merk_id') }}</strong>
                                            @endif
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
                                                @foreach ($distributors as $distributor)
                                                <option {{ $distributor->id == $goods->distributor_id ? 'selected' : '' }} value="{{ $distributor->id }}">{{ $distributor->name }}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('distributor_id'))
                                            <strong class="text-warning">{{ $errors->first('distributor_id') }}</strong>
                                            @endif
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
                                            <input class="mdc-text-field__input" name="price" type="number" value="{{ $goods->price }}" required id="text-field-hero-input">
                                            @if($errors->has('price'))
                                            <strong class="text-warning">{{ $errors->first('price') }}</strong>
                                            @endif
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
                                            <input class="mdc-text-field__input" name="stock" type="number" value="{{ $goods->stock }}" required id="text-field-hero-input">
                                            @if($errors->has('stock'))
                                            <strong class="text-warning">{{ $errors->first('stock') }}</strong>
                                            @endif
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
                                            <input class="mdc-text-field__input" name="description" value="{{ $goods->description }}" required id="text-field-hero-input">
                                            @if($errors->has('description'))
                                            <strong class="text-warning">{{ $errors->first('description') }}</strong>
                                            @endif
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
@endsection