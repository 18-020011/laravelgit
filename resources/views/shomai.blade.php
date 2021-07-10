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
            }
            
            .topp:hover{
                color:#001429;
            }
                
            .container 
            {
                margin: auto;
                box-shadow:3px 3px 8px 5px black;			
                border-radius: 25px;
                padding: 20px;
            }
            
            th, td 
            {
                padding: 2px;		
            }
                    
            
            .FA
            {
                text-align:center;
                background-color:#c1d173;
                color:black;
                height: 2%;
                font-size: 80%;
            }
            
            .text-secondary
            {
                text-decoration:none;
                color:#CA226B;
            }
            .slider{
                width: 110%;
                height: 100%;
                overflow: hidden;
                margin: auto;
                
            }
            .slider .left-slide,.slider .right-slide{
                position: absolute;
                margin: auto;
                height: 40px;
                width: 40px;
                background-color: #444444;
                border-radius: 50%;
                color:#ffffff;
                font-size: 20px;
                top:50%;
                cursor: pointer;
                margin-top: -20px;
                text-align: center;
                line-height: 40px;
    
            }
            .slider .left-slide:hover,.slider .right-slide:hover{
                box-shadow: 0px 0px 10px black;
                background-color: #29a8e2;
            }
            .slider .left-slide{
                left: 30px;
            }
            .slider .right-slide{
                right: 30px;
            }
            .slider .slider-items .item img{
                width: 110%;
                height: 100%;
                display: block;
                animation:zoom 1s ease;
            }
            @keyframes zoom{
                0%{transform: scale(2);opacity: 0}
                50%{transform: scale(2);}
                100%{transform: scale(1);opacity:1}
            }
            .slider .slider-items .item{
                display: none;
                position: relative;
            }
            .slider .slider-items .item .caption{
                position: absolute;
                width: 90%;
                height: 60px;
                bottom: 0px;
                left: 0px;
                background-color: rgba(255, 255, 0, 0)
                line-height: 60px;
                text-align: center;
                color: #000000;
                font-size: 40px;
            }
            .slider .slider-items .item .caption:hover{
                background: #c1d173;
                transition:0.5s;
            }	
            .slider .slider-items .item.active{
                display: block;
            }
        </style>
    </head>

    <body>
        <table class="top" width="100%" height="15%">
            <tr>
                <th>
                    <a class="topp" href="/" >Home</a>
                </th>
                <th>
                    <a class="topp" href="/shomai" >Shomai List</a>
                </th>			
            </tr>
        </table>
        <br></br>
        <div class="container" style ="width:63%;height:75%;">
        <table>
            <tr><td>
            <div class="slider">
                <div class="slider-items">
                
                    <div  class="item active">
                        <img src="/img/CHICK.png" style ="width:80%;height:80%;">
                        <div class="caption">
                            Pork Siomai - Php 10.00/3pcs
                        </div>
                    </div>

                    <div  class="item">
                        <img src="/img/PRK.png" style ="width:80%;height:80%;">
                        <div class="caption">
                            Chicken Siomai - Php 10.00/3pcs
                        </div>
                    </div>
        
                    <div  class="item">
                        <img src="/img/SHRMP.png"" style ="width:80%;height:80%;">
                        <div class="caption">
                            Shrimp Siomai - Php 10.00/3pcs
                        </div>
                    </div>

                    <div  class="item">
                        <img src="/img/JAP.png" style ="width:80%;height:80%;">
                        <div class="caption">
                            Japanese Siomai - Php 15.00/3pcs
                        </div>
                    </div>

                    <script type="text/javascript">
                        var elems = document.getElementsByClassName('caption');
                        for (var i = 0, l = elems.length; i < l; i++) {
                            elems[i].addEventListener('click', confirmIt, false);
                        }
                    </script>

                </div>
                <div class="left-slide"><</div>
                <div class="right-slide">></div>
            </div>

            <script>

                var slides=document.querySelector('.slider-items').children;
                var nextSlide=document.querySelector(".right-slide");
                var prevSlide=document.querySelector(".left-slide");
                var totalSlides=slides.length;
                var index=0;

                nextSlide.onclick=function () {
                        next("next");
                }
                prevSlide.onclick=function () {
                        next("prev");
                }

                function next(direction){
                    if(direction=="next"){
                        index++;
                        if(index==totalSlides){
                            index=0;
                        }
                    } 
                    else{
                        if(index==0){
                            index=totalSlides-1;
                        }
                        else{
                            index--;
                        }
                    }

                for(i=0;i<slides.length;i++){
                    slides[i].classList.remove("active");
                }
                    slides[index].classList.add("active");     
                }
            </script>
            </td></tr>
        </table>
        </div>
        <br></br>

        <div class="FA">All rights reserved 2020</div>
    </body>
</html>
