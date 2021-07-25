
<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Modification</title>

        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    </head>

    <body>

        <div class="mw6 center pa3 sans-serif">

            <h1 class="mb4">Modification</h1>


            <br>
            @foreach($modifcations as $modification)

            <div class="pa2 mb3 striped--near-white">
            <header class="b mb2">{{ $modification->firstName }} {{$modification->lastName}}</header>
   
                <div class="pl2">

                    <p class="mb2">modificationID: {{ $modification->modificationID }}</p>

                    <p class="mb2">statusID: {{ $modification->statusID }}</p>

                    <p class="mb2">statusColor: {{ $modification->statusColor }}</p>

                    <p class="mb2">vectorPolygon: {{ $modification->vectorPolygon }}</p>

                    <p class="mb2">proposerUserID: {{ $modification->proposerUserID }}</p>

                    <p class="mb2">dateProposed: {{ $modification->dateProposed }}</p>

                </div>

            </div>

            @endforeach

        </div>

    </body>

</html>