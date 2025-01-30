        document.addEventListener('DOMContentLoaded', function () {
            var images = ['img/golf7.png', 'img/blackgolf7.png'];
            var golfImage = document.getElementById('golf-img');
            var currentImageIndex = 0;

            function changeImage() {
                golfImage.src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            setInterval(changeImage, 3000);
        });


        document.addEventListener('DOMContentLoaded', function () {
            var images = ['img/audi a7.png', 'img/blackaudi a7.png'];
            var golfImage = document.getElementById('audi-img');
            var currentImageIndex = 0;

            function changeImage() {
                golfImage.src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            setInterval(changeImage, 3000);
        });


        document.addEventListener('DOMContentLoaded', function () {
            var images = ['img/BMW M4.png', 'img/blackBMW M4.png'];
            var golfImage = document.getElementById('BMW-img');
            var currentImageIndex = 0;

            function changeImage() {
                golfImage.src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            setInterval(changeImage, 3000);
        }); 

        document.addEventListener('DOMContentLoaded', function () {
            var images = ['img/mercedes benz.png', 'img/blackmercedes benz.png'];
            var golfImage = document.getElementById('mercedes-img');
            var currentImageIndex = 0;

            function changeImage() {
                golfImage.src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            setInterval(changeImage, 3000);
        });        

        document.addEventListener('DOMContentLoaded', function () {
            var images = ['img/opel.png', 'img/blackopel.png'];
            var golfImage = document.getElementById('opel-img');
            var currentImageIndex = 0;

            function changeImage() {
                golfImage.src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            setInterval(changeImage, 3000);
        });  

            document.addEventListener('DOMContentLoaded', function () {
            var images = ['img/GCLASS.png', 'img/blackGCLASS.png'];
            var golfImage = document.getElementById('GCLASS-img');
            var currentImageIndex = 0;

            function changeImage() {
                golfImage.src = images[currentImageIndex];
                currentImageIndex = (currentImageIndex + 1) % images.length;
            }

            setInterval(changeImage, 3000);
        }); 

// SKRIPTI I CART.HTML ⏬
      document.addEventListener('DOMContentLoaded', function() {
            const rentButtons = document.querySelectorAll('.rent-btn');

            rentButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const carDiv = button.closest('.car');
                    const itemImageSrc = carDiv.querySelector('img').src;

                    // Store selected item's image source in session storage
                    sessionStorage.setItem('selectedItemImageSrc', itemImageSrc);

                    // Redirect to cart.html
                    window.location.href = 'cart.html';
                });
            });
        });

