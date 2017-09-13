  {{-- FORM ENTRY DATA --}}
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      @include('components.admin.cek_dokumen.tambah')
    </div>
    {{-- END --}}
  </div>
    {{-- FORM LIST DATA --}}
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        @include('components.admin.cek_dokumen.data')
      </div>
    </div>
    {{-- END --}}

@include('components.admin.cek_dokumen.assets')