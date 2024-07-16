@extends('admin.layouts.master')

@section('title','PFA')
@section('css')
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
@endsection
@section('content')
<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card" >
            <div class="card-body  ">
                <div class="d-flex  justify-content-between">
                    <div>

                <h4 class=" text-black-50 text-lg">
                    Liste des Modules </h4></div>

            </div>
            </div>
        </div>
        <hr class="my-3" />
        <div class="row mb-5 my-3">

           @foreach ($module as $item )

            <div class="col-md-6 col-lg-4 mb-3">
              <div class="card h-100 align-items-center justify-content-center">
                <section class=" bg-[#ff6900] rounded-2xl px-8 py-6 shadow-lg w-64 mx-3  my-3">
                    <div class="flex items-center justify-between">
                    </div>
                    <div class="mt-6 w-fit mx-auto text-white text-center ">
                     <strong>    {{ $item->Nom}}</strong>
                    </div>

                    <div class="h-1 w-full bg-black mt-8 rounded-full">
                        <div class="h-1 rounded-full w-2/5 bg-yellow-500 "></div>
                    </div>
                    <div class="mt-3 text-white text-sm">

                    </div>

                </section>
                <div class="card-body text-center ">

                    <a class="btn   btn-outline-primary " href="{{url('admin/Absence/'. $item->id.'/edit')}}" >
                        <i class='bx bx-low-vision'></i>
                        Voir

                  </a>
                  </div>

              </div>
            </div>

            @endforeach
    </div>



</div>


    </div>
  </div>
@endsection



