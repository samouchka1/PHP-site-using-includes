<style>

:root {
    --navbar-bg-blue: linear-gradient(55deg, rgba(31,44,134,1) 0%, rgba(75,134,173,1) 100%);
    --navbar-bg-blue-hover: linear-gradient(55deg, rgba(37,54,170,1) 0%, rgba(90,163,211,1) 100%);
    scroll-behavior: smooth; 
}

    .container { /*container*/
        display: grid;
        height: 100%;
        width: auto;
        grid-template-rows: repeat(5, 1fr);
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
        margin: 1rem 2rem 1rem 2rem;
        justify-content: center;
        align-content: center;
    }
            @media (max-width: 40rem) {
                    .container {
                    margin: 1rem 0 1rem 0;
                    }
                }

        .item1, .item2, .item3, .item4, .item5, .item6 {
            padding: 3rem;
            font-size: 1.5rem;
            border-radius: 10px;
        }
            .item1:hover, .item2:hover, .item3:hover, .item4:hover, .item5:hover, .item6:hover {
                box-shadow: 3px 3px 5px rgba(255, 255, 255, 0.60);
                animation-name: zoom;
                animation-duration: 1s;
                animation-fill-mode: forwards;
            }
                @keyframes zoom {
                    0% { transform: scale(1.0035);}
                    100% { transform: scale(1.035);}
                }

            @media (max-width: 68rem) {
                .item1, .item2, .item3, .item4, .item5, .item6 {
                    padding: 2rem;
                    font-size: 1rem;
                }
            }

                @media (max-width: 40rem) {
                    .item1, .item2, .item3, .item4, .item5, .item6 {
                        padding: 1.4rem;
                        font-size: .85rem;
                    }
                }

            .item1 {
                background: var(--navbar-bg-blue);
                grid-row: 1/3;
                grid-column: 1/3;
            }
                .item1:hover {background: var(--navbar-bg-blue-hover);}

            .item2 {
                background: var(--navbar-bg-blue);
                grid-row: 1;
                grid-column: 3;
            }
                .item2:hover {background: var(--navbar-bg-blue-hover);}

            .item3 {
                background: var(--navbar-bg-blue);
                grid-row: 2/4;
                grid-column: 3;
            }
                .item3:hover {background: var(--navbar-bg-blue-hover);}

            .item4{
                background: var(--navbar-bg-blue);
                grid-row: 3/6;
                grid-column: 1;
            }
                .item4:hover {background: var(--navbar-bg-blue-hover);}

            .item5 {
                background: var(--navbar-bg-blue);
                grid-row: 3;
                grid-column: 2;
            }
                .item5:hover {background: var(--navbar-bg-blue-hover);}

            .item6 {
                background: var(--navbar-bg-blue);
                grid-row: 4/6;
                grid-column: 2/4;
            }
                .item6:hover {background: var(--navbar-bg-blue-hover);}
            

            @media (max-width: 68rem) {
                .container {
                    grid-template-rows: repeat(8, 1fr);
                    grid-template-columns: repeat(2, 1fr);
                    margin: .65rem 0 0 0;
                    gap: .65rem;
                }
                .item1 {
                    grid-column: 1;
                    grid-row: 1/5;
                }
                .item2 {
                    grid-column: 2;
                    grid-row: 1;
                }
                .item3 {
                    grid-column: 2;
                    grid-row: 2/5;
                }
                .item4 {
                    grid-column: 1;
                    grid-row: 6/9;
                }
                .item5 {
                    grid-column: 1;
                    grid-row: 5;
                }
                .item6 {
                    grid-column: 2;
                    grid-row: 5/9;
                }
            }

    .buttons {
        position: fixed;
        left: 47%;
        top: 78%;
        background: var(--navbar-bg-blue);
        padding: 1rem;
        font-family: 'Nunito', sans-serif;
        color: rgba(255, 255, 255, 0.75);
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.253);
        font-size: 1rem;
        font-weight: 900;
        margin: .5rem .5rem 0 .5rem;
        border-radius: 10px;
        border: none;
        z-index: 1;
    }
        .buttons:hover {
            background: var(--navbar-bg-blue-hover);
            color: rgba(255, 255, 255);
            box-shadow: 4px 4px 6px rgba(0, 0, 0, 0.253);
            animation-name: zoom;
            animation-duration: 1s;
            animation-fill-mode: forwards;
        }

        @media (max-width: 68rem) {
            .buttons {
                left: 45%;
            }
        }
            @media(max-width: 48rem) {
                .buttons {
                    left: 40%;
                    font-size: 1rem;
                }
            }

    #unload-btn { display: none; } /*hide unload button on page load*/


