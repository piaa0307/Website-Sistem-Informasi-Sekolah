<x-app-layout title="Profile">
  <div id="content_list">
    <div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
      style="background-color: #663259;background-size: auto 100%; background-image: url({{ asset('keenthemes/media/misc/taieri.svg') }})">
      <!--begin::body-->
      <div class="card-body container pt-10 pb-8">
        <!--begin::Title-->
        <div class="d-flex align-items-center">
          <h1 class="fw-bold me-3 text-white">Profil Saya</h1>
          <span class="fw-bold text-white opacity-50"></span>
        </div>
        <!--end::Title-->
      </div>
      <!--end::body-->
    </div>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
      <!--begin::Container-->
      <div class="container" id="kt_content_container">

        <!--begin::Row-->
        <div class="row mb-7">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 text-center p-4">
                  <img src="{{ asset('img/avatar.svg') }}" class="img-fluid rounded" alt="Avatar"
                    style="max-height: 300px !important;">
                </div>
                <div class="col-md-8">
                  <table class="table">
                    <tr>
                      @if (Auth::user()->role !== 'a')
                        <td class="text-muted" width="200">
                          @if (Auth::user()->role == 'g')
                            NIP
                          @else
                            NISN
                          @endif
                        </td>
                        <td class="fw-bold">
                          @if (Auth::user()->role == 'g')
                            {{ $data->nip ?? '-' }}
                          @else
                            {{ $data->nisn ?? '-' }}
                          @endif
                        </td>
                      @endif
                    </tr>
                    <tr>
                      <td class="text-muted" width="200">Nama Lengkap</td>
                      <td class="fw-bold">{{ $data->name }}</td>
                    </tr>
                    <tr>
                      <td class="text-muted" width="200">Agama</td>
                      <td class="fw-bold">{{ $data->religion ?? '-' }}</td>
                    </tr>
                    <tr>
                      <td class="text-muted" width="200">Tempat & Tanggal Lahir</td>
                      @isset($data->place_birth)
                        <td class="fw-bold">{{ $data->place_birth }}, {{ $data->date_birth }}</td>
                      @else
                        <td>-</td>
                      @endisset
                    </tr>
                    <tr>
                      <td class="text-muted" width="200">No. HP</td>
                      <td class="fw-bold">{{ $data->phone ?? '-' }}</td>
                    </tr>
                    <tr>
                      <td class="text-muted" width="200">Email</td>
                      <td class="fw-bold">{{ $data->email }}</td>
                    </tr>
                    <tr>
                      <td class="text-muted" width="200">Alamat</td>
                      <td class="fw-bold text-break">{{ $data->address ?? '-' }}</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!--end::Row-->

      </div>
      <!--end::Container-->
    </div>
  </div>
</x-app-layout>
