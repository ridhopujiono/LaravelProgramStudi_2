<!-- Npm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('npm', 'Npm:') !!}
    {!! Form::text('npm', null, ['class' => 'form-control']) !!}
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


<!--  -->
<div class="form-group col-sm-6">
    {!! Form::label('jk', 'Jenis Kelamin:') !!}
    @if(isset($mahasiswa->jk))
    <select name="jk" id="" class="form-control">
        @if($mahasiswa->jk == "L")
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
    {!! Form::label('keterangan', 'Keterangan :') !!}

    @if(isset($mahasiswa->keterangan))
    <select name="keterangan" id="" class="form-control">
        @if($mahasiswa->keterangan == "Aktif")
        <option value="Aktif" selected>Aktif</option>
        <option value="Tidak">Tidak</option>
        @else
        <option value="Aktif">Aktif</option>
        <option value="Tidak" selected>Tidak</option>

        @endif
    </select>
    @else
    <select name="keterangan" id="" class="form-control">
        <option value="Aktif">Aktif</option>
        <option value="Tidak">Tidak</option>
    </select>
    @endif
</div>
