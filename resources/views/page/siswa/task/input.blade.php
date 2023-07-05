<div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #663259;background-size: auto 100%; background-image: url({{asset('keenthemes/media/misc/taieri.svg')}})">
    <div class="card-body container pt-10 pb-8">
        <ol class="breadcrumb text-muted fs-6 fw-bold">
            <li class="breadcrumb-item pe-3 text-white">Data Pelajaran</li>
            <li class="breadcrumb-item px-3 text-white">
                @if ($task->id)
                    Update Data
                @else
                    Tambah Data
                @endif
            </li>
            <li class="breadcrumb-item pe-3 "><a href="javascript:;" onclick="load_list(1);" class="pe-3 text-white">Kembali</a></li>
        </ol>
    </div>
</div>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container" id="kt_content_container">
        <div class="card mb-5 mb-xl-10">
            <div class="card-body p-9">
                <form id="form_input">
                    <div class="row mb-7">
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="pelajaran" class="required form-label">Pelajaran</label>
                                <select data-control="select2" data-placeholder="Pilih Pelajaran" name="pelajaran" class="form-select form-select-solid">
                                    <option SELECTED DISABLED>Pilih Pelajaran</option>
                                    @foreach ($course as $item)
                                        <option value="{{$item->id}}" {{$task->course_id == $item->id ? 'selected' : ''}}>{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="mb-10">
                                <label for="title" class="required form-label">Judul</label>
                                <input type="text" name="title" class="form-control form-control-solid" placeholder="Judul" value="{{$task->title}}" />
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-10">
                                <label for="description" class="required form-label">Deskripsi</label>
                                <textarea class="form-control form-control-solid" name="description">{{$task->description}}</textarea>
                            </div>
                        </div>
                        <div class="min-w-150px text-end">
                            @if ($task->id)
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('guru.task.update',$task->id)}}','PATCH','Simpan');" class="btn btn-primary">Simpan</button>
                            @else
                            <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#form_input','{{route('guru.task.store')}}','POST','Simpan');" class="btn btn-primary">Simpan</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>