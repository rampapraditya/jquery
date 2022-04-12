<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event</title>
        <script type="text/javascript" src="../jquery.min.js"></script>
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                $('#btn2').click(function (){
                    $('#btn').show();
                });
                
                $('#btn1').click(function(){
                    $('#btn').hide();
                });
                
                
            });
            
            
        </script>
    </head>
    <body>
        <button id="btn1">Hide</button>
        <button id="btn2">Show</button>
        <br><br>
        <button id="btn" style="display: none;">Klik saya</button>
        
    </body>
</html>
