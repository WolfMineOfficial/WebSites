<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spacenter</title>
    <link rel="stylesheet" href="public/css/style.css">
    <script>
        var currImage = 1
        function changeImageEvent(){
            var imageHolder = document.getElementById("appoitment-container")
            imageHolder.style.animationName = "appointImgEffect"
            slider1.style.backgroundColor = "white"
            sliderlong.style.backgroundColor = "rgba(0,0,0,0)"
            slider2.style.backgroundColor = "rgba(0,0,0,0)"
            setTimeout(() => {
                imageHolder.style.backgroundImage = "url(public/img/carousel-3.jpg)"
            }, 1300);
        }
        function changeImageEvent2(){
            var imageHolder = document.getElementById("appoitment-container")
            imageHolder.style.animationName = "appointImgEffect"
            slider1.style.backgroundColor = "rgba(0,0,0,0)"
            sliderlong.style.backgroundColor = "rgba(0,0,0,0)"
            slider2.style.backgroundColor = "white"
            setTimeout(() => {
                imageHolder.style.backgroundImage = "url(public/img/carousel-2.jpg)"
            }, 1300);
            
        }
        function changeImageEvent3(){
            var imageHolder = document.getElementById("appoitment-container")
            imageHolder.style.animationName = "appointImgEffect"
            slider2.style.backgroundColor = "rgba(0,0,0,0)"
            slider1.style.backgroundColor = "rgba(0,0,0,0)"
            sliderlong.style.backgroundColor = "white"
            setTimeout(() => {
                imageHolder.style.backgroundImage = "url(public/img/carousel-3.jpg)"
            }, 1300);
        }
    </script>
</head>
<body>
    <main>
        <div id="top-contact" class="w-100">
            <div>
                +012 345 6789 | info@example.com
            </div>
        </div>
        <header class="w-100">
            <div id="logo-container" class="w-100">
                <p><strong>SPA</strong> Center</p>        
            </div>
            <nav>
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Services</a>
                <a href="">Pricing</a>
                <a href="">Pages</a>
                <a href="">Contact</a>
            </nav>
            <div id="button-container">
                <button>Book Now</button>
            </div>
        </header>
        
        <div id="appoitment-container" class="w-100">
            <div id="appoint-shadowing">
                <div id="appoint-content">
                    <p>SPA & BEAUTY CENTER</p>
                    <strong>Cellulite Treatment</strong>
                    <p style="font-size:1em; font-weight:100">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi tenetur enim culpa sit perferendis earum aliquam labore quisquam eveniet, sapiente delectus tempora at excepturi voluptatibus quibusdam? Sapiente atque eum ipsam.</p>
                    <button>Make Appointment</button>
                    <div id="slider-container">
                        <div id="slider1" onclick="changeImageEvent()"> </div>
                        <div id="slider2" onclick="changeImageEvent2()"></div>
                        <div id="sliderlong" onclick="changeImageEvent3()"></div>

                    </div>
                </div>
            </div>
        </div>
        <div id="beauty-serv-container">
            <section>

            </section>
            <div>
                Our Service
                Spa & Beauty Services
            </div>
        </div>

    </main>
</body>
</html>