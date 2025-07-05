@extends('contents.content')


@section('content')
    @include('contents.nav')
    <div class="admin-area d-flex align-items-center">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-12">
                    <div class="breadcumb-content text-center">
                        <div class="breadcumb-title">
                            <h4>Admin page</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>Admin</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @livewire('admin-bird-details')
  @endsection
