<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shinomai</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
           @viewport
		{
			zoom: 1.0;
			width: extend-to-zoom;
		}

		@ms-viewport
		{
			zoom: 1.0;
			width: extend-to-zoom;
		}
        
		.top
		{			
			background-color:#c1d173;
			text-align:center;	
			text-indent: 20px;		
		}
		
		.topp
		{
			text-decoration:none;
			font-family:Cooper Black;
			font-size:35px;
			color:white;
			margin:0 0 0 100px;
            text-align: center;
		}
		
		.topp:hover{
			color:#001429;
		}
						
		.contain 
		{
			position: relative;
			text-align: center;
			color: white;			
		}
				
		.centered 
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			font-family:Cooper Black;
			font-size:45px;
		}		
			
		.FA
		{
			text-align:center;
			background-color:#c1d173;
			color:black;
			height: 2%;
			font-size: 80%;
		}

        </style>
    </head>
    <body>
        <table class="top" width="100%" height="15%">
            <tr>
                <th>
                    <a class="topp" href="/shomai" >Shomai List</a>
                </th>
                <th>
                    <a class="topp" href="#" >Home</a>
                </th>
            </tr>
        </table>
        
        <div class="contain">
        <img src="/img/pork.JPG" width="100%" height="83%">
        <p class="centered">Welcome to Shinomai<br>Serving you the best Siomai</p>
        </div>

        <div class="FA">All rights reserved 2020</div>
        </body>
</html>
