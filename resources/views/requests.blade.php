<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tablelists</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">

            
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                text-align: center;
                background-image:url("/images/Bible-Study.jpg");
                background-size: 200%;
                background-repeat: no-repeat;
            }

            a {
                color:#355070; 
            }
            a:hover {
                color: #1e1e1e;
                text-decoration: none;
            }
            .bye {
                text-align:center;
            }
            td, th {
            color:#000000;
            }
            .tables{
                border-radius: 20px;
                margin: auto; 
                padding-top: 10px;
                padding-bottom: 10px;
                font-size:15px;
                color: #000000;
                background-color: #ffffff;
                opacity: 0.7;
                margin-top: 4%;
                width: 97%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-linear-gradient(to right top, #514d50, #696469, #807d84, #9896a0, #afb1bd, #abb1bd, #a7b0bc, #a3b0bb, #85949c, #6a797e, #515f61, #3a4645);-100 dark:bg-linear-gradient(to right top, #514d50, #696469, #807d84, #9896a0, #afb1bd, #abb1bd, #a7b0bc, #a3b0bb, #85949c, #6a797e, #515f61, #3a4645);-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-linear-gradient(to right top, #514d50, #696469, #807d84, #9896a0, #afb1bd, #abb1bd, #a7b0bc, #a3b0bb, #85949c, #6a797e, #515f61, #3a4645);-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-linear-gradient(to right top, #514d50, #696469, #807d84, #9896a0, #afb1bd, #abb1bd, #a7b0bc, #a3b0bb, #85949c, #6a797e, #515f61, #3a4645);-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-linear-gradient(to right top, #514d50, #696469, #807d84, #9896a0, #afb1bd, #abb1bd, #a7b0bc, #a3b0bb, #85949c, #6a797e, #515f61, #3a4645);-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            
            <div class = "tables">

            <table id="registrations" class="display">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Complete Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Birth Date</th>
                        <th>Religious Affiliation</th>
                        <th>Bible Study Date</th>
                        <th>Bible Study Time</th>
                        <th>Bible Study Location</th>                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $registrations as $registrations )
                    <tr>
                        <td>{{ $registrations->id }}</td>
                        <td>{{ $registrations->fullname }}</td>
                        <td>{{ $registrations->email }}</td>
                        <td>{{ $registrations->contactnumber }}</td>
                        <td>{{ $registrations->birthdate }}</td>
                        <td>{{ $registrations->religion }}</td>
                        <td>{{ $registrations->bsdate }}</td>
                        <td>{{ $registrations->bstime }}</td>                        
                        <td>{{ $registrations->address }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>   
            <div class = "bye">
                <p style="color: #000;">Back to:<a href="/"> Homepage</a><p><br>
        </div></div>
            </div>
        </div>


    </body>

 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#registrations').DataTable();
        });
        </script>
</html>