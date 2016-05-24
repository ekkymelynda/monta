<!DOCTYPE html>
<html>
    <head>
        <title>PTK</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>id_ptk</th>
                        <th>nama ptk</th>
                        <th>jk</th>
                        <th>tgl lahir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($item as $i)
                    <tr>
                        <td>  {{$i->id_ptk}} </td>
                        <td>  {{$i->nm_ptk}} </td>
                        <td>  {{$i->jk}} </td>
                        <td>  {{$i->tgl_lahir}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- <div><a href="bahan/create">buat baru</a></div>-->
        </div>
    </body>
</html>