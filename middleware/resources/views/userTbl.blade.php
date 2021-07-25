
<!doctype html>

<html>

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">



        <title>Users</title>

        <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>

    </head>

    <body>

        <div class="mw6 center pa3 sans-serif">

            <h1 class="mb4">Users</h1>



            @foreach($users as $user)

            <div class="pa2 mb3 striped--near-white">

                <header class="b mb2">{{ $user->firstName}} {{ $user->lastName}}</header>

                <div class="pl2">

                    <p class="mb2">id: {{ $user->userID }}</p>

                    <p class="mb2">email: {{ $user->email }}</p>

                    <p class="mb2">password: {{ $user->password }}</p>

                    <p class="mb2">arcGISUser: {{ $user->arcGISUser }}</p>

                    <p class="mb2">dateCreated: {{ $user->dateCreated }}</p>

                </div>

            </div>

            @endforeach

        </div>

    </body>

</html>