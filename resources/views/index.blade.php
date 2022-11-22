@extends('layout.main')

@section('title', 'Homepage')

@section('content')
   <div class="row mb-5">
      @foreach ($books as $book)
         <div class="col-md-4">
            <div class="card overflow-hidden">
               <div class="w-100" style="height: 500px">
                  <img src="{{ asset($book->image) }}" alt="" class="img-fluid w-100 h-100 rounded">
               </div>
               <div class="px-3 py-4">
                  <h2 class="fs-4 mb-3">{{ $book->title }}</h2>
                  <p><span class="text-secondary me-1">by</span>{{ $book->publisher->name }}</p>
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
