@extends('contents.content')

@section('content')
  @include('contents.nav')
    <div class="report-area d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content text-center">
                        <div class="breadcumb-title">
                            <h4>Health Report</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('admin') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>Health Report</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @livewire('health-report')


@endsection