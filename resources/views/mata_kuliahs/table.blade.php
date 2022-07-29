<div class="table-responsive">
    <table class="table" id="mataKuliahs-table">
        <thead>
        <tr>
            <th>Nama</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mataKuliahs as $mataKuliah)
            <tr>
                <td>{{ $mataKuliah->nama }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['mataKuliahs.destroy', $mataKuliah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mataKuliahs.show', [$mataKuliah->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('mataKuliahs.edit', [$mataKuliah->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
