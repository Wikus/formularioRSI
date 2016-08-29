<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Formulario RSI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Formulario RSI 
                </div>
                {!! Form::model($test, ['url' => '/','class'=>'form-horizontal error']) !!}
                <div class="col-md-5 col-md-offset-3"> 
                    <div class="form-group">
                      {!! Form::label('nombre', 'Nombre') !!}
                      {!! Form::text('nombre', '', ['class' => 'form-control']) !!}
                      <p class="text-danger">{{ $errors->first('nombre') }}</p>
                    </div>
                    <div class="form-group">
                      {!! Form::label('apellidos', 'Apellidos') !!}
                      {!! Form::text('apellidos', '', ['class' => 'form-control']) !!}
                      <p class="text-danger">{{ $errors->first('apellidos') }}</p>
                    </div>
                    <div class="form-group">
                      {!! Form::label('telefono', 'Teléfono') !!}
                      {!! Form::text('telefono', '', ['class' => 'form-control']) !!}
                      <p class="text-danger">{{ $errors->first('telefono') }}</p>
                    </div>
                    <div class="form-group">
                      {!! Form::label('direccion', 'Dirección') !!}
                      {!! Form::text('direccion', '', ['class' => 'form-control']) !!}
                      <p class="text-danger">{{ $errors->first('direccion') }}</p>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success pull-right" type="submit"><label>Enviar</label></button>
                    </div>
                </div>
              {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
