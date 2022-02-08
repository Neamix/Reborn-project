@extends('theme::layouts.app', ['alias' => 'Home'])
@section('theme::title', __('seo.index'))
@section('theme::content')
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 news-container">
        <div class="latest-news container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        
                    </div>
                    @if($news->count() > 4)
                    <div class="col-sm-4">
                        <div class="main-btn-holder">
                            <a href="{{ route('news-archive') }}" class="hbtn hbtn-default">
                                {{ __('index.show-all') }}
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="row">
                    @forelse($news as $newsData)
                        <div class="col-md-12">
                            <div class="post mb-4">
                            <div class="post-header position-relative"
                                 style="background-image: url('{{asset('storage/web/images/'.$newsData->image->filename)}}');">
                            </div>
                            <div class="post-body container bg-trans">
                               <div class="content position-relative h-100">
                                <h1 class="initialism large-txt text-white pt-3">{{ $newsData->title }}</h1>
                                <div class="bg-trans text-md">
                                    {!! $newsData->body !!}
                                </div>
                                <div class="bottom-0 position-absolute date-bottom">
                                    <i class="fas fa-calendar-week mr-2"></i>
                                    {{ date('d M y',strtotime($newsData->published_at)) }}
                                </div>
                               </div>
                            </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
