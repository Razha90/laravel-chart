<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Chart with VueJS</title>
        <script src="https://unpkg.com/vue"></script>
    </head>
    <body>
        <div id="app">
            {!! $usersChart->container() !!}
        </div>
        <script>
            var app = new Vue({
                el: '#app',
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
        {!! $usersChart->script() !!}
    </body>
</html>