<div class="table-responsive">
    <table class="table" id="table_id">
        <thead>
            <tr>
                <th>Nidn</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Jk</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Mata Pelajaran</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dosens as $dosen)
            <tr>
                <td>{{ $dosen->nidn }}</td>
                <td><img src="{{url($dosen->foto) }}" width="100px" alt=""></td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->jk }}</td>
                <td>{{ $dosen->tanggal_lahir }}</td>
                <td>{{ $dosen->alamat }}</td>
                <td>{{ $dosen->mata_pelajaran }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dosens.destroy', $dosen->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dosens.show', [$dosen->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dosens.edit', [$dosen->id]) }}" class='btn btn-default btn-xs'>
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
