@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (! auth()->user()->profile()->exists())
                    <div class="alert alert-info text-white d-flex justify-content-between align-items-center">
                        <div>
                            Please setup your profile!
                        </div>
                        <a href="{{route('profile.setup')}}" class="btn btn-sm btn-info">
                            Setup Now
                        </a>
                    </div>
                @else
                {{-- <form action="" class="text-center">
                    <button class="btn btn-lg btn-primary">
                        APPLY FOR LOAN
                    </button>
                </form> --}}

                @endif

                <div class="row">
                    <div class="col-md-4">

                        <a href="/terms-and-condition" class="card card-body text-center btn border">
                            <div style="width:50px;" class="mx-auto"> <x-icon.about/> </div>
                            About
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="/terms-and-condition" class="card card-body text-center btn">
                            <div style="width:50px;" class="mx-auto"> <x-icon.tac/> </div>
                            Terms & conditions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
