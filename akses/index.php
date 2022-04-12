<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Akses ID</title>
        <script type="text/javascript" src="../jquery.min.js"></script>
        
        <style>
            .box{
                height: 300px;
                width:300px;
                background: orange;
            }
        </style>
        <script type="text/javascript">
            
            $(document).ready(function(){
                $('#tombol').click(function(){
                    $('.box').toggle();
                });
            });
            
            
        </script>
    </head>
    <body>
        <button id="tombol">TOMBOL</button>
        <br><br>
	<div class="box"></div>
    </body>
</html>
