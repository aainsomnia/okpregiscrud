@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Terimakasih sudah melakukan registrasi di website kami .') }} 
                    <p>Click tombol berikut untuk mulai bermain</p>
                    <a class="btn btn-primary" href="https://tinyurl.com/spesialadsOKP" role="button">Mulai Bermain</a>

                    @if (Auth::user()->email != 'dev@okp.com')

                    @else
                    <a class="btn btn-danger" href="{{url('/okpadmincrud')}}" role="button">Web Admin</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
