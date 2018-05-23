@extends('layouts.app')

    @section('titlePage')
        Pulmentum
    @stop

    @section('scripts')

    @stop

    @section('content')
<header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-6 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Pulmentum és la nova aplicació web que et permetrà apendre qualsevol llenguatge online via streaming amb autèntics professionals.</h1>
              <a href="{{ asset('curs') }}" class="btn btn-outline btn-xl js-scroll-trigger">Mira els cursos disponibles!</a>
            </div>
          </div>
          <div class="col-lg-6 my-auto">

                <div class="device">
                  <div class="screen">
                    <img src="img/pulmentum_logo_blanc.png" class="img-fluid" alt="" >
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Professionals i aficionats, benvinguts a Pulmentum.</h2>
          <p class="text-muted">Tota mena de cursos per a diferents nivells!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup iphone6_plus portrait black">
                <div class="device">
                  <div class="screen">
                    <img src="img/demo-screen-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class=" icon-screen-desktop text-primary"></i>
                    <h3>Qualsevol ordinador</h3>
                    <p class="text-muted">Podràs accedir des de qualsevol plataforma accedint a la nostre web!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class=" icon-bubbles text-primary"></i>
                    <h3>Facil comunicació</h3>
                    <p class="text-muted">Podràs comunicar-te facilment amb el professor gràcies al xat!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-globe text-primary"></i>
                    <h3>Accedeix on vulguis</h3>
                    <p class="text-muted">Podràs accedir des d'on siguis i fer us de Pulmentum.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-credit-card text-primary"></i>
                    <h3>Pagament Segur</h3>
                    <p class="text-muted">Gràcies a PayPal els teus diners romandràn segurs sempre.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   @stop