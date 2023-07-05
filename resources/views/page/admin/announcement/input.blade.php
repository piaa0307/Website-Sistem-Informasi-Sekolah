<style>
  .trix-button-group.trix-button-group--file-tools {
    display: none;
  }

</style>
<div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
  style="background-color: #663259;background-size: auto 100%; background-image: url({{ asset('keenthemes/media/misc/taieri.svg') }})">
  <!--begin::body-->
  <div class="card-body container pt-10 pb-8">
    <!--begin::Title-->
    <ol class="breadcrumb text-muted fs-6 fw-bold">
      <li class="breadcrumb-item pe-3 text-white">Data Pengumuman</li>
      <li class="breadcrumb-item px-3 text-white">
        @if ($announcement->id)
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
                <label for="title" class="required form-label">Judul Pengumuman</label>
                <input type="text" name="title" class="form-control form-control-solid" placeholder="Masukkan judul"
                  value="{{ old('title', $announcement->title) }}" />
              </div>
            </div>
            <div class="col-sm-12 col-md-6">
              <div class="mb-10">
                <label for="image" class="form-label">Gambar/Foto Pengumuman</label>
                <input type="file" name="image" id="image" class="form-control form-control-solid"
                  onchange="previewImage()" />
                @if ($announcement->image)
                  <img src="{{ asset('assets/announcement-image/' . $announcement->image) }}"
                    alt="{{ $announcement->title }}" width="100" class="image-preview my-2">
                @else
                  <img width="100" src="{{ asset('assets/announcement-image/default-image-post.svg') }}"
                    class="image-preview my-2">
                @endif
                <script>
                  function previewImage() {
                    const image = document.querySelector('#image');
                    const imgPreview = document.querySelector('.image-preview');

                    imgPreview.style.display = 'block';

                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);
                    oFReader.onload = function(e) {
                      imgPreview.src = e.target.result;
                    }
                  }
                </script>
              </div>
            </div>
            <div class="col-sm-12 col-md-12">
              <div class="mb-10">
                <label for="description" class="required form-label">Deskripsi</label>
                <input id="x" type="hidden" name="description">
                <trix-editor input="x"></trix-editor>
              </div>
            </div>
            <div class="min-w-150px text-end">
              @if ($announcement->id)
                <button id="tombol_simpan"
                  onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.announcement.update', $announcement->id) }}','PATCH','Simpan');"
                  class="btn btn-primary">Simpan</button>
              @else
                <button id="tombol_simpan"
                  onclick="handle_upload('#tombol_simpan','#form_input','{{ route('admin.announcement.store') }}','POST','Simpan');"
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
