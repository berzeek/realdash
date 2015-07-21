<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Referencing Bootstrap CSS that is hosted locally -->
        {{ HTML::style('css/bootstrap.min.css') }}

        <style>
        #main-body {
            background: white;
        }
        #sidebar {
            background: black;
        }
        </style>

    </head>
    <body>

        <div class="container-fluid">
          <div class="row-fluid">
            <div class="span2" id="sidebar">
              <!--Sidebar content-->
            </div>
            <div class="span10"  id="main-body">
              <!--Body content-->
            </div>
          </div>
        </div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Referencing Bootstrap JS that is hosted locally -->
    {{ HTML::script('js/bootstrap.min.js') }}
    </body>
</html>
