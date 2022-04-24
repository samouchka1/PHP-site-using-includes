<style>

:root {
    --menus-blue: rgba(14, 32, 133, 0.7);
    --navbar-bg-blue: linear-gradient(55deg, rgba(31,44,134,1) 0%, rgba(75,134,173,1) 100%);
}

.container-contact {
    color: white;
    font-family: 'Nunito', sans-serif;
    background: var(--navbar-bg-blue);
    padding: 1rem 0 1rem 0;
    margin: 1rem 0 1rem 0;
}
    @media (max-width: 48rem) {
        .container-contact {
            margin: 1rem 0 1rem 0;
        }
    }

.forms {
    display: flex;
    flex-direction: row;
    gap: 3rem;
    position: relative;
    margin: 2rem 5rem 2rem 5rem;
    left: 15%;
}
    @media (max-width: 72rem) {
        .forms {
            left: 7%;
            gap: 2rem;
        }
    }
        @media (max-width: 48rem) {
            .forms {
                left: 5%;
                margin: 2rem 1rem 2rem 1rem;
                flex-direction: column-reverse;
            }
        }
#image-contact {
    position: relative;
    width: 35%;
    height: 50vh;
    box-shadow: black 1px 1px 7px; /*================optional*/
}

    @media (max-width: 72rem) {
        #image-contact {
            width: 38%;
            height: 42vh;
            left: 0;
        }
    }
        @media (max-width: 48rem) {
            #image-contact {
                width: 75vw;
                height: 75%;
                left: 0;
            }
        }

.text-contact {
    position: relative;
    text-align: center;
    left: 20%;
    width: 55%;
    color: white;
    font-family: 'Nunito', sans-serif;
    background-color: rgba(252, 252, 252, 0.25);
    font-size: 1.2rem;
    font-family: 'Josefin Sans', sans-serif;
    font-weight: 500;
    padding: 1rem 2rem 1rem 2rem;
    transition: .2s;
}

    @media (max-width: 48rem) {
        .text-contact {
            padding: 1rem 4rem 1rem 4rem;
            left: 7%;
        }
    }

#thank-you {
    font-weight: 500;
    opacity: 0;
    transition: 1s;
}

    .text-contact:hover #thank-you {
        opacity: 1;
        color: rgb(255, 255, 255);
        text-shadow: 1px 1px 3px white;
        background: radial-gradient(closest-side, #ffffff25, #ffffff18, #00000000);
    }

.forms {
    margin-top: 3rem;
}
    @media (max-width: 48rem) {
        .forms {
            margin-top: 1rem;
        }
    }


</style>

<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


<div class="container-contact">

        <div class="text-contact">
            <p>We value your opinion!<br>
                    Please feel free to send any comments, questions or concerns ourway.
                    We look forward to assist you. <br><br>
                    <span id="thank-you">Thank you.</span>
            </p>
        </div>

        <div class="forms">
                
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!--php form-->
                
                <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" placeholder="Enter name" required><br><!--without "name", input does not get sent-->
                <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="Enter email" required><br><br>
                <label for="comments">Message:</label><br>
                    <textarea id="message" name="message" cols="40" rows="10" placeholder="Enter message" required></textarea><br><br>

                <input type="submit" name="submit" value="Submit"> <!--"name" attribute is very important; for PHP to access-->

            </form>

            <img src="images/contact.jpg" alt="contact us" id="image-contact">

        </div>

    </div>



<!--PHP BACK-END-->
<?php 

if(isset($_POST["submit"])) {

    $hostname='localhost';
    $username = "root";
    $password = "test";

    $connection_info = "mysql:host=localhost; dbname=database";


    try {
        $database = new PDO($connection_info, $username, $password);
        $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //<== this MUST be added


        //INSERT DATA================================================================================
        
        $sql = "INSERT INTO user_input (name, email, message)
            VALUES (' ".$_POST["name"]." ' , ' ".$_POST["email"]." ' , ' ".$_POST["message"]." ')";//<=notice use of quotes

        if ($database->query($sql)) {
            echo "<script type='text/javascript'>
                alert('Form data successfully sent!');
                </script>";
        }
        else {
            echo "<script type='text/javascript'>
                alert('Data not successfully inserted.');
                </script>";
        }
        //==========================================================================================

    } catch(PDOException $exception) {
        $error_message = $exception -> getMessage();
            echo $error_message;
    }
}

?>

<!-- <script>
    window.location="http://localhost/PHP_PROJECTS/template-site/index.php";
</script> -->