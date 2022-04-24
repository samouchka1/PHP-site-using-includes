<style>

:root {
    --menus-blue: rgba(14, 32, 133, 0.7);
    --navbar-bg-blue: linear-gradient(55deg, rgba(31,44,134,1) 0%, rgba(75,134,173,1) 100%);
}

.container-services {
    margin: 1rem 0 1rem 0;
}
    @media (max-width: 65rem) {
        .container-services {
            margin: 1rem 4rem 1rem 4rem;
        }
    }

        @media (max-width: 48rem) {
            .container-services {
                margin: 1rem 0 1rem 0;
            }
        }

.grid-services {
    display: grid;
    grid-template-rows: repeat(1, 1fr);
    grid-template-columns: repeat(3, 1fr);
    gap: 1rem;
    background: var(--navbar-bg-blue); /*CSS VARIABLE*/
    padding: 1rem;
}

    @media (max-width: 65rem) {
        .grid-services {
            grid-template-rows: repeat(3, 1fr);
            grid-template-columns: repeat(1, 1fr);
            background: var(--navbar-bg-blue); /*CSS VARIABLE*/
            padding: 1rem 2rem 1rem 2rem;
        }
    }
        @media (max-width: 48rem) {
            .grid-services {
                padding: 1rem 0rem 1rem 0rem;
            }
        }


.services-images {
    height: 50vh;
    width: 100%;
    transition: .5s;
}
    .services-images:hover {
        box-shadow: 4px 4px 20px rgba(255, 255, 255, 0.75);
    }


    @media (max-width: 65rem) {
        .services-images {
            height: 48vh;
        }
    }
        @media (max-width: 48rem) {
            .services-images {
                height: 38vh;
            }
        }


/*SERVICES JS  ======================================*/

.service-button {
    background-color: rgba(243, 243, 243, 0.75);
    color: var(--menus-blue); /*CSS VARIABLE*/
    cursor: pointer;
    padding: 1rem;
    margin-bottom: 1rem;
    width: 100%;
    border: none;
    text-align: left;
    font-family: 'Josefin Sans', sans-serif;
    outline: none;
    font-size: 1rem;
    transition: .7s;
  }
  
    .service-button:hover {
        background-color: rgba(243, 243, 243); 
    }
  
.section .service-panel {
    position: absolute;
    top: 52%;
    background-color: var(--menus-blue); /*CSS VARIABLE*/
    opacity: 0;
    transition: .8s;
}
    @media (max-width: 76rem) {
            .section .service-panel {
                top: 46%;
            }
        }
            @media (max-width: 65rem) {
                .section .service-panel {
                    top: 51%;
                }
            }

                @media (max-width: 48rem) {
                    .section .service-panel {
                        top: 47%;
                        font-size: .95rem;
                    }
                }
.section {
    position: relative;
}

/*==================================================*/



.text-services {
    color: white;
    font-family: 'Josefin Sans', sans-serif;
}

.services-footer {
    display: none;
}
    @media (max-width: 65rem) {
        .services-footer {
            display: flex;
        }
    }

</style>

<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">

<div class="container-services">
        <div class="grid-services">

            <div class="section">
                <img class="services-images" src="images/simple1.jpg" alt="">
                <button class="service-button">More Info</button>
                <div class="service-panel"> <!--nextElementSibling in JS-->
                    <p class="text-services"> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class="section">
                <img class="services-images" src="images/simple2.jpg" alt="">
                <button class="service-button">More Info</button>
                <div class="service-panel"> <!--nextElementSibling in JS-->
                    <p class="text-services"> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class="section">
                <img class="services-images" src="images/simple3.jpg" alt="">
                <button class="service-button">More Info</button>
                <div class="service-panel"> <!--nextElementSibling in JS-->
                    <p class="text-services"> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

        </div>
</div>

<script>

    let serviceButton = document.getElementsByClassName("service-button");

    for (i = 0; i < serviceButton.length; i++) {
    serviceButton[i].addEventListener("click", function() {
        let panel = this.nextElementSibling;
        if (panel.style.opacity === "1") {
        panel.style.opacity = "0";
        } else {
        panel.style.opacity = "1";
        }
    });
    }

</script>