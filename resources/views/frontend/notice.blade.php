@extends('layouts.frontend')

@section('title', 'নোটিশ বোর্ড')

@section('content')
<section class="section-breadcrum">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">হোম</a></li>
              <li class="breadcrumb-item active" aria-current="page">নোটিশ বোর্ড</li>
            </ol>
          </nav>
    </div>
</section>
<!-- Common Section-->
<section class="section-common">
    <div class="container">
        <div class="table-responsive">
            <table id="dataTableCommon" class="table table-striped table-bordered dt-responsive nowrap dataTableCommon">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Post Date</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i=0;
                    @endphp

                    @for ($i=0; $i<51; $i++)
                    <tr>
                        <td>
                            {{ $i }}
                        </td>
                        <td>
                            <a href="#">লরেম ইপসাম কেবল মুদ্রণ এবং টাইপসেটিং শিল্পের ডামি পাঠ্য</a>
                        </td>
                        <td>21 September, 2021</td>
                        <td>
                            <a href="#"><i class="far fa-file-pdf"></i></a>
                        </td>
                    </tr>
                    @endfor
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Post Date</th>
                        <th>Download</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
<!-- Common Section-->
@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#dataTableCommon').DataTable();
    } );
</script>
@endpush

