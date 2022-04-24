<style>
:root {
    --menus-blue: rgba(14, 32, 133, 0.7);
    --navbar-bg-blue: linear-gradient(55deg, rgba(31,44,134,1) 0%, rgba(75,134,173,1) 100%);
}

.slideshow {
    position: relative;
    margin: auto;
    margin-top: 1rem;
    width: 98%;
    height: 85vh;
}

    @media (max-width: 48rem){
        .slideshow {
            height: 50vh;
        }
    }
.slides {  /*hide images by default*/
    display: none;
}

.fade { 
    animation-name: fade;
    animation-duration: 1s;
}
    @keyframes fade {
        0% { opacity: .5 }
        100% { opacity: 1 }
    }

.slide-img {
    position: relative;
    display: block;
    margin: auto;
    text-align: center;
    height: 85vh;
    width: 85%;
    box-shadow: black 1px 1px 10px; /*======================optional - makes it stand out with similar-color background*/
}

    @media (max-width: 48rem){
        .slide-img {
            height: 50vh;
            width: 100%;
        }
    }

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 46%;
    background-color: rgba(255, 255, 255, 0);
    width: .9rem;
    height: .9rem;
    border: solid var(--menus-blue);
    border-width: 0 5px 5px 0;
    display: inline-block;
    padding: 4px;
}

    @media (max-width: 48rem){
        .prev, .next {
            top: 43%;
            width: .6rem;
            height: .6rem;
            }
        }

        .prev {  
            left: 4%;
            transform: rotate(135deg);  
        }
        .next { 
            right: 4%;
            transform: rotate(-45deg);
        }
            .prev:hover, .next:hover { 
                border: solid rgb(26, 119, 17);
                border-width: 0 6px 6px 0;
            }


</style>

<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

<div class="slideshow" id="slideshow">

    <div class="slides fade">
        <img class="slide-img" src="images/simple1.jpg">
    </div>
        
    <div class="slides fade">
        <img class="slide-img" src="images/simple2.jpg">
    </div>
        
    <div class="slides fade">
        <img class="slide-img" src="images/simple3.jpg">
    </div>
    
        <!--previous/next buttons-->
    <a class="prev" onclick="plusSlides(-1)"></a>
    <a class="next" onclick="plusSlides(1)"></a>

</div>
<script>

// document.getElementsByClassName("prev").addEventListener("click", plusSlides(-1));
// document.getElementsByClassName("next").addEventListener("click", plusSlides(1));

let slideIndex = 1;
showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

function showSlides(n) {
    let slides = document.getElementsByClassName("slides");
        if (n > slides.length) { 
            slideIndex = 1
        }
        if (n < 1) { 
            slideIndex = slides.length 
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
}

</script>