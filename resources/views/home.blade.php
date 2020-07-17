@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
                <div class="col mb-5 mb-xl-0">
                    <div class="card shadow">
                        <div class="card-header mb--3 bg-transparent">
                            <h1 class="text-black">Forum</h1>
                        </div>
                        @foreach($posts as $post)
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-xs-1 pl-3 mt-0">
                                        <i class="ni ni-3x ni-circle-08"></i>
                                    </div>
                                    <div class="col">
                                        <h1 class="text-black mb-0 d-inline">    <b>{{ $post->name }}</b></h1>
                                        <h6 class="text-uppercase text-gray ls-1 mb-1">{{ $post->created_at }}</h6>
                                    </div>
                                </div>
                                <a href="post/show/{{ $post->id }}"><h1 class="text-dark mb-0">{{ $post->title }}</h1></a>
                                {{ $post->body }}
                            </div>
                            <hr class="my-0">
                        @endforeach
                        <div class="card-footer py-4">
                            <nav class="d-flex justify-content-end" aria-label="...">
                                {{ $posts->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush
