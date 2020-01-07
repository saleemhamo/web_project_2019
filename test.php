
<!DOCTYPE html>
<html>
<head>
    <title>Javascript: Slider</title>
    <meta charset="windows-1252">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

        div{background-color: #95a5a6;width: 400px;overflow: hidden;margin: 50px auto;padding: 20px;}
        img{border: 2px solid #fff;}

        div button:first-of-type{float: left;}
        div button:last-of-type{float: right;}

        button{background-color: #fff; color: #27ae60; border: 2px solid #27ae60;
            font-size: 20px; font-weight: bold; width: 50px; cursor: pointer;padding: 5px;}

    </style>

    <script>

        var i = 0,images = ["images/1/fig1.jpg",
            "images/1/fig2.jpg",
            "images/1/fig3.jpg"];

        function mySlide(param)
        {
            if(param === 'next')
            {
                i++;
                if(i === images.length){ i = images.length - 1; }
            }else{
                i--;
                if(i < 0){ i = 0; }
            }

            document.getElementById('slide').src = images[i];
        }

    </script>
</head>
<body>

<div>
    <img src="images/1/fig1.jpg" id="slide" alt="" width="400" height="200">
    <button onclick="mySlide('prev');"><</button>
    <button onclick="mySlide('next');">></button>
</div>

</body>
</html>