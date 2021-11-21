<style>

.container {
    margin: 1rem 0 1rem 0;
    position: relative;
}
    @media (max-width: 70rem) {
        .container {
            margin: 1rem;
        }
    }
        @media (max-width: 48rem) {
            .container {
                margin: 1rem 0 1rem 0;
            }
        }

.sidepanel-content {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin: 2rem 2rem 2rem 5rem;
}
    @media (max-width: 65rem) {
        .sidepanel-content {
            flex-direction: column;
            margin: 2rem 1rem 2rem 4rem;
        }
    }
        @media (max-width: 48rem) {
            .sidepanel-content {
                margin: .5rem 0 1rem 1.2rem;
            }
        }

.sidepanel-content2 { /*flipped, other side*/
    display: flex;
    flex-direction: row-reverse;
    align-items: center;
    margin: 2rem 5rem 2rem 2rem; /*this changes*/
}
        @media (max-width: 65rem) {
            .sidepanel-content2 {
                flex-direction: column;
                 margin: 2rem 4rem 2rem 1rem; /*this changes*/
            }
        }
            @media (max-width: 48rem) {
                .sidepanel-content2 {
                    margin: .5rem 1.2rem 1rem 0; /*this changes*/
                }
            }

.sidepanel-images {
    height: 65vh;
    width: 65%;
    padding-top: 5rem;
}
    @media (max-width: 72rem) {
        .sidepanel-images{
        height: 55vh;
        width: 70%;
        }
    }
        @media (max-width: 65rem) {
            .sidepanel-images{
            /* height: 55vh; */
            width: 80%;
            padding-top: 2rem;
            }
        }
            @media (max-width: 48rem) {
                .sidepanel-images{
                height: 20vh;
                /* width: 80%; */
                padding-top: 0;
                }
            }

#panel-text1 { /*for JS*/
    display: none;
}

#panel-text2 { /*for JS*/
    display: none;
}

#panel-text3 { /*for JS*/
    display: none;
}

.sidepanel-text {
    width: 35%;
    margin-left: 2rem;
    font-size: 1.3rem;
    font-family: 'Nunito', sans-serif;
}
    @media (max-width: 72rem) {
        .sidepanel-text {
            width: 45%;
            font-size: 1.15rem;
            margin-left: .5rem;
        }
    }
        @media (max-width: 65rem) {
            .sidepanel-text {
            width: 65%;
            }
        }
            @media (max-width: 48rem) {
                .sidepanel-text {
                width: 80%;
                font-size: .90rem;
                }
            }
.sidepanel-text2 { /*flipped, other side*/
    width: 35%;
    margin-right: 2rem; /*this changes*/
    font-size: 1.3rem;
    font-family: 'Nunito', sans-serif;
}
     @media (max-width: 72rem) {
        .sidepanel-text2 {
            width: 45%;
            font-size: 1.15rem;
            margin-right: .5rem; /*this changes*/
        }
    }
         @media (max-width: 65rem) {
            .sidepanel-text2 {
                width: 65%;
                }
            }
                @media (max-width: 48rem) {
                    .sidepanel-text2 {
                        width: 80%;
                        font-size: .90rem;
                    }
                }


/* TOP AND BOTTOM SIDE PANELS */
#sidepanel-top, #sidepanel-bottom {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.404);
    top: 0;
    right: 0;
    width: 0; /*transition needs a deault vale*/
    height: 100%;
    transition: width .5s; /*vale to change should be defined*/
}
    #openButton-top, #openButton-bottom {
        position: absolute;
        right: 3%;
        top: 48%;
        background-color: rgba(255, 255, 255, 0);
        width: 1.5rem;
        height: 1.5rem;
        border: solid rgba(255, 255, 255, 0.75);
        border-width: 0 5px 5px 0;
        display: inline-block;
        padding: 5px;
        transform: rotate(135deg);
    }

        @media (max-width: 48rem) {
            #openButton-top, #openButton-bottom {
                width: 1.2rem;
                height: 1.2rem;
            }
        }

        #openButton-top:hover, #openButton-bottom:hover {border: solid rgb(26, 119, 17); border-width: 0 5px 5px 0;}

    #closeButton-top, #closeButton-bottom {
        position: absolute;
        left: 3%;
        top: 48%;
        background-color: rgba(70, 70, 70, 0);
        width: 1.5rem;
        height: 1.5rem;
        display: none;
        border: solid rgba(0, 0, 0, 0.75);
        border-width: 0 5px 5px 0;
        padding: 5px;
        transform: rotate(-45deg); /*this changes*/
        
    }
        #closeButton-top:hover, #closeButton-bottom:hover {border: solid rgba(134, 8, 8, 0.75); border-width: 0 5px 5px 0;}

        @media (max-width: 48rem) {
            #closeButton-top, #closeButton-bottom {
                width: 1.2rem;
                height: 1.2rem;
            }
        }



