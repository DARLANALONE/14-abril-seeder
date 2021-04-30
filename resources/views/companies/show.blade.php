<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br>
            <table class="table table-striped table-bordered">
                <tr>
                    <td class="text-center" colspan="2"><strong>DATOS PERSONALES</strong> </td>
                </tr>
                <tr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{$companies->name}}</td>
                </tr>
                <tr>
                    <td><strong>NIT</strong></td>
                    <td>{{$companies->nit}}</td>
                </tr>
                <tr>
                    <td><strong>DIRECCION</strong></td>
                    <td>{{$companies->address}}</td>
                </tr>
                <tr>
                    <td><strong>LOGO</strong></td>
                    <td>{{$companies->logo}}</td>
                </tr>
            </table>
            <a href="{{url('companies')}}">Volver Al Inicio</a>
        </div>
    </div>
</div>
</body>
</html>
