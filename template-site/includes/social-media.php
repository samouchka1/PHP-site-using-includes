<style>
    .social-media {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: center;
        margin-top: 1rem;
        margin-left: 39%;
        margin-bottom: 1rem;
        width: 21%;
    }
        @media (max-width: 70rem) {
            .social-media {
            justify-content: space-evenly;
            width: 28%;
            margin-left: 37%;
            }
        }
            @media (max-width: 48rem) {
                .social-media {
                justify-content: space-evenly;
                width: 55%;
                margin-left: 22%;
                }
            }

    .fa {
        padding: .6rem;
        border-radius: 50%;
        text-align: center;
        width: 1rem;
        color:white;
        opacity: .75;
    }
        .fa:hover {
            opacity: 1;
        }

    .fa-facebook {background:#3b5998;}
        .fa-facebook:hover {background: #3b5998;}
    .fa-twitter {background: #55ACEE;}
        .fa-twitter:hover {background: #55ACEE;}
    .fa-google {background: #dd4b39;}
        .fa-google:hover {background: #dd4b39;}
    .fa-linkedin {background: #007bb5;}
        .fa-link:hover {background: #007bb5;}
    .fa-youtube {background: #bb0000;}
        .fa-youtube:hover { background: #bb0000;}
    .fa-reddit {background: #ff5700;}
        .fa-reddit:hover {background: #ff5700;}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="social-media">
        <a class="fa fa-facebook" href="https://www.facebook.com/" alt="facebook" target="_blank"></a>
        <a class="fa fa-twitter" href="https://twitter.com/" alt="twitter" target="_blank"></a>
        <a class="fa fa-google" href="https://www.google.com/" alt="google" target="_blank"></a>
        <a class="fa fa-youtube" href="https://www.youtube.com/" alt="youtube" target="_blank"></a>
        <a class="fa fa-reddit" href="https://www.reddit.com/" alt="reddit" target="_blank"></a>
</div>