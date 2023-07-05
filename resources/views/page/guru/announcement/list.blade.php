<table class="table table-rounded table-striped border gy-7 gs-7">
  <thead>
    <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
      <th>No.</th>
      <th>Judul</th>
      <th>Gambar/Foto</th>
      <th>Tanggal Posting</th>
      <th>Dibuat Oleh</th>
    </tr>
  </thead>
  <tbody>
    @isset($collection)
      @foreach ($collection as $item)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><a href="announcement/{{ $item->id }}">{{ $item->title }}</a></td>
          <td>
            <a href="{{ asset('assets/announcement-image/' . $item->image) }}" target="_blank" rel="noopener noreferrer"
              title="Click to view image">
              <img src="{{ asset('assets/announcement-image/' . $item->image) }}"
                alt="Announcement Image for {{ $item->title }}" height="200" loading="lazy">
            </a>
          </td>
          <td>{{ $item->created_at }}</td>
          <td>{{ $item->user->name }}</td>
        </tr>
      @endforeach
    @endisset

  </tbody>
</table>
@isset($collection)
  {{ $collection->links('theme.app.pagination') }}
@endisset