/*============================================TEST================================================*/
        .grid-images {
            height: 100%;
            width: 100%;
            float: left;
            margin: .45rem;
            border-radius: 25px;
            transition: .5s;
        }
            .grid-images:hover {
                box-shadow: 1px 1px 13px rgba(255, 255, 255, 0.75);
            }
        
            .one, .six  {
                height: 40%;
                width: 25%;
            }

            .three, .four {
                height:25%;
                width:55%;
            }

                .three {
                    height: 35%;
                    width: 50%;
                }
            
            .two, .five {
                height: 100%;
                width: 45%;
            }

    .grid-text {
        font-family: 'Nunito', sans-serif;
        font-size: 1rem;
        margin: 0;
        transition: .45s;
    }

        /* .grid-text:hover {
            font-size: 1.05rem
        } */
    
    


</style>

<!-- <a href="#load-more" style="text-decoration:none;"><button class="buttons" id="load-btn">More</button></a> -->
<!-- <a href="#" style="text-decoration:none;"><button class="buttons" id="unload-btn">Less</button></a> -->
    
<div class="container"> <!--container GRID-->
    <div class="item1"><img src="images/profile.jpg" class="grid-images one"/>

    <p class="grid-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ullam facere ipsam similique ratione quam mollitia nostrum quod iusto natus culpa odio nobis perferendis, ipsa eum dicta vel explicabo neque eaque. Quae atque laborum eos. Architecto obcaecati, vel soluta, distinctio alias possimus nulla quia doloribus dolorem at tempore hic nisi!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic quod officia debitis incidunt atque voluptatum beatae ullam. Blanditiis est a nobis deleniti animi recusandae officiis maiores repellat cupiditate perferendis voluptatum fugiat quos non libero similique cumque deserunt officia reiciendis, inventore doloribus. Quisquam quod rerum obcaecati nam laboriosam, adipisci itaque.</p class="grid-text"></div>
    <div class="item2"><img src="images/profile.jpg" class="grid-images two"/>
    <p class="grid-text"> non libero similique cumque deserunt officia reiciendis, inventore doloribus. Quisquam quod rerum obcaecati nam laboriosam, adipisci itaque.</p class="grid-text"></div>
    <div class="item3"><img src="images/profile.jpg" class="grid-images three"/>
    <p class="grid-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic quod officia debitis incidunt atque voluptatum beatae ullam. Blanditiis est a nobis deleniti animi recusandae officiis maiores repellat cupiditate perferendis voluptatum fugiat quos non libero similique cumque deserunt officia reiciendis, inventore doloribus. Quisquam quod rerum obcaecati nam laboriosam, adipisci itaque.</p class="grid-text"></div>
    <div class="item4"><img src="images/profile.jpg" class="grid-images four"/>
    <p class="grid-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic quod officia debitis incidunt atque voluptatum beatae ullam. Blanditiis est a nobis deleniti animi recusandae officiis maiores repellat cupiditate perferendis voluptatum fugiat quos non libero similique cumque deserunt officia reiciendis, inventore doloribus. Quisquam quod rerum obcaecati nam laboriosam, adipisci itaque.</p class="grid-text"></div>
    <div class="item5"><img src="images/profile.jpg" class="grid-images five"/>
    <p class="grid-text"> non libero similique cumque deserunt officia reiciendis, inventore doloribus. Quisquam quod rerum obcaecati nam laboriosam, adipisci itaque.</p class="grid-text"></div>
    <div class="item6"><img src="images/profile.jpg" class="grid-images six"/>
    <p class="grid-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quos, nemo totam nostrum, amet ducimus quod ipsa perspiciatis libero dolorum cumque illum? Repellendus, ex iusto obcaecati, libero nostrum nesciunt ducimus eaque at commodi eligendi vero excepturi minus assumenda, eum sapiente beatae voluptates quos perferendis facere! Ipsam fugiat dolor sequi qui!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas hic quod officia debitis incidunt atque voluptatum beatae ullam. Blanditiis est a nobis deleniti animi recusandae officiis maiores repellat cupiditate perferendis voluptatum fugiat quos non libero similique cumque deserunt officia reiciendis, inventore doloribus. Quisquam quod rerum obcaecati nam laboriosam, adipisci itaque.</p class="grid-text"></div>
</div>

<div id="load-more"></div>
<!-- <div id="load-more2"></div> -->

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="jquery-3.6.0.min.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.3/jquery.scrollTo.min.js"></script> -->
<script src="jquery.scrollTo-2.1.3/jquery.scrollTo.js"></script>

<script type="text/javascript">

    $('#load-btn').click(function(){
        
        $('#load-more').load("includes/grid-addon.php").slideDown('slow'),
        // $('#load-more2').load("includes/grid-addon2.php").slideDown('slow'),

            $('#load-more').show(),
            // $('#load-more2').show(),

        $("#load-btn").hide(),
        $("#unload-btn").show(),
        $.scrollTo('#load-more')

    });

    $("#unload-btn").click(function(){
        $("#load-more").hide(),
        // $("#load-more2").hide(),

        $("#unload-btn").hide(),
        $("#load-btn").show()
    });
    

</script>
