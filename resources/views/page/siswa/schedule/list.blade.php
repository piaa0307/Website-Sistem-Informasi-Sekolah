<table class="table table-rounded table-striped border gy-7 gs-7">
  <thead>
    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
      <th>Pelajaran</th>
      <th>Kelas</th>
      <th>Mulai</th>
      <th>Selesai</th>
      <th>Url</th>
      <th>Judul Tugas</th>
      <th>Deskripsi Tugas</th>
      <th>Tenggat Waktu</th>
      <th>File Tugas</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($collection as $item)
      <tr>
        <td>{{ $item->nama_pelajaran }}</td>
        <td>{{ $item->nama_kelas }} - {{ $item->year }}</td>
        <td>{{ $item->start_at->format('H:i') }} | {{ $item->start_at->format('j F Y') }}</td>
        <td>{{ $item->end_at->format('H:i') }} | {{ $item->end_at->format('j F Y') }}</td>
        <td>
          <a href="{{ $item->url }}" target="_blank">Link Meet</a>
        </td>
        <td>
          {{ $item->task->title ?? '' }}
        </td>
        <td>
          {{ $item->task->description ?? '' }}
        </td>
        <td>
          {{-- {{dd($item->task)}} --}}
          @if ($item->task)
            {{ $item->task->due_at->format('j F Y') }} - {{ $item->task->due_at->format('H:i') }}
          @endif
        </td>
        <td>
          @if ($item->task)
            <a href="{{ route('siswa.task.download', $item->task->id) }}" class="btn btn-sm btn-primary"><i
                class="bi bi-download"></i> Download</a>
          @endif
        </td>
        <td>
          @if ($item->st != null)
          @else
            <a href="javascript:;" onclick="handle_get('{{ route('siswa.schedule.attend', $item->id) }}');"
              title="Absensi" data-bs-toggle="tooltip" data-bs-placement="top" class="btn btn-icon btn-dark"><i
                class="bi bi-calendar-date"></i></a>
          @endif
          <a title="Upload Tugas" data-bs-toggle="tooltip" data-bs-placement="top" href="javascript:;"
            onclick="load_detail('{{ route('siswa.schedule.task', $item->id) }}');" class="btn btn-icon btn-info"><i
              class="bi bi-upload"></i></a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $collection->links('theme.app.pagination') }}
