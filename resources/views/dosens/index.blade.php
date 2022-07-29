@extends('layouts.app')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dosens</h1>
            </div>
            <div class="col-sm-12 mt-3">
                <a class="btn btn-primary " href="{{ route('dosens.create') }}">
                    Tambah Dosen
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">

    @include('flash::message')

    <div class="clearfix"></div>

    <div class="card" style="padding: 30px;">
        <div class="card-body p-0">
            @include('dosens.table')

            <div class="card-footer clearfix">
                <div class="float-right">

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
