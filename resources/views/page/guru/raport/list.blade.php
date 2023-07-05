<table class="table table-rounded table-striped border gy-7 gs-7">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
            <th>Nama Siswa</th>    
            <th>Kelas</th>
            <th>Mata Pelajaran</th>
            <th>Kehadiran</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>KKN</th>
            <th>Nilai Akhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $item)
        <tr>
            <td>{{$item->siswa->name}}</td>
            <td>{{$item->room->title}}</td>
            <td>{{$item->course->title}}</td>
            <td>{{$item->kehadiran}}</td>
            <td>{{$item->tugas}}</td>
            <td>{{$item->uts}}</td>
            <td>{{$item->uas}}</td>
            <td>{{$item->kkn}}</td>
            <td>{{$item->akhir}}</td>
            <td>
                <a title="Perbarui" data-bs-toggle="tooltip" data-bs-placement="top" href="javascript:;" onclick="load_input('{{route('guru.raport.list_detail',$item->id)}}');" class="btn btn-icon btn-warning"><i class="las la-edit fs-2"></i></a>
                <a title="Hapus" data-bs-toggle="tooltip" data-bs-placement="top" href="javascript:;" onclick="handle_delete('{{route('guru.raport.destroy',$item->id)}}');" class="btn btn-icon btn-danger"><i class="las la-trash fs-2"></i></a>
                <a href="{{route('guru.raport.generatePDF',$item->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-download"></i> Export PDF</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}