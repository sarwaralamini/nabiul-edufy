@extends('layouts.backend')

@push('css')
    <link rel="stylesheet" href="{{ asset('dist/backend/plugins/selectize/dist/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/backend/plugins/selectize/dist/css/selectize.bootstrap4.css') }}">
@endpush

@section('title', 'Form Components')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>Form Components</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Form Components</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Input Addon</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->

                <!-- card -->
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Selectize</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Default Selectize</label>
                                <select class="form-control select-search">
                                    <option value="">Selelct Active Status</option>
                                    <option value="1" >Active</option>
                                    <option value="0" >Deactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Selectize Multi select</label>
                                <select multiple="multiple" class="form-control select-search" data-fouc>
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
                <!-- /.card -->
              </div>
        </div>
    </div>
</section>
  <!-- /.content -->
@endsection

@push('js')
    <script src="{{ asset('dist/backend/plugins/selectize/dist/js/standalone/selectize.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select-search').selectize({
                create: true,
                sortField: 'text'
            });
        });
    </script>
@endpush
