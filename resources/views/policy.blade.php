@extends('welcome')
@section('title', 'Privacy Policy')
@section('content')
<section id="home" class="home section--bg">
    @include ('topbar')
    <div class="col-xs-12" style="display:block;">
      <p class="Privacy-Policy">Privacy Policy</p>
      <p class="Updated-21-December">Updated: 21 December, 2018</p>
    </div>
    <div class="col-xs-12 policies">
      <div class="pol_sidebar" style="margin:0;align-self:initial;">
        <ul>
          @foreach($policies as $key=>$policy)
          <li class="pol_chapter">{{ $policy->chapter }}</li>    
          @endforeach
        </ul>
      </div>

      <div class="pol_content_section">
        <div>
        @foreach($policies as $key=>$policy)
          <div class="pol_chapter">
            @markdown
            {{ $policy->chapter }}
            @endmarkdown
          </div>    
          <div class="pol_chapter">
            @markdown
            {{ $policy->title }}
            @endmarkdown
          </div>    
          <div class="pol_chapter">
            @markdown
            {{ $policy->content }}
            @endmarkdown
          </div>    
          @endforeach
        </div>
      </div>
    </div>
</section>
@endsection
@section('styles')
  <style>
  * {
    font-family: sans-serif;
  }
  .pol_sidebar ul{
    width: 400px;
  }
  
  .pol_sidebar .pol_chapter {
    padding-top: 9px;
    padding-left: 20px;
    height: 50px;
    border-radius: 5px;
    width: 100%;
    color: black;
    height: 33px;
    font-size: 18px;
    font-weight: 500;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.83;
    letter-spacing: normal;
  }
  #home .Policies{
    color: rgba(0,0,0,0.7);
  }
  .policies{
    margin-bottom: 112px;
  }
  .Privacy-Policy {
    height: 74px;
    margin: auto;
    margin-top: 82px;
    font-size: 56px;
    font-weight: 500;
    font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
    text-align: center;
    color: #192748;
  }
  .Updated-21-December {
    height: 33px;
    margin: auto;
    text-align: center;
    margin-top: 12px;
    font-size: 16px;
    font-weight: normal;
    font-style: normal;
    font-stretch: normal;
    line-height: 2.06;
    letter-spacing: normal;
    color: #82899a;
  }
  .pol_content_section{
    border-radius: 5px;
    background-color: #ffffff;
    padding-top: 90px;
    padding-left: 100px;
  }
  </style>
@endsection
@section('scripts')

@endsection