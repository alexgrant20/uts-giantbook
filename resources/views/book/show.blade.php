@extends('layout.main')

@section('title', 'Book Detail')

@section('content')

   <div class="text-center">
      <img src="{{ asset($book->image) }}" alt="" class="img-fluid" style="height: 400px">
   </div>

   <div>
      <div class="mb-3">
         <div class="fs-6 fw-bold">Title</div>
         <div class="fs-6">{{ $book->title }}</div>
      </div>
      <div class="mb-3">
         <div class="fs-6 fw-bold">Author</div>
         <div class="fs-6">{{ $book->author }}</div>
      </div>
      <div class="mb-3">
         <div class="fs-6 fw-bold">Publisher</div>
         <div class="fs-6">{{ $book->publisher->name }}</div>
      </div>
      <div class="mb-3">
         <div class="fs-6 fw-bold">Year</div>
         <div class="fs-6">{{ $book->year }}</div>
      </div>
      <div class="mb-3">
         <div class="fs-6 fw-bold">Synopsis</div>
         <div class="fs-6">{{ $book->synopsis }}</div>
      </div>
   </div>

@endsection
