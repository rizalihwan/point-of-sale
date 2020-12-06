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
            <form action="{{ route('menu.goods.store') }}" method="post">
              @csrf
              <div class="template-demo">
                <div class="mdc-layout-grid__inner">
                  <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                    <div class="mdc-text-field mdc-text-field--outlined">
                      <input class="mdc-text-field__input" name="name" required id="text-field-hero-input">
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
                        <option value="" disabled selected>Choose Merk</option>
                        @foreach ($merks as $merk)
                        <option value="{{ $merk->id }}">{{ $merk->merk }}</option>
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
                        <option value="" disabled selected>Choose Distributor</option>
                        @foreach ($distributors as $distributor)
                        <option value="{{ $distributor->id }}">{{ $distributor->name }}</option>
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
                      <input class="mdc-text-field__input" name="price" type="number" required id="text-field-hero-input">
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
                      <input class="mdc-text-field__input" name="stock" type="number" required id="text-field-hero-input">
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
                      <input class="mdc-text-field__input" name="description" required id="text-field-hero-input">
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
                  Save Data
                </button>
              </div>
            </form>
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
                        <th>Merk</th>
                        <th>Distributor</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Description</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    @foreach ($goods as $goods)
                    <tbody>
                      <tr>
                        <td>{{ $nomor++.'.' }}</td>
                        <td>{{ $goods->created_at->format('d F, Y') }}</td>
                        <td>{{ $goods->name }}</td>
                        <td>{{ $goods->merk->merk }}</td>
                        <td>{{ $goods->distributor->name }}</td>
                        <td>{{ $goods->price }}</td>
                        <td>{{ $goods->stock }}</td>
                        <td>{{ $goods->description }}</td>
                        <td>
                          <a href="{{ route('menu.goods.edit', $goods->id) }}"><button class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Edit</button></a>

                        </td>
                        <td>
                          <form action="{{ route('menu.goods.delete', $goods->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="mdc-button mdc-button--unelevated filled-button--danger mdc-ripple-upgraded" onclick="return confirm('Are You Sure?');">Delete</button>
                          </form>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
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
@endsection