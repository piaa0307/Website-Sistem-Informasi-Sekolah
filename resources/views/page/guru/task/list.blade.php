<table class="table table-rounded table-striped border gy-7 gs-7">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
            <th>Siswa</th>    
            <th>Tugas</th>
            <th>File Tugas</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach ($collection as $item)
            <td>{{$item->task->title}}</td>
            <td>{{$item->siswa->name}}</td>
            <td>
                <a href="{{route('guru.task.tugas',$item->id)}}" class="btn btn-sm btn-primary"><i class="bi bi-download"></i> Download</a>
            </td>
        @endforeach
        </tr>
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}