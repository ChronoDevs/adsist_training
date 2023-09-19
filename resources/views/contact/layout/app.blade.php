<!DOCTYPE html>
<html lang="ja">
  <head>
    @include('contact.includes.head')
  </head>
  <body>
    <header>
        @include('contact.includes.header')
    </header>
    <main id="page_contact">
        @yield('content')
    </main>
    <footer>
        @include('contact.includes.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="../js/common.js"></script>
    <script src="../js/contact_form.js"></script>
  </body>
</html>
