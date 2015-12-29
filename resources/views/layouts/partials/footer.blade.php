    <script src="{{ URL::asset('js/app.js') }}"></script>
    <script>
      $(document).foundation();
    </script>

    @if ( Config::get('app.debug') )
      <script type="text/javascript">
        document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
      </script>
    @endif
  </body>
</html>
