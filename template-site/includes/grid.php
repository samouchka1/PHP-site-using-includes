
<style>

:root {
    --navbar-bg-blue: linear-gradient(55deg, rgba(31,44,134,1) 0%, rgba(75,134,173,1) 100%);
    --navbar-bg-blue-hover: linear-gradient(55deg, rgba(37,54,170,1) 0%, rgba(90,163,211,1) 100%); 
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
            padding: 5rem;
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
                    margin: 1.6rem;
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

</style>
    
<div class="container"> <!--container GRID-->
    <div class="item1"></div>
    <div class="item2"></div>
    <div class="item3"></div>
    <div class="item4"></div>
    <div class="item5"></div>
    <div class="item6"></div>
</div>