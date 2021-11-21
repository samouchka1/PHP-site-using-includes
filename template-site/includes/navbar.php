<style>

:root {
    --navbar-bg-blue: linear-gradient(55deg, rgba(31,44,134,1) 0%, rgba(75,134,173,1) 100%);
}
    
.header {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
    background: var(--navbar-bg-blue); /*CSS VARIABLE*/
    padding: 1rem;
    margin: 0;
    height: 5vh;
}

    @media (max-width: 48rem) {
        .header {
            font-size: 1rem;
            justify-content: space-between;
            margin: 0;
        }
    }

.nav-links {
    font-family: 'Nunito', sans-serif;
    color: rgba(255, 255, 255, 0.75);
    font-size: 1.2rem;
    font-weight: 900;
    text-decoration: none;
    transition: .2s;
}

    .nav-links:hover {
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 5px white;
        background: radial-gradient(closest-side, #ffffff25, #ffffff18, #00000000);
        padding: .5rem 0 .5rem 0;
    }

    @media (max-width: 48rem) {
        .nav-links {
            font-size: 1rem;
        }
    }
</style>

<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

<div class="header">
        <a class="nav-links" href="index.php">Home</a>
        <a class="nav-links" href="services.php">Services</a>
        <a class="nav-links" href="reviews.php">Reviews</a>
        <a class="nav-links" href="about.php">About</a>
        <a class="nav-links" href="contact.php">Contact Us</a>
</div>