<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>
    {{ config('app.name') . " | " }}
    @isset($page_name)
      {{ $page_name }}
    @else
      Default
    @endif
    </title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  </head>

  <body>

    <!-- As a link -->
    <nav class="navbar navbar-light bg-white shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Dynamic</a>
        </div>
    </nav>

    <main role="main" class="container-fluid">
    @isset($ds_header)
        {!! $ds_header !!}
    @endif

    @isset($ds_body)
        {!! $ds_body !!}
    @else
        <h4>Error 404 - No page content found.</h4>
    @endif
    </main><!-- /.container -->

    @isset($ds_footer)
        {!! $ds_footer !!}
    @endif

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>



