<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Globetrotter</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>"/>
</head>
<body>

<div class="container">

    @include('partials.modal')

    @include('partials.flash')

    @include('partials.header')

    @include('partials.breadcrumbs')

    @yield('content')

</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<!-- Bootstraps: Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@include('partials.mapscripts')

<script>
    //Slide Up Flash messages
    $('div.alert').delay(3000).slideUp();

    //Confirm deleting items
    $('.confirm').on('click', function(e){
        $('div.modal-body').text($(this).data('confirmation'));
    });
    $('#confirm-delete').on('click', function(){
        window.location.href = $('.confirm').data('path');
    });

    //add active class to breadcrumbs and remove a tag
    $('ol.breadcrumb').children().last().addClass('active');
    $('li.active a').contents().unwrap();

</script>

</body>
</html>