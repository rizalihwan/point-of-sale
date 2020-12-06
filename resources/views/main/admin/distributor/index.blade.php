@extends('layouts.dashboard.app')

@section('search',route('menu.distributor.search'))
@section('content')
<div class="page-wrapper mdc-toolbar-fixed-adjust">
  <main class="content-wrapper">
    <div class="mdc-layout-grid">
      <div class="mdc-layout-grid__inner">
        <div class="mdc-layout-grid__cell--span-12">
          <div class="mdc-card">
            <h6 class="card-title">Distributor</h6>
            <form action="{{ route('menu.distributor.store') }}" method="post">
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
                      <input class="mdc-text-field__input" name="phone" required id="text-field-hero-input">
                      @if($errors->has('phone'))
                      <strong class="text-warning">{{ $errors->first('phone') }}</strong>
                      @endif
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
                      @if($errors->has('address'))
                      <strong class="text-warning">{{ $errors->first('address') }}</strong>
                      @endif
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
                      @php
                      $nomor = 1;
                      @endphp
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    @foreach ($distributors as $distributor)
                    <tbody>
                      <tr>
                        <td>{{ $nomor++.'.' }}</td>
                        <td>{{ $distributor->name }}</td>
                        <td>{{ $distributor->address }}</td>
                        <td>{{ $distributor->phone }}</td>
                        <td>
                          <a href="{{ route('menu.distributor.edit', $distributor->id) }}"><button class="mdc-button mdc-button--unelevated filled-button--warning mdc-ripple-upgraded">Edit</button></a>

                        </td>
                        <td>
                          <form action="{{ route('menu.distributor.delete', $distributor->id) }}" method="post">
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