/*MIDDLE SIDE PANEL*/
#sidepanel-middle {
    position: absolute;
    background-color: rgba(255, 255, 255, 0.404);
    top: 0;
    left: 0; /*this changes*/
    width: 0;
    height: 100%;
    transition: width .5s;
}
    #openButton-middle {
        position: absolute;
        left: 3%; /*this changes*/
        top: 48%;
        background-color: rgba(255, 255, 255, 0);
        width: 1.5rem;
        height: 1.5rem;
        border: solid rgba(255, 255, 255, 0.75);
        border-width: 0 5px 5px 0;
        display: inline-block;
        padding: 5px;
        transform: rotate(-45deg); /*this changes*/
    }
            @media (max-width: 48rem) {
                #openButton-middle {
                    width: 1.2rem;
                    height: 1.2rem;
                }
            }
        #openButton-middle:hover {border: solid rgb(26, 119, 17); border-width: 0 5px 5px 0;}
    
    #closeButton-middle {
        position: absolute;
        right: 3%; /*this changes*/
        top: 48%;
        background-color: rgba(70, 70, 70, 0);
        width: 1.5rem;
        height: 1.5rem;
        display: none;
        border: solid rgba(0, 0, 0, 0.75);
        border-width: 0 5px 5px 0;
        padding: 5px;
        transform: rotate(135deg); /*this changes*/
    }
        #closeButton-middle:hover {border: solid rgba(134, 8, 8, 0.75); border-width: 0 5px 5px 0;}

            @media (max-width: 48rem) {
                #closeButton-middle {
                    width: 1.2rem;
                    height: 1.2rem;
                }
            }

.content {
    position: relative;
    height: 100vh;
    width: 100%;
}
    @media (max-width: 48rem) {
        .content {
        height: 50vh;
        margin: 0;
        }
    }

.images-home {
    height: 100%;
    width: 100%;
}

