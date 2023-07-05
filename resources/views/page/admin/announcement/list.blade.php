<table class="table table-rounded table-striped border gy-7 gs-7">
  <thead>
    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
      <th>No.</th>
      <th>Judul</th>
      <th>Gambar/Foto</th>
      <th>Pembuat</th>
      <th>Tanggal Posting</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @isset($collection)
      @foreach ($collection as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><a href="announcement/{{ $item->id }}">{{ $item->title }}</a></td>
          <td><a href="{{ asset('assets/announcement-image/' . $item->image) }}" target="_blank"
              rel="noopener noreferrer" title="Click to view image">
              <img src="{{ asset('assets/announcement-image/' . $item->image) }}"
                alt="Announcement Image for {{ $item->title }}" height="200" loading="lazy">
            </a>
          </td>
          <td>
            @if ($item->created_by == Auth::user()->id)
              Saya
            @else
              {{ $item->user->name }}
            @endif
          </td>
          <td>{{ $item->created_at }}</td>
          <td>
            @if ($item->created_by == Auth::user()->id)
              <a href="javascript:;" onclick="load_input('{{ route('admin.announcement.edit', $item->id) }}');"
                class="btn btn-icon btn-warning"><i class="las la-edit fs-2"></i></a>
              <a href="javascript:;" onclick="handle_delete('{{ route('admin.announcement.destroy', $item->id) }}');"
                class="btn btn-icon btn-danger"><i class="las la-trash fs-2"></i></a>
            @endif
          </td>
        </tr>
      @endforeach
    @endisset

  </tbody>
</table>
@isset($collection)
  {{ $collection->links('theme.app.pagination') }}
@endisset
