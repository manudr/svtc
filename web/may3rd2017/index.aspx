<%@ Page Language="C#" %>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sri Venkateswara Swamy Temple Of Colorado</title>
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mediaQuery.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <!-- #include file ="header.aspx" -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="panel panel-custom">
                    <div class="panel-heading-custom">Daily Schedule</div>
                    <div class="panel-body">
                        09:00AM	Suprabhatha Seva<br>
                        10:00AM	Nitya Archana<br>
                        10:30AM	First Archana<br>
                        08:00AM	Last Archana<br>
                        08:20AM	Ekantha Seva<br>
                        <div class="customTextStyle1">
                            Archana - Every 30 Minutes after first archana
                        </div>
                        <div class="customTextStyle1">
                            Archana schedule may change on special event days.
                        </div>
                        <div class="customTextStyle1">
                            Temple will not use devotee prepared yogurt or grocery store yogurt for any abhishekam at the temple. The temple priests will prepare yogurt as needed for the abhishekam. Devotees can bring fat free milk instead.
                        </div>
                    </div>
                </div>
                <br>
                <div class="panel panel-custom">
                    <div class="panel-heading-custom">Today's Panchangam</div>
                    <div class="panel-body">
                        <iframe name='iframe1'
                                id='iframe1'
                                src="http://www.mypanchang.com/mobilewidget.php?cityname=Denver-CO&color=452603&displaymode=full"
                                scrolling="no"
                                frameborder="0"
                                style="border:none;"
                                allowTransparency="true">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <img class="img-responsive mySlides w3-animate-fading" src="slides/img1.jpg">
                <img class="img-responsive mySlides w3-animate-fading" src="slides/img2.jpg">
                <img class="img-responsive mySlides w3-animate-fading" src="slides/img3.jpg">
                <img class="img-responsive mySlides w3-animate-fading" src="slides/img4.jpg">
                <script>
                    var myIndex = 0;
                    carousel();
                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}
                        x[myIndex-1].style.display = "block";
                        setTimeout(carousel, 5000);
                    }
                </script>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-custom">
                    <div class="panel-body">
                        <div class="otherDetails">
                            <a href="https://www.google.com/maps/place/1495+S+Ridge+Rd,+Castle+Rock,+CO+80104/@39.3403316,-104.817596,17z/data=!3m1!4b1!4m5!3m4!1s0x876cbd6c1b02dcd1:0xfed373be3e2fc1c9!8m2!3d39.3403316!4d-104.8154073" target="_blank">
                                1495 South Ridge Road Castle Rock CO 80104
                            </a><br>
                            Temple: 303-660-9555&nbsp;
                            Manager: 303-898-5514<br>
                            <a href="mailto:manager@svtempleco.org" target="_blank">manager@svtempleco.org</a>&nbsp;
                            <a href="\\www.facebook.com/SVTC.COLORADO/" target="_blank">Facebook</a>&nbsp;
                            <a href="\\www.paypal.me/svtempleco" target="_blank">Donations</a>&nbsp;
                            Weekdays:&nbsp;09:00AM to 12:00PM and 06:00PM to 08:30PM<br>
                            Weekends/Holidays:&nbsp;09:00AM to 08:30PM<br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <br>
                <iframe src="https://www.google.com/calendar/embed?title=Events%20Calendar&amp;showTabs=0&amp;mode=AGENDA&amp;wkst=2&amp;hl=en&amp;bgcolor=%23ffcc33&amp;src=svtempleofco%40gmail.com&amp;color=%23875509&amp;ctz=America%2FDenver"
                                        style="border:solid 1px #777 " height=360px width="100%" frameborder="0" scrolling="no"></iframe>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-lg-3">
                 <div class="box1">
                    Temple Needs
                 </div>
            </div>

            <div class="col-lg-3">
                <div class="box1">
                    Donors
                </div>
            </div>

            <div class="col-lg-3">
                 <div class="box1">
                    Panel Content
                 </div>
            </div>

            <div class="col-lg-3">
                <div class="box1">
                    Panel Content
                </div>
            </div>
        </div>
    </div>

    <!-- #include file ="footer.aspx" -->
</body>
</html>