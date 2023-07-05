<x-app-layout title="Dashboard">
  <!--begin::Search form-->
  <div id="content_list">
    <div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover"
      style="background-color: #663259;background-size: auto 100%; background-image: url({{ asset('keenthemes/media/misc/taieri.svg') }})">
      <!--begin::body-->
      <div class="card-body container pt-10 pb-8">
        <!--begin::Title-->
        <div class="d-flex align-items-center">
          <h1 class="fw-bold me-3 text-white">Selamat datang kembali, {{ Auth::user()->name }}</h1>
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

        <div class="row mb-7">
          <!--begin::Label-->
          <div class="col-sm-12 col-md-6 mb-4">
            <h4>Pengumuman</h4>
            <hr>
            {{-- @dd($announcements) --}}
            @if ($announcements->count() > 0)
              <div class="card my-3 p-4 mt-4">
                <div class="row no-gutters">
                  <div class="col-sm-4 col-md-4 pb-4">
                    @if ($announcements[0]->image)
                      <img src="{{ asset('assets/announcement-image/' . $announcements[0]->image) }}"
                        style="object-fit: cover; object-position:top; max-height: 280px;" class="card-img-top"
                        alt="{{ $announcements[0]->title }}">
                    @else
                      <img src="{{ asset('assets/announcement-image/default-image-post.svg') }}"
                        class="card-img-top" alt="{{ $announcements[0]->title }}">
                    @endif
                  </div>
                  <div class="col-sm-8 col-md-8">
                    <div class="card-body p-0">
                      <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                        <a class="h3 card-title text-break"
                          href="announcement/{{ $announcements[0]->id }}">{{ $announcements[0]->title }}</a>
                        <span class="badge badge-danger d-flex align-items-center">Terbaru</span>
                      </div>
                      {{-- @dd($announcements[0]) --}}
                      <p class="text-small text-muted">Diposting
                        {{ $announcements[0]->created_at->diffForHumans() }}</p>
                      <p class="user-select-none"><i
                          class="fa fas fa-user me-2"></i>{{ $announcements[0]->user->name }}</p>
                      </p>
                      <a href="announcement/{{ $announcements[0]->id }}" class="btn btn-primary mb-4"><i
                          class="fa fas fa-eye me-1"></i>Lihat</a>
                    </div>
                  </div>
                </div>
              </div>
            @else
              <p class="text-muted fs-4 text-center">No data for display.</p>
            @endif
          </div>
          <div class="col-sm-12 col-lg-6 mb-4">
            <h4>Lainnya</h4>
            <hr>
            <div class="row" style="margin-top: -10px;">
              @foreach ($announcements->skip(1) as $announcement)
                <div class="col-12 col-sm-6 mb-4">
                  <div class="card my-3 p-4 h-100">
                    @if ($announcement->image)
                      <img src="{{ asset('assets/announcement-image/' . $announcement->image) }}"
                        style="object-fit: cover; object-position:top; max-height: 100px; max-width: inherit;"
                        class="card-img-top pb-4" alt="{{ $announcement->title }}">
                    @else
                      <img src="{{ asset('assets/announcement-image/default-image-post.svg') }}"
                        class="card-img-top pb-4" alt="{{ $announcement->title }}">
                    @endif
                    <div class="card-body p-0">
                      <a class="h5 card-title text-break"
                        href="announcement/{{ $announcement->id }}">{{ $announcement->title }}</a>
                      <p class="text-muted"><small>Diposting
                          {{ $announcement->created_at->diffForHumans() }}</small></p>
                      </p>
                      <p class="user-select-none"><small><i
                            class="fa fas fa-user me-2"></i>{{ $announcement->user->name }}</small></p>
                      <a href="announcement/{{ $announcement->id }}"
                        class="btn btn-sm btn-primary w-100 mt-4 py-4"><i class="fa fas fa-eye me-1"></i>Lihat</a>
                    </div>
                  </div>
                </div>
              @endforeach
              <div class="col-12 mt-4">
                <a href="announcement" class="h5 btn btn-primary w-100">Lihat daftar pengumuman <i
                    class="fa fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->

        <div class="row mb-7">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-dark d-flex align-items-center py-0">
                <h5 class="text-white">Jumlah Login Siswa Kelas X</h5>
              </div>
              <div class="card-body p-2 chart-body">
                <canvas id="chartKelasX" style="position: relative; height:60vh; width:100%;"></canvas>
              </div>
            </div>
          </div>
        </div>


        <div class="row mb-7">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-dark d-flex align-items-center py-0">
                <h5 class="text-white">Jumlah Login Siswa Kelas XI</h5>
              </div>
              <div class="card-body p-2 chart-body">
                <canvas id="chartKelasXI" style="position: relative; height:60vh; width:100%;"></canvas>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header bg-dark d-flex align-items-center py-0">
                <h5 class="text-white">Jumlah Login Siswa Kelas XII</h5>
              </div>
              <div class="card-body p-2 chart-body">
                <canvas id="chartKelasXII" style="position: relative; height:60vh; width:100%;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end::Container-->
    </div>
  </div>
  <div id="content_input"></div>
  @section('custom_js')
    <script>
      var ctx = document.getElementById("chartKelasX");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
            @foreach ($kelas_x as $x)
              '{{ $x->room->title }}',
            @endforeach
          ],
          datasets: [{
            label: 'Jumlah login',
            data: [
              @foreach ($kelas_x_count as $x)
                {{ $x->c }},
              @endforeach
            ],
            fill: true,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0,
          }]
        },
        options: {
          autoPadding: true,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                stepSize: 10,
                suggestedMin: 0,
              }
            }],
            xAxes: {
              grid: {
                offset: true
              }
            }
          },
          animations: {
            tension: {
              duration: 1000,
              easing: 'linear',
              from: 1,
              to: 0,
              loop: true
            }
          },
        }
      });
    </script>

    <script>
      var ctxi = document.getElementById("chartKelasXI");
      var myChart = new Chart(ctxi, {
        type: 'line',
        data: {
          labels: [
            @foreach ($kelas_xi as $xi)
              '{{ $xi->room->title }}',
            @endforeach
          ],
          datasets: [{
            label: 'Jumlah login',
            data: [
              @foreach ($kelas_xi_count as $xi)
                {{ $xi->c }},
              @endforeach
            ],
            fill: true,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0,
          }]
        },
        options: {
          autoPadding: true,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                stepSize: 10,
                suggestedMin: 0,
              }
            }],
            xAxes: {
              grid: {
                offset: true
              }
            }
          },
          animations: {
            tension: {
              duration: 1000,
              easing: 'linear',
              from: 1,
              to: 0,
              loop: true
            }
          },
        }
      });
    </script>

    <script>
      var ctxii = document.getElementById("chartKelasXII");
      var myChart = new Chart(ctxii, {
        type: 'line',
        data: {
          labels: [
            @foreach ($kelas_xii as $xii)
              '{{ $xii->room->title }}',
            @endforeach
          ],
          datasets: [{
            label: 'Jumlah login',
            data: [
              @foreach ($kelas_xii_count as $xii)
                {{ $xii->c }},
              @endforeach
            ],
            fill: true,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0,
          }]
        },
        options: {
          autoPadding: true,
          responsive: true,
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
                stepSize: 10,
                suggestedMin: 0,
              }
            }],
            xAxes: {
              grid: {
                offset: true
              }
            }
          },
          animations: {
            tension: {
              duration: 1000,
              easing: 'linear',
              from: 1,
              to: 0,
              loop: true
            }
          },
        }
      });
    </script>
  @endsection
</x-app-layout>
