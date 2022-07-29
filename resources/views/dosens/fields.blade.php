<!-- Nidn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nidn', 'Nidn:') !!}
    {!! Form::text('nidn', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('foto', ['class' => 'custom-file-input']) !!}
            {!! Form::label('foto', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::text('tanggal_lahir', null, ['class' => 'form-control','id'=>'tanggal_lahir']) !!}
</div>
<!--  -->
<div class="form-group col-sm-6">
    {!! Form::label('jk', 'Jenis Kelamin:') !!}
    @if(isset($dosen->jk))
    <select name="jk" id="" class="form-control">
        @if($dosen->jk == "L")
        <option value="L" selected>Laki - Laki</option>
        <option value="P">Perempuan</option>
        @else
        <option value="L">Laki - Laki</option>
        <option value="P" selected>Perempuan</option>

        @endif
    </select>
    @else
    <select name="jk" id="" class="form-control">
        <option value="L">Laki - Laki</option>
        <option value="P">Perempuan</option>
    </select>
    @endif
</div>
<!--  -->
<div class="form-group col-sm-6">
    {!! Form::label('mata_pelajaran', 'Mata Kuliah:') !!}
    <select name="mata_pelajaran" id="" class="form-control">
        @foreach($matkuls as $m)
        @if(isset($dosen))
        @if($m->nama == $dosen->mata_pelajaran)
        <option value="{{$m->nama}}" selected>{{$m->nama}}</option>
        @else
        <option value="{{$m->nama}}">{{$m->nama}}</option>
        @endif
        @else
        <option value="{{$m->nama}}">{{$m->nama}}</option>
        @endif
        @endforeach
    </select>

</div>

@push('page_scripts')
<script type="text/javascript">
    $('#tanggal_lahir').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
</script>
@endpush

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>
