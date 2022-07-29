<!-- Npm Field -->
<div class="col-sm-12">
    {!! Form::label('npm', 'Npm:') !!}
    <p>{{ $mahasiswa->npm }}</p>
</div>

<!-- Foto Field -->
<div class="col-sm-12">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($mahasiswa->foto) }}" alt="" width="200px"></p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $mahasiswa->nama }}</p>
</div>

<!-- Jk Field -->
<div class="col-sm-12">
    {!! Form::label('jk', 'Jk:') !!}
    <p>{{ $mahasiswa->jk }}</p>
</div>

<!-- Tanggal Lahir Field -->
<div class="col-sm-12">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    <p>{{ $mahasiswa->tanggal_lahir }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $mahasiswa->alamat }}</p>
</div>

<!-- Keterangan Field -->
<div class="col-sm-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $mahasiswa->keterangan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mahasiswa->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mahasiswa->updated_at }}</p>
</div>
