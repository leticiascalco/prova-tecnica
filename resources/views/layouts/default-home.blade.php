<!doctype html>
<html lang="en">
    <head>        
       
        <meta charset="utf-8">
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Author" content="Leticia Scalco" />
        <meta name="Robots" CONTENT="INDEX,FOLLOW">
        <meta name="distribution" content="Global">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="3">
        <meta http-equiv="expires" content="0">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta name="csrf-token" content="3" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="/css/boostrap.css">
    
        
        <!-- Stylesheet
            ================================================== -->
        <link rel="stylesheet" type="text/css"  href="/css/style.css">     
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>



        <title>Prova Técnica </title>
        <!-- Latest compiled and minified JS -->
        <script type="text/javascript" src="/js/jquery.min.js"></script>
    
        
    </head>
    <body class="notransition" >

       
        @include('layouts.head-home')

        @yield('content') 
      
        @include('layouts.footer-home')

        
        <!-- Bootstrap JS -->
    <script src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/action.js"></script>
        


        

    </body>
</html>
