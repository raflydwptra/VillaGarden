@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Booking</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-bell"></i> Tambah Booking</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.booking.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label>NAMA LENGKAP</label>
                            <input type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Masukkan Nama Lengkap" class="form-control @error('full_name') is-invalid @enderror">

                            @error('full_name')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>EMAIL</label>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan Alamat Email" class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>JUMLAH ORANG</label>
                            <input type="number" name="people" value="{{ old('people') }}" placeholder="Masukkan Jumlah Orang" class="form-control @error('people') is-invalid @enderror">

                            @error('people')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NOMOR TELEPON</label>
                            <input type="text" name="phone_number" value="{{ old('phone_number') }}" placeholder="Masukkan Nomor Telepon" class="form-control @error('phone_number') is-invalid @enderror">

                            @error('phone_number')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TANGGAL MASUK</label>
                                    <input type="date" name="check_in" value="{{ old('check_in') }}" class="form-control @error('check_in') is-invalid @enderror">

                                    @error('check_in')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TANGGAL KELUAR</label>
                                    <input type="date" name="check_out" value="{{ old('check_out') }}" class="form-control @error('check_out') is-invalid @enderror">

                                    @error('check_out')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