.text-left {
    position: absolute;
    width: 25rem;
    top: 40%;
    left: 3%;
    font-size: 2rem;
    font-family: 'Nunito', sans-serif;
    font-weight: 700;
    color: rgba(255, 255, 255, .75);
    transition: .2s;
}

    @media (max-width: 67rem) {
        .text-left {
        width: 15rem;
        top: 35%;
        font-size: 1.75rem;
        font-weight: 700;
        }
    }

        @media (max-width: 48rem) {
            .text-left {
            width: 8rem;
            top: 15%;
            font-size: 1.3rem;
            font-weight: 700;
            }
        }
    .text-left:hover {
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 5px white;
        background: radial-gradient(closest-side, #ffffff25, #ffffff18, #00000000);
    }

/*text for middle image, right side*/
.text-right {
    position: absolute;
    width: 25rem;
    top: 40%;
    right: 1%; /*this changes*/
    font-size: 2rem;
    font-family: 'Nunito', sans-serif;
    font-weight: 700;
    color: rgba(255, 255, 255, .75);
    transition: .2s;
}
    @media (max-width: 67rem) {
        .text-right {
            width: 15rem;
            top: 35%;
            font-size: 1.75rem;
            font-weight: 700;
        }
    } 
        @media (max-width: 48rem) {
            .text-right {
                width: 8rem;
                top: 15%;
                font-size: 1.3rem;
                font-weight: 700;
                }
            }
    .text-right:hover {
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 5px white;
        background: radial-gradient(closest-side, #ffffff25, #ffffff18, #00000000);
    }


</style>

<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

<div class="container">
        <div class="content top">
                <img class="images-home" src="images/plain-bg1-blue.jpg" alt="">
                <p class="text-left">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati, illum.</p>

                <!--FIRST PANEL-->

                <button id="openButton-top"></button>
                <div id="sidepanel-top" class="sidepanels">

                        <div class="sidepanel-content">
                            <img src="images/simple1.jpg" class="sidepanel-images" alt="">
                            <p class="sidepanel-text" id="panel-text1">Lorem ipsum, dolor sit amet consectetur adipisicing
                                 elit. Quibusdam rerum quidem esse maiores quae recusandae nam consequuntur, facere accusamus
                                  exercitationem.Sequi provident error sit architecto.</p>
                        </div>
                        <button id="closeButton-top"></button>

                </div>

        </div>
        <div class="content middle">
            <img class="images-home" src="images/plain-bg1-blue.jpg" alt="">
            <p class="text-right">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, tenetur!</p>

                <!--MIDDLE PANEL-->

                <button id="openButton-middle"></button> 
                <div id="sidepanel-middle" class="sidepanels">

                    <div class="sidepanel-content2"> <!--unique class for CSS-->
                        <img src="images/simple2.jpg" class="sidepanel-images" alt="">
                        <p class="sidepanel-text2" id="panel-text2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam rerum
                                quidem esse maiores quae recusandae nam consequuntur, facere accusamus exercitationem.
                                Sequi provident error sit architecto.</p>
                    </div>
                    <button id="closeButton-middle"></button>

                </div>
        </div>
        <div class="content bottom">
            <img class="images-home" src="images/plain-bg1-blue.jpg" alt="">
            <p class="text-left">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo, tenetur!</p>

                <!--BOTTOM PANEL-->

                <button id="openButton-bottom"></button>
                <div id="sidepanel-bottom" class="sidepanels">

                    <div class="sidepanel-content">
                        <img src="images/simple3.jpg" class="sidepanel-images" alt="">
                        <p class="sidepanel-text" id="panel-text3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam rerum
                                quidem esse maiores quae recusandae nam consequuntur, facere accusamus exercitationem.
                                Sequi provident error sit architecto.</p>
                    </div>
                    <button id="closeButton-bottom"></button>

                </div>
        </div>
    </div>

    <script>
    //SIDE PANEL 1
    const sidePanelTop = document.getElementById("sidepanel-top");
    const openClick = document.getElementById("openButton-top");
    const closeClick = document.getElementById("closeButton-top");

    const panelText1 = document.getElementById("panel-text1");

    openClick.addEventListener("click", openNav);
    closeClick.addEventListener("click", closeNav);

    function openNav() {
        sidePanelTop.style.width = "60%";
        closeClick.style.display = "block";
        openClick.style.display = "none";

        setTimeout(function(){
        panelText1.style.display = "block"}, 500);
    }
    
    function closeNav() {
        sidePanelTop.style.width = "0";
        closeClick.style.display = "none";
        openClick.style.display = "block";

        panelText1.style.display = "none";
    }


    //SIDE PANEL 2
    const sidePanelMiddle = document.getElementById("sidepanel-middle");
    const openClick2 = document.getElementById("openButton-middle");
    const closeClick2 = document.getElementById("closeButton-middle");

    const panelText2 = document.getElementById("panel-text2");
    
    openClick2.addEventListener("click", openNav2);
    closeClick2.addEventListener("click", closeNav2);
    
    function openNav2() {
        sidePanelMiddle.style.width = "60%";
        closeClick2.style.display = "block";
        openClick2.style.display = "none";

        setTimeout(function(){
        panelText2.style.display = "block"}, 500);
    }
        
    function closeNav2() {
        sidePanelMiddle.style.width = "0";
        closeClick2.style.display = "none";
        openClick2.style.display = "block";

        panelText2.style.display = "none";
    }


    //SIDE PANEL 3
    const sidePanelBottom = document.getElementById("sidepanel-bottom");
    const openClick3 = document.getElementById("openButton-bottom");
    const closeClick3 = document.getElementById("closeButton-bottom");

    const panelText3 = document.getElementById("panel-text3");
    
    openClick3.addEventListener("click", openNav3);
    closeClick3.addEventListener("click", closeNav3);
    
        function openNav3() {
        sidePanelBottom.style.width = "60%";
        closeClick3.style.display = "block";
        openClick3.style.display = "none";

        setTimeout(function(){
            panelText3.style.display = "block"}, 500);
        }
        
        function closeNav3() {
        sidePanelBottom.style.width = "0";
        closeClick3.style.display = "none";
        openClick3.style.display = "block";

        panelText3.style.display = "none";
        }


    </script>