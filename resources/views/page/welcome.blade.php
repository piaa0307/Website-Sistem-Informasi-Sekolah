<x-guest-layout title="Welcome to {{ config('app.name') }}">
  <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-20">
    <!--begin::Logo-->
    <a href="javascript:;" class="mb-10 pt-lg-20">
      <img alt="Logo" src="{{ asset('img/logo.png') }}" class="h-100px mb-5" />
    </a>
    <!--end::Logo-->
    <!--begin::Wrapper-->
    <div class="pt-lg-10">
      <!--begin::Logo-->
      <h1 class="fw-bolder fs-2qx text-dark mb-7">WEBSITE SEKOLAH</h1>
      <!--end::Logo-->
      <!--begin::Message-->
      <div class="fw-bold fs-3 text-gray-400 mb-15">
        SMAN 1 SIANTAR NARUMONDA
      </div>
      <!--end::Message-->
      <!--begin::Action-->
      <div class="text-center">
        <a href="admin/auth" class="btn btn-lg btn-danger fw-bolder m-2 w-200px">Log in Admin</a>
        <a href="guru/auth" class="btn btn-lg btn-dark fw-bolder m-2 w-200px">Log in Guru</a>
        <a href="siswa/auth" class="btn btn-lg btn-primary fw-bolder m-2 w-200px">Log in Siswa</a>
      </div>
      <!--end::Action-->
    </div>
    <!--end::Wrapper-->
  </div>
</x-guest-layout>
