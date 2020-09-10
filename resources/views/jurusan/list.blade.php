@extends('layouts.frontend')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="bg-success border-0">
                        <tr class="border-0">
                            <th class="text-white border-0">Nama Jurusan</th>
                            <th class="text-white border-0">Prodi</th>
                            <th class="text-white border-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jurusan as $jur)
                        <tr class="border-0">
                            <td class="border-0" scope="row">{{ $jur->nama_jurusan }}</td>
                            <td class="border-0">{{ $jur->jenis_prodi }}</td>
                            <td class="border-0">
                                <form action="{{ url('jurusan/'.$jur->id) }}" method="POST">
                                    <a href="{{ url('jurusan/'.$jur->id) }}" class="btn btn-warning p-2"><i class="fas fa-eye"></i></a>
                                    <a href="{{ url('jurusan/'.$jur->id.'/edit') }}" class="btn btn-success p-2"><i class="fas fa-pen"></i></a>
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger p-2"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function onDelete(id) {
            confirm('Yakin Mau Dihapus');
            $.ajax({
                url: '{{ url("jurusan") }}/' + id,
                type: 'DELETE',
                success: function(response) {
                    console.log(response);
                    alert('Berhasil dihapus');
                }
            });
        }
    </script>
@endsection
