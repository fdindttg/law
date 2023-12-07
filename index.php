<!DOCTYPE html>
<html>
<head>
    <title>你的标题</title>
    <meta name="description" content="你的描述">
    <meta name="keywords" content="你的关键词">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        img {
            display: block;
            width: 100%;
            height: auto;
            padding: 0;
            margin: 0;
        }
        .footer-image {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .slide-container {
            max-width: 100%;
        }
        .slide {
            display: none;
            width: 100%;
        }
        .slide.active {
            display: block;
        }
    </style>
</head>
<body>
    <img src="img/1.png" alt="Image">
    <img src="img/2.png" alt="Image">
    <img src="img/3.png" alt="Image">
    <img src="img/4.png" alt="Image">
    <a href="https://t.me/kalix86">
    <img src="img/4-tz.png" alt="Image">
    </a>
    <img src="img/5.png" alt="Image">
    <a href="https://t.me/kalix86">
    <img src="img/5-tz.png" alt="Image">
    </a>
    <img src="img/6.png" alt="Image">
    <img src="img/7.png" alt="Image">
    <div class="slide-container">
        <img class="slide" src="img/7-1-1.png" alt="Slide">
        <img class="slide" src="img/7-1-2.png" alt="Slide">
        <img class="slide" src="img/7-1-3.png" alt="Slide">
    </div>
    <div class="slide-container">
        <img class="slide" src="img/7-2-1.png" alt="Slide">
        <img class="slide" src="img/7-2-2.png" alt="Slide">
        <img class="slide" src="img/7-2-3.png" alt="Slide">
    </div>
    <div class="slide-container">
        <img class="slide" src="img/7-3-1.png" alt="Slide">
        <img class="slide" src="img/7-3-2.png" alt="Slide">
        <img class="slide" src="img/7-3-3.png" alt="Slide">
    </div>
    <img src="img/8.png" alt="Image">    
    <img class="footer-image" src="img/kefu.png" alt="Footer Image">
    <script>
        var slides = document.querySelectorAll('.slide');
        var currentSlide = 0;
        slides[currentSlide].classList.add('active');
        setInterval(function() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
        }, 3000); // 每3秒切换一次幻灯片
    </script>
</body>
</html>