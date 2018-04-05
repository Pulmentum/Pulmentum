@extends('layouts.master')
@section('titlePage')
Index
@stop
@section('header')
            <div class="topnav">
          <p class="logo" href="index.html">Pulmentum</p>
           <div class="search-container">
                    <form class"searchbox" action="/action_page.php">
                      <input type="text" placeholder="Cerca..." name="cerca">
                    </form>
                </div>
                <div class="aEsquerra">
                  <a  href="#about">Log In</a>
                  <a href="#contact">Sign In</a>
                </div>
        </div>
        <div class="colorblau">

        </div>
@stop
@section('content')

    <div class="col-sm-4 descripcio">
        <h1>Pulmentum ofereix gran varietat de classes via streaming per a desenvolupadors.</h1>
    </div>
    <div class="col-sm-5 descripcio2">
        <div class="carousel">
            <div class="bxslider">
                <div><img class="img-carousel" src="images/welcome/carousel1.png" title="pulmentum_1" alt="pulmentum_1"></div>
                <div><img class="img-carousel" src="images/welcome/carousel2.jpg" title="pulmentum_2" alt="pulmentum_2"></div>
                <div><img class="img-carousel" src="images/welcome/carousel3.png" title="pulmentum_3" alt="pulmentum_3"></div>
            </div>
        </div>
        <div class="flex-div-row">
            <div class="col-sm-6 info">
                <h3 class="subtitols">Com funciona?</h3>
            </div>
            <div class="col-sm-6 info">
                <a href="{{url('/registrar')}}"><h3 class="subtitols">Comença</h3></a>
            </div>
        </div>
    </div>

@stop
@section('footer')
        <div id="container">
            <div id="col1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="col2">
                <ul id="footerlink">
                    <li><a href="#">Link test 1</a></li>
                    <li><a href="#">Link test 2</a></li>
                    <li><a href="#">Link test 3</a></li>
                </ul>
            </div> 

            <div id="col3">
                <ul id="footerlink">
                    <li><a href="#">Link test 4</a></li>
                    <li><a href="#">Link test 5</a></li>
                    <li><a href="#">Link test 6</a></li>
                </ul>
            </div>  
        </div>
        <div id="colbot">
            <p>Lorem Ipsum Dolor Company S.A.</p>
        </div>          
        <script>
            $(function(){
                $('.bxslider').bxSlider({
                    mode: 'fade',
                    slideWidth: 600,
                    adaptativeHeight: true
                });
            });
        </script>

@stop
