@extends('layouts.app')
@section('content')
    <div class="containers">
        <div class="row">
          <div class="col-md-8">

          </div>
          <div class="col-md-4">
            <h1>Masukkan Data Perusahaan</h1>
            <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="nama">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Perusahaan" value="{{ old('nama') }}">
                    @if($errors->has('nama'))
                        <span class="help-block">{{ $errors->first('nama') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="email">Email Perusahaan</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Perusahaan" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="">Nomor Telpon</label>
                    <input type="text" class="form-control" id="hp" name="hp" placeholder="Nomor Telpon Perusahaan" value="{{ old('hp') }}">
                    @if($errors->has('hp'))
                        <span class="help-block">{{ $errors->first('hp') }}</span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="alamat">Alamat Perusahaan</label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Perusahaan">{{ old('alamat') }}</textarea>
                    @if($errors->has('alamat'))
                        <span class="help-block">{{ $errors->first('alamat') }}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
    </div>
@endsection
