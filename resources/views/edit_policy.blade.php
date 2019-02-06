@extends('welcome')
@section('title', 'Edit Privacy Policy')
@section('content')
<section id="home" class="home section--bg">
    @include ('topbar')
    <div class="col-xs-12" style="display:block;">
      <p class="Privacy-Policy">Privacy Policy</p>
      <p class="Updated-21-December">Updated: 21 December, 2018</p>
    </div>
    <div class="col-xs-12 policies">
      <div class="pol_content_section">
        <textarea id="MD_edit">
          @foreach($policies as $key=>$policy)
            {{ $policy->chapter }}
            {{ $policy->title }}
            {{ $policy->content }}
          @endforeach
        </textarea>
      </div>

      <div class="pol_content_section_edit">
        <div id="editable">
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
    width: 45%;
    height: 300px;
    border-radius: 5px;
    background-color: #ffffff;
    margin-right: 4%;
    align-self: initial !important;
  }
  .pol_content_section textarea{
    border: none;
    width: 100%;
    height: 100%;
  }
  .pol_content_section_edit #editable{
    border: none;
    width: 100%;
    height: 100%;
  }
  .pol_content_section_edit{
    width: 45%;
    border-radius: 5px;
    background-color: #ffffff;
    align-self: initial !important;

  }
  </style>
@endsection
@section('scripts')
  <script>
    $("#MD_edit").keyup(function(ev){
      var text = $("#MD_edit").val();
      // text = text.replace(/(\r\n|\n|\r)/gm, "<br>");
      // text  = text.replace(/&/g, "&amp;").replace(/>/g, "&gt;").replace(/</g, "&lt;").replace(/"/g, "&quot;");

      $.ajax({
            url: "/md/convert",
            data: { text: text},
            type: "POST",
            complete: function(res){
              $("#editable").html(res.responseText);
            },
            
        });
    })
  </script>
@endsection