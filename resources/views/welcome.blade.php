@extends('layout')
@section('contant')
<main class="d-flex justify-content-between biblio">
    <div class="containerCitation">
        <div class="citation"> 
            <span class="khir"><p>خير</p></span>
            <span class="jalis"><p>الجليس في الزمان</p></span>
            <span class="ktab"><p>الكتاب</p></span>
        </div>
    </div>
    <div  class="container-image">
        <img class="imgBibli" src={{asset("img/library.svg")}} alt="">
    </div>
  </main>
@endsection