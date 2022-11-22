@extends('layout.main')

@section('title', 'Book Detail')

@section('content')

   <div class="text-center">
      <img src="https://imgv2-1-f.scribdassets.com/img/word_document/388995164/original/216x287/7a9e4c40a2/1665131937?v=1"
         alt="" class="img-fluid" style="height: 400px">
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
