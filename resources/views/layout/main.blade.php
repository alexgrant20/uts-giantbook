@include('partial.head')

<body class="min-vh-100 h-100 position-relative">
   @include('partial.navigation')

   <main class="container pt-5" style="padding-bottom: 6rem">
      @yield('content')
   </main>

   @include('partial.footer')
</body>

</html>
