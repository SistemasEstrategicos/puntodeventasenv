@extends('layouts.install', ['no_header' => 1])
@section('title', 'Welcome - POS Installation')

@section('content')
<div class="container">
    
    <div class="row">
      <h3 class="text-center">Instalación SuperPos <small>Step 1 of 3</small></h3>

        <div class="col-md-8 col-md-offset-2">
          <hr/>
          @include('install.partials.nav', ['active' => 'install'])

          <div class="box box-primary active">
            <!-- /.box-header -->
            <div class="box-body">
              <h3 class="text-success">
                Bienvenido a la instalación de SuperPos
              </h3>
              <p><strong class="text-danger">[IMPORTANT]</strong> Before you start installing make sure you have following information ready with you:</p>

              <ol>
                <li>
                  <b>Step-by-Step document</b> - <a href="https://kosari.net/" target="_blank">Documentation</a>
                </li>
                <li>
                  <b>Application Name</b> - Something short & Meaningful.
                </li>
                <li>
                  <b>Database informations:</b>
                  <ul>
                    <li>Username</li>
                    <li>Password</li>
                    <li>Database Name</li>
                    <li>Database Host</li>
                  </ul>
                </li>
                <li>
                  <b>Mail Configuration</b> - SMTP details (optional)
                </li>
                <li>
                  <b>Kosari Detalles:</b>
                  <ul>
                    <li><b>Codigo de kosari: 594856958.</b> (<a href="https://kosari.net" target="_blank">Comprar codigo?</a>)</li>
                    <li>
                      <b>Kosari Username.</b> (Your Kosari username)
                    </li>
                  </ul>
                </li>
              </ol>

             

             
              
              <a href="{{route('install.details')}}" class="btn btn-primary pull-right">De acuerdo, ¡vamos!</a>
            </div>
          <!-- /.box-body -->
          </div>

        </div>

    </div>
</div>
@endsection
