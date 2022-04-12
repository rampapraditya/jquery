<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gambar</title>
        <script type="text/javascript" src="../jquery.min.js"></script>
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                
                $('#tombol1').click(function(){
                    $('#gambar').attr("src", "../gambar/pradita.jpg");
                });
                
                $('#tombol2').click(function(){
                    $('#gambar').attr("src", "../gambar/praditya.jpeg");
                });
                
            });
            
            
        </script>
    </head>
    <body>
        
        <img id="gambar" src="../gambar/pradita.jpg" style="width: 200px; height: auto;">
        <br><br>
        <button id="tombol1">PRADITA</button>
        
        <button id="tombol2">PRADITYA</button>
        
    </body>
</html>
