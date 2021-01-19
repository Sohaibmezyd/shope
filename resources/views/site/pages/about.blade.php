@include('site.header')

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> الرئيسية</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">@foreach($pages as $page){{$page->title}}@endforeach</span>
<h2 class="entry-title">{{$page->title}}</h2>
</div>
</div>
</div>
</div>
</div>

<section class="about section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
@foreach($pages as $page)
      {!! $page->description !!}
@endforeach
      </div>
    </div>
  </div>
</section>

@include('site.footer')
