<style>

    #content-wrapper{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
    #featured{
        object-fit: cover;
        cursor: pointer;
        border: 2px solid black;
    }
    .thumbnail{
        object-fit: cover;
        width: 102px;
        height: 102px;
        cursor: pointer;
        opacity: 0.5;
        margin:16px 0;
        border-radius: 5.942px;
    }

    .thumbnail:hover{
        opacity:1;
    }

    .active{
        opacity: 1;
    }

    #slide-wrapper{
        max-width: 500px;
        display: flex;
        min-height: 100px;
        align-items: center;
    }

    #slider{
        max-height:450px ;
        overflow-y: auto;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        padding: 20px 0px;
    }
    .arrow{
        width: 30px;
        height: 30px;
        cursor: pointer;
        transition: .3s;
        transform: rotate(90deg);
    }

    .arrow:hover{
        opacity: .5;
        width: 35px;
        height: 35px;
    }
    #slider::-webkit-scrollbar {
        display: none;
    }
    .column{
        display: flex;
        align-items: center;
    }
    #slide-wrapper{
        display: flex;
        flex-direction: column;
    }
    #featured{
        width: 550px;
        height: 550px;
        border: none;
        border-radius: 24px;
    }
</style>
</head>
<body>

<div id="content-wrapper " style="">
    <div class="column">
        <div style="display: block;">
            <div id="slide-wrapper" style="margin-right: 44px">
                <img id="slideLeft" class="arrow" src="{{asset('assets/clients/images/arrow-left.png')}}">
                <div id="slider">
                    <?php
                    foreach ($productDetails->otherImages as $item) {
                        echo '<img class="thumbnail" src="' . $item . '">';
                    }
                    ?>
                </div>

                <img id="slideRight" class="arrow" src="{{asset('assets/clients/images/arrow-right.png')}}">
            </div>
        </div>
        <?php
        echo '<img id=featured src="'.$productDetails->otherImages[0].'">'
        ?>
    </div>
</div>

<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')

    let activeImages = document.getElementsByClassName('active')

    for (var i=0; i < thumbnails.length; i++){

        thumbnails[i].addEventListener('mouseover', function(){
            console.log(activeImages)

            if (activeImages.length > 0){
                activeImages[0].classList.remove('active')
            }


            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }


    let buttonBottom = document.getElementById('slideRight');
    let buttonTop = document.getElementById('slideLeft');

    buttonBottom.addEventListener('click', function(){
        document.getElementById('slider').scrollTop += 50
    })

    buttonTop.addEventListener('click', function(){
        document.getElementById('slider').scrollTop -= 50
    })


</script>
