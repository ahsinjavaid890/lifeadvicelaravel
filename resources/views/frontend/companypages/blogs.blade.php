@extends('frontend.layouts.main')
@include('frontend.companypages.includes.mettatittle')
@section('content')
@include('frontend.companypages.includes.mainblog')
<style>
    @media only screen and (min-width: 200px) and (max-width: 300px){
  .mean-container a.meanmenu-reveal span {
    top: 7px !important;
    margin-top: -2px !important;
}
  }
  @media only screen and (min-width: 768px) and (max-width: 1000px){
.mean-container a.meanmenu-reveal span {
    top: 7px !important;
    margin-top: -2px !important;
}
  }
</style>
<section class="chooses-blogs choose-us-area-five pb-70" style="background-color:#f4f7fa;">
<div class="container-homepage">
    <div class="row">
        <div class="col-md-3 blogs-card">
            <div class="card shadow " style="border-radius:16px;">
                <div class="card-body p-0">
                    <div class="tabssidebar">
                        <style type="text/css">
                            .nav-tabs .nav-link.active{
                                    border-left: 4px solid #262566 !important;
                                }
                        </style>
                        <div class="card-list-heading p-3">
                            <h3 style="color: #262566;">Browse by topic</h3>
                            <hr>
                        </div>
                        <ul class="parent-list nav  nav-tabs d-block" role="tablist">
                            @foreach(DB::table('blogcategories')->get() as $r)
                                <li class="nav-item">
                                    <a href="{{ url('category') }}/{{ $r->url }}" class="nav-link @if($loop->first) active @endif" data-toggle="tab-{{$r->id}}"  role="tab" >{{ $r->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
               @foreach($data as $r)
                <div class="col-md-4 mb-3 @if($loop->first) active @endif">
                 <div class="card blank-card">
                      <div class="card-body">
                         <div class="blog-image-card">
                            <img src="{{ url('public/images') }}/{{ $r->image }}">
                         </div>
                         <div class="card-content">
                            <h3>{{ $r->title }}</h3>
                            @php
                             $blog_text = strip_tags($r->content);
                            @endphp
                            <p>{{ \Illuminate\Support\Str::limit($blog_text, 80, $end='...') }}</p>
                         </div>
                         <div class="blogbutton">
                            <a href="{{ url('blog') }}/{{ $r->url}}"><i class="fa fa-arrow-circle-right" style="font-size: 40px;color: #262566;"></i></a>
                         </div>
                      </div>
                   </div>
                </div>
                @endforeach 
            </div>
            <div style="margin-top:10px;" class="row">
                {!! $data->links('frontend.pagination') !!}
            </div>
        </div>
    </div>
</div>
</section>
@endsection