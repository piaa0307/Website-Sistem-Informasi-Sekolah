<div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
  style="background-color: #663259;background-size: auto 100%; background-image: url({{ asset('keenthemes/media/misc/taieri.svg') }})">
  <!--begin::body-->
  <div class="card-body container pt-10 pb-8">
    <!--begin::Title-->
    <ol class="breadcrumb text-muted fs-6 fw-bold">
      <li class="breadcrumb-item pe-3 text-white">Data Pelajaran</li>
      <li class="breadcrumb-item px-3 text-white">
        @if ($room->id)
          Update Data
        @else
          Tambah Data
        @endif
      </li>
      <li class="breadcrumb-item pe-3 "><a href="javascript:;" onclick="load_list(1);" class="pe-3 text-white">Kembali</a>
      </li>
    </ol>
    <!--end::Title-->
  </div>
  <!--end::body-->
</div>
<!--end::Search form-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <!--begin::Container-->
  <div class="container" id="kt_content_container">
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10">
      <!--begin::Card body-->
      <div class="card-body p-9">
        <!--begin::Row-->
        <form id="form_input">
          <div class="row mb-7">
            <!--begin::Label-->
            <div class="col-sm-12 col-md-6">
              <div class="mb-10">
                <label for="title" class="required form-label">Nama</label>
                <select name="title" class="form-select form-select-solid">
                  <option value="" selected disabled>Choose options</option>
                  <option value="X IPA 1">X IPA 1</option>
                  <option value="X IPA 2">X IPA 2</option>
                  <option value="X IPA 3">X IPA 3</option>
                  <option value="X IPS 1">X IPS 1</option>
                  <option value="X IPS 2">X IPS 2</option>
                  <option value="X IPS 3">X IPS 3</option>
                  <option value="XI IPA 1">XI IPA 1</option>
                  <option value="IX IPA 2">XI IPA 2</option>
                  <option value="IX IPA 3">XI IPA 3</option>
                  <option value="IX IPS 1">XI IPS 1</option>
                  <option value="IX IPS 2">XI IPS 2</option>
                  <option value="IX IPS 3">XI IPS 3</option>
                  <option value="XII IPA 1">XII IPA 1</option>
                  <option value="XII IPA 2">XII IPA 2</option>
                  <option value="XII IPA 3">XII IPA 3</option>
                  <option value="XII IPS 1">XII IPS 1</option>
                  <option value="XII IPS 2">XII IPS 2</option>
                  <option value="XII IPS 3">XII IPS 3</option>
                </select>
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="mb-10">
                <label for="year" class="required form-label">Tahun</label>
                <input type="tel" id="year" maxlength="4" name="year" class="form-control form-control-solid"
                  placeholder="Tahun" value="{{ $room->year }}" />
              </div>
            </div>
            <div class="min-w-150px text-end">
              @if ($room->id)
                <button id="tombol_simpan"
                  onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.room.update', $room->id) }}','PATCH','Simpan');"
                  class="btn btn-primary">Simpan</button>
              @else
                <button id="tombol_simpan"
                  onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.room.store') }}','POST','Simpan');"
                  class="btn btn-primary">Simpan</button>
              @endif
            </div>
            <!--end::Col-->
          </div>
        </form>
        <!--end::Row-->
      </div>
      <!--end::Card body-->
    </div>
    <!--end::Row-->
  </div>
  <!--end::Container-->
</div>
<script type="text/javascript">
  number_only('year');
</script>
