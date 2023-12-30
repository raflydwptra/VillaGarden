@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>

        <div class="row">
            @if(auth()->user()->can('galleries.index'))
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                    <i class="fa fa-book-open text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>GALERI</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\Gallery::count() ?? '0' }}
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                    <i class="fa fa-bell text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>BOOKING</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\Booking::count() ?? '0' }}
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                    <i class="fa fa-users text-white fa-2x"></i>
                    </div>
                    <div class="card-wrap">
                    <div class="card-header">
                        <h4>USERS</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\User::count() ?? '0' }}
                    </div>
                    </div>
                </div>
                @else
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fa fa-bell text-white fa-2x"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>BOOKING</h4>
                            </div>
                            <div class="card-body">
                                {{ App\Models\Booking::where('user_id', auth()->user()->id)->count() ?? '0' }}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
          </div>

    </section>
</div>
@endsection
