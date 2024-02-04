<!-- View -->
@foreach ($data as $item)
    <!-- Tampilkan data di sini -->
@endforeach

<!-- Tampilkan tombol navigasi pagination -->
{{ $data->links() }}