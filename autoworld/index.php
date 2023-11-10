<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto World</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
</head>

<body style="font-family: 'Roboto', sans-serif;">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

        #main_contact {
            border: 1px solid #dedede;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        #main_contact h1 {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            text-transform: uppercase;
        }

        #contact_title {
            background: #f0f0f0;
            font-size: 16px;
            font-weight: bold;
            padding: 6px 15px;
            border-bottom: 1px solid #dedede;
            margin: 0;
        }

        #content_text_all_box {
            padding-left: 10px;
        }

        #main_img {
            margin-top: 20px;
        }

        #img_title {
            background: #f0f0f0;
            font-size: 15px;
            font-weight: bold;
            padding: 6px 15px;
            border-top: 1px solid #dedede;
            border-right: 1px solid #dedede;
            border-left: 1px solid #dedede;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            margin: 0;
        }

        #list_img {
            background: #f9f9f9;
            border: 1px solid #dedede;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 0;
            padding-right: 0;
            margin-left: 0;
            margin-right: 0;
        }
    </style>
    <div class="main-body">
        <?php require_once('header.html'); ?>



        <div class="tile">
            Home
        </div>
        <div id="main_contact">
            <h1 id="contact_title">Auto World</h1>
            <div id="contact_text">
                <div id="content_text_all_box">
                    <p>
                        <b>Address: </b>54 Lê Thanh Nghị, Quận Hai Bà Trưng, Hà Nội
                    </p>

                    <p>
                        <b>Phone: </b> 099.9999.999 - 096.6666.666
                    </p>

                    <p>
                        <b>Mail: </b> autoworldgroup1@aptech.com
                    </p>


                </div>
            </div>
        </div>

        <div id="main_img">
            <h2 id="img_title">
                <strong>Some pictures of the AutoWorld</strong>
            </h2>

            <div id="list_img" class="row">
                <div id="list_img_left" class="col-md-6">
                    <div class="section section--head">
                        <!-- <a class="medium_img" onclick="return select_img()" title="AutoWorld" href="https://bonbanh.com/uploads/users/529062/salon/l_1599109339.jpg" data-size="1600x1068"> -->

                    </div>
                </div>
                <style>
                    .mySlides {
                        display: none;
                    }
                </style>

                <body>



                    <div class="w3-content w3-display-container">
                        <img class="mySlides" src="img/img4.jpg" style="width:100%">
                        <img class="mySlides" src="img/img5.jpg" style="width:100%">
                        <img class="mySlides" src="img/img3.jpg" style="width:100%">
                        <img class="mySlides" src="img/img6.jpg" style="width:100%">

                        <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                        <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                    </div>

                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);

                        function plusDivs(n) {
                            showDivs(slideIndex += n);
                        }

                        function showDivs(n) {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            if (n > x.length) {
                                slideIndex = 1
                            }
                            if (n < 1) {
                                slideIndex = x.length
                            }
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            x[slideIndex - 1].style.display = "block";
                        }

                        setInterval(plusDivs,2000,1);
                    </script>
                    <div id="list_img_right" class="col-md-6 sl_list_thumb">
                        <div class="all_box section section--head">
                            <center>
                            <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                <img class="detail_icon" src="https://bonbanh.com/uploads/users/529062/salon/s_1599109358.jpg" data-img="https://bonbanh.com/uploads/users/529062/salon/l_1599109358.jpg"> </a><a href="https://bonbanh.com/uploads/users/529062/salon/l_1599109345.jpg" data-size="1600x1068" data-med="https://bonbanh.com/uploads/users/529062/salon/l_1599109345.jpg" data-med-size="1024x1024">
                                    <img class="detail_icon" src="https://bonbanh.com/uploads/users/529062/salon/s_1599109345.jpg" data-img="https://bonbanh.com/uploads/users/529062/salon/l_1599109345.jpg"> </a><a href="https://bonbanh.com/uploads/users/529062/salon/l_1599109336.jpg" data-size="1600x1068" data-med="https://bonbanh.com/uploads/users/529062/salon/l_1599109336.jpg" data-med-size="1024x1024">
                                    <img class="detail_icon" src="https://bonbanh.com/uploads/users/529062/salon/s_1599109336.jpg" data-img="https://bonbanh.com/uploads/users/529062/salon/l_1599109336.jpg"> </a><a href="https://bonbanh.com/uploads/users/529062/salon/l_1599109332.jpg" data-size="1600x1068" data-med="https://bonbanh.com/uploads/users/529062/salon/l_1599109332.jpg" data-med-size="1024x1024">
                                    <img class="detail_icon" src="https://bonbanh.com/uploads/users/529062/salon/s_1599109332.jpg" data-img="https://bonbanh.com/uploads/users/529062/salon/l_1599109332.jpg"> </a><a href="https://bonbanh.com/uploads/users/529062/salon/l_1599109355.jpg" data-size="1600x1068" data-med="https://bonbanh.com/uploads/users/529062/salon/l_1599109355.jpg" data-med-size="1024x1024">
                                    <img class="detail_icon" src="https://bonbanh.com/uploads/users/529062/salon/s_1599109355.jpg" data-img="https://bonbanh.com/uploads/users/529062/salon/l_1599109355.jpg"> </a>
                            </div>
                            </center>
                        </div>
                    </div>
            </div>
        </div>



        <?php require_once('footer.html'); ?>
    </div>

</body>

</html>