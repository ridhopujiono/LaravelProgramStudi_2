<div class="table-responsive">
    <table class="table" id="table_id">
        <thead>
            <tr>
                <th>Npm</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jk</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->npm }}</td>
                <td><img src="{{asset($mahasiswa->foto) }}" width="100px" alt=""></td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->jk }}</td>
                <td>{{ $mahasiswa->tanggal_lahir }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>{{ $mahasiswa->keterangan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mahasiswas.destroy', $mahasiswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mahasiswas.show', [$mahasiswa->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mahasiswas.edit', [$mahasiswa->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn
                        btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
