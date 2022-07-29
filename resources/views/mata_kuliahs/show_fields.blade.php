<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $mataKuliah->nama }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $mataKuliah->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $mataKuliah->updated_at }}</p>
</div>

