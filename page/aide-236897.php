<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="../css/redir-254698.css" rel="stylesheet">
    </head>
    <body>
        <h1></h1>
        <br/>
        <div class="corePage1">
        <style>
            #message { display: none; background-color: black; color : DarkViolet}
            #button { background-color : Black}
        </style>

    <span id="message">Ce texte sera affiché pendant deux secondes</span><br /><br />
    <button id="button">Afficher le message</button>
    <script src="../js/jquery.js"></script>
    <script>
    $(function() {
    $('#button').click(function() {
        $('#message').fadeIn('slow').delay(2000).fadeOut('slow');
    });
    });
    </script>

        </div>
    </body>
</html>