@php
$role = Auth::user()->role;
$logout = '';
if ($role == 'a') {
    $role = 'Admin';
    $route = route('admin.auth.logout');
} elseif ($role == 'g') {
    $role = 'Guru';
    $route = route('guru.auth.logout');
} elseif ($role == 's') {
    $route = route('siswa.auth.logout');
    $role = 'Siswa';
}
@endphp
<div id="kt_header" style="" class="header bg-white align-items-stretch">
  <!--begin::Container-->
  <div class="container-fluid d-flex align-items-stretch justify-content-between">
    <!--begin::Aside mobile toggle-->
    <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
      <div class="btn btn-icon btn-active-color-primary w-40px h-40px" id="kt_aside_toggle">
        <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
        <span class="svg-icon svg-icon-2x mt-1">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
            viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24" />
              <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
              <path
                d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                fill="#000000" opacity="0.3" />
            </g>
          </svg>
        </span>
        <!--end::Svg Icon-->
      </div>
    </div>
    <!--end::Aside mobile toggle-->
    <!--begin::Mobile logo-->
    <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
      <a href="index.html" class="d-lg-none">
        <img alt="Logo" src="{{ asset('img/logo.png') }}" class="h-30px" />
      </a>
    </div>
    <!--end::Mobile logo-->

    <!--begin::Wrapper-->
    <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1">

      <!--begin::Topbar-->
      <div class="d-flex">
        <!--begin::Toolbar wrapper-->
        <div class="d-flex align-items-center flex-end">

          <!--begin::User-->
          <div class="d-flex align-items-center" id="kt_header_user_menu_toggle">
            <!--begin::Menu wrapper-->
            <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
              data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
              <img src="{{ asset('img/avatar.svg') }}" alt="avatar" class="rounded-circle border shadow-sm" />
            </div>
            <!--begin::Menu-->
            <div
              class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
              data-kt-menu="true">
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <div class="menu-content d-flex align-items-center px-3">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="{{ asset('img/avatar.svg') }}" />
                  </div>
                  <!--end::Avatar-->
                  <!--begin::Username-->
                  <div class="d-flex flex-column">
                    <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::user()->name }}
                      <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ $role }}</span>
                    </div>
                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ Auth::user()->email }}</a>
                  </div>
                  <!--end::Username-->
                </div>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu separator-->
              <div class="separator my-2"></div>
              <!--end::Menu separator-->
              <!--begin::Menu item-->
              <div class="menu-item px-5">
                @if (Auth::user()->role == 'a')
                  <a href="{{ route('admin.profile') }}" class="menu-link px-5">Profil Saya</a>
                @elseif (Auth::user()->role == 'g')
                  <a href="{{ route('guru.profile') }}" class="menu-link px-5">Profil Saya</a>
                @else
                  <a href="{{ route('siswa.profile') }}" class="menu-link px-5">Profil Saya</a>
                @endif
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start"
                data-kt-menu-flip="bottom">
                <a href="#" class="menu-link px-5">
                  <span class="menu-title position-relative">Bahasa
                    <span
                      class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">Bahasa
                      Indonesia
                      <img class="w-15px h-15px rounded-1 ms-2"
                        src="{{ asset('keenthemes/media/flags/indonesia.svg') }}" alt="metronic" /></span></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4 d-none">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="account/settings.html" class="menu-link d-flex px-5 active">
                      <span class="symbol symbol-20px me-4">
                        <img class="rounded-1" src="{{ asset('keenthemes/media/flags/indonesia.svg') }}"
                          alt="metronic" />
                      </span>English</a>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-5 my-1 d-none">
                <a href="account/settings.html" class="menu-link px-5">Account Settings</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-5">
                <a href="{{ $route }}" class="menu-link px-5">Keluar</a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu-->
            <!--end::Menu wrapper-->
          </div>
          <!--end::User -->
          <!--begin::Heaeder menu toggle-->
          <div class="d-flex align-items-center d-lg-none ms-3 me-n1 d-none" title="Show header menu">
            <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
              id="kt_header_menu_mobile_toggle">
              <!--begin::Svg Icon | path: icons/duotone/Text/Toggle-Right.svg-->
              <span class="svg-icon svg-icon-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                  height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M22 11.5C22 12.3284 21.3284 13 20.5 13H3.5C2.6716 13 2 12.3284 2 11.5C2 10.6716 2.6716 10 3.5 10H20.5C21.3284 10 22 10.6716 22 11.5Z"
                      fill="black" />
                    <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd"
                      d="M14.5 20C15.3284 20 16 19.3284 16 18.5C16 17.6716 15.3284 17 14.5 17H3.5C2.6716 17 2 17.6716 2 18.5C2 19.3284 2.6716 20 3.5 20H14.5ZM8.5 6C9.3284 6 10 5.32843 10 4.5C10 3.67157 9.3284 3 8.5 3H3.5C2.6716 3 2 3.67157 2 4.5C2 5.32843 2.6716 6 3.5 6H8.5Z"
                      fill="black" />
                  </g>
                </svg>
              </span>
              <!--end::Svg Icon-->
            </div>
          </div>
          <!--end::Heaeder menu toggle-->
        </div>
        <!--end::Toolbar wrapper-->
      </div>
      <!--end::Topbar-->
    </div>
    <!--end::Wrapper-->
  </div>
  <!--end::Container-->
</div>
