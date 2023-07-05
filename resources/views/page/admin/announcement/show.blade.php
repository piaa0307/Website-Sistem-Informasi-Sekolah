<x-app-layout title="{{ $announcement->title }}">
  <!--begin::Search form-->
  <div id="content_list">
    <div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
      style="background-color: #663259;background-size: auto 100%; background-image: url({{ asset('keenthemes/media/misc/taieri.svg') }})">
      <!--begin::body-->
      <div class="card-body container pt-10 pb-8">
        <!--begin::Title-->
        <div class="d-flex align-items-center">
          <h1 class="fw-bold me-3 text-white">Menampilkan : {{ $announcement->title }}</h1>
          <span class="fw-bold text-white opacity-50"></span>
        </div>
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
            <div class="row mb-7">
              <!--begin::Label-->
              <div class="col-sm-4 col-md-4 text-center mb-4">
                <a href="{{ asset('assets/announcement-image/' . $announcement->image) }}"
                  title="Click to view image">
                  <img src="{{ asset('assets/announcement-image/' . $announcement->image) }}"
                    alt="{{ $announcement->title }}"
                    style="object-fit: cover; object-position: top; max-height: 600px; width: 100%;">
                </a>

              </div>
              <div class="col-sm-8 col-md-8 mb-4">
                <h2 class="user-select-none">{{ $announcement->title }}</h2>
                <div class="d-flex flex-wrap justify-content-between">
                  <div class="me-2 user-select-none">
                    <span><i class="fa fas fa-clock me-2"></i>Diposting pada
                      {{ $announcement->created_at->diffForHumans() }}</span>
                  </div>
                  <div class="me-2 user-select-none">
                    <span><i class="fa fas fa-user me-2"></i>Oleh: {{ $announcement->user->name }}</span>
                  </div>
                </div>
                <p class="mt-7">{!! $announcement->description !!}</p>
              </div>
              <!--end::Col-->
            </div>
            <!--end::Row-->
          </div>
          <div class="card-footer text-end">
            <button onclick="history.back()" class="btn btn-primary"><i class="fa fas fa-arrow-left me-1"></i>
              Kembali</button>
          </div>
          <!--end::Card body-->
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
  </div>
  <div id="content_input"></div>

</x-app-layout>