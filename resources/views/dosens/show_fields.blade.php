<!-- Nidn Field -->
<div class="col-sm-12">
    {!! Form::label('nidn', 'Nidn:') !!}
    <p>{{ $dosen->nidn }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($dosen->foto) }}" alt="" width="200px"></p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $dosen->nama }}</p>
</div>

<!-- Jk Field -->
<div class="col-sm-12">
    {!! Form::label('jk', 'Jk:') !!}
    <p>{{ $dosen->jk }}</p>
</div>

<!-- Tanggal Lahir Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    <p>{{ $dosen->tanggal_lahir }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $dosen->alamat }}</p>
</div>

<!-- Mata Pelajaran Field -->
<div class="col-sm-12">
    {!! Form::label('mata_pelajaran', 'Mata Pelajaran:') !!}
    <p>{{ $dosen->mata_pelajaran }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dosen->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dosen->updated_at }}</p>
</div>
