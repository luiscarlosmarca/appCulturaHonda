
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Ingresar App HondaCultural</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        
    
            {!!Html::style('css/style.css')!!}
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        

         
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<style> 
            @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700|Handlee);
            body {
                background: url(images/bg3.jpg) no-repeat center top;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
            }
            .container > header h1,
            .container > header h2 {
                color: #fff;
                text-shadow: 0 1px 1px rgba(0,0,0,0.5);
            }
        </style>
    </head>

    <body>
@if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Por favor corrige los errores<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<div class="container">
        
            
            
            <header>
            
              <center> <h1>Secretaria <strong>Cultura</strong>  y turismo</h1>
                <h2>Honda - Tolima</h2>
                
                

            </header>
            
            <section class="main">
                <form class="form-5 clearfix">
                    <p>
                        <input type="text" id="login" name="login" placeholder="Username">
                        <input type="password" name="password" id="password" placeholder="Password"> 
                    </p>
                    <button type="submit" name="submit">
                        <i class="icon-arrow-right"></i>
                        <span>Ingresar</span>
                    </button>     
                </form>​​​​
            </section>




        <!-- Javascript -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
        <script type="text/javascript">
        $(function(){
            $('input, textarea').placeholder();
        });
        </script>
    </body>

</html>

