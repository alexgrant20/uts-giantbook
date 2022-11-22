@extends('layout.main')

@section('title', $publisher->name)

@section('content')
   <div class="bg-secondary p-3 text-white mb-4 d-flex align-items-center justify-content-between">
      <div>
         <p class="fs-4">{{ $publisher->name }}</p>
         <p>Address - {{ $publisher->address }}</p>
         <p>Phone - {{ $publisher->phone }}</p>
         <p>Email - {{ $publisher->email }}</p>
      </div>
      <img class="rounded-circle" src="{{ asset($publisher->image) }}" alt="" width="75px" height="75px">
   </div>
   <h2 class="mb-3 pb-2 fs-4 border-bottom border-secondary">Buku yang dipublikasi oleh {{ $publisher->name }}</h2>
   <div class="row mb-5">
      @foreach ($books as $book)
         <div class="col-md-4">
            <div class="card overflow-hidden">
               <div class="w-100" style="height: 500px">
                  <img src="{{ asset($book->image) }}" alt="" class="img-fluid w-100 h-100 rounded">
               </div>
               <div class="px-3 py-4">
                  <h2 class="fs-4 mb-3">{{ $book->title }}</h2>
                  <p><span class="text-secondary me-1">by</span>{{ $publisher->name }}</p>
               </div>
               <div class="d-grid">
                  <a href="{{ route('book.show', $book->id) }}" class="btn btn-primary"
                     style="border-top-left-radius: 0; border-top-right-radius: 0">
                     Detail
                  </a>
               </div>
            </div>
         </div>
      @endforeach
   </div>
   {{ $books->links() }}
@endsection
