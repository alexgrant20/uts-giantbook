<nav class="navbar navbar-dark bg-dark navbar-expand-lg bg-light">
   <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('book.index') }}"><span class="fs-3">B</span>ig <span
            class="fs-3">B</span>ook</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link {{ Route::is('book.index') ? 'active' : '' }}" aria-current="page"
                  href="{{ route('book.index') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">Category</a>
               <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarScrollingDropdown">
                  @foreach ($categories as $category)
                     <li><a class="dropdown-item"
                           href="{{ route('category.show', $category->name) }}">{{ $category->name }}</a></li>
                  @endforeach
               </ul>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Route::is('publisher.*') ? 'active' : '' }}" aria-current="page"
                  href="{{ route('publisher.index') }}">Publisher</a>
            </li>
            <li class="nav-item">
               <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" aria-current="page"
                  href="{{ route('contact') }}">Contact</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
