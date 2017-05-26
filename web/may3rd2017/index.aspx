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
                    <div class="panel-heading-custom">Today's Panchangam</div>
                    <div class="panel-body">
                        <a style="padding-left: 7px; text-decoration: underline;" target="_blank" href="http://www.drikpanchang.com/panchang/day-panchang.html">Day Panchang</a>
                        <br>
                        <iframe src="http://www.mypanchang.com/mobilewidget.php?cityname=Denver-CO" style="padding: 0px; border: 0px;">
                        </iframe>
                    </div>
                </div>

                <div class="panel panel-custom">
                    <div class="panel-heading-custom">Daily Schedule</div>
                    <div class="panel-body">
                        <div class="customTextStyle1">
                            <table>
                                <tr>
                                    <td colspan="2" align="center" valign="top">
                                        <b style="text-decoration: underline;">Temple Timings</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        <b>Weekdays:&nbsp;</b>
                                    </td>
                                    <td align="left" valign="top">
                                        09:00AM to 12:00PM<br>
                                        06:00PM to 08:30PM
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        <b>Weekends/Holidays:&nbsp;</b>
                                    </td>
                                    <td align="left" valign="top">
                                        09:00AM to 08:30PM
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center" valign="top">
                                        <b style="text-decoration: underline;">Archana Timings</b>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        09:00AM
                                    </td>
                                    <td align="left" valign="top">
                                        Suprabhatha Seva
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        10:00AM
                                    </td>
                                    <td align="left" valign="top">
                                        Nitya Archana
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        10:30AM
                                    </td>
                                    <td align="left" valign="top">
                                        First Archana
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        08:00PM
                                    </td>
                                    <td align="left" valign="top">
                                        Last Archana
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        08:20PM
                                    </td>
                                    <td align="left" valign="top">
                                        Ekantha Seva
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div class="customTextStyle3">
                            Archana - Every 30 Minutes after first archana
                        </div>
                        <div class="customTextStyle3">
                            Archana schedule may change on special event days.
                        </div>
                        <div class="customTextStyle3">
                            Temple will not use devotee prepared yogurt or grocery store yogurt for any abhishekam at the temple. The temple priests will prepare yogurt as needed for the abhishekam. Devotees can bring organic fat free milk instead.
                        </div>

                        <!--
                        <div class="customTextStyle1">
                            <a href="https://www.google.com/maps/place/1495+S+Ridge+Rd,+Castle+Rock,+CO+80104/@39.3403316,-104.817596,17z/data=!3m1!4b1!4m5!3m4!1s0x876cbd6c1b02dcd1:0xfed373be3e2fc1c9!8m2!3d39.3403316!4d-104.8154073" target="_blank">
                                1495 South Ridge Road Castle Rock CO 80104
                            </a><br>
                            Temple: 303-660-9555&nbsp;
                            Manager: 303-898-5514<br>
                            <a href="mailto:manager@svtempleco.org" target="_blank">manager@svtempleco.org</a>&nbsp;
                            <a href="\\www.facebook.com/SVTC.COLORADO/" target="_blank">Facebook</a>&nbsp;
                            <a href="\\www.paypal.me/svtempleco" target="_blank">Donations</a>&nbsp;
                            Weekdays:&nbsp;09:00AM to 12:00PM, 06:00PM to 08:30PM<br>
                            Weekends/Holidays:&nbsp;09:00AM to 08:30PM
                        </div>
                        -->
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-custom">
                    <div class="panel-body" style="padding: 1px;">
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/slide1.jpg">
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/slide2.jpg">
                        <!--
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/slide3.jpg">
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/slide4.jpg">
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/slide5.jpg">
                        -->
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/defaultSlide1.jpg">
                        <img class="img-responsive mySlides w3-animate-fading" src="slides/defaultSlide2.jpg">
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
                                setTimeout(carousel, 15000);
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="panel panel-custom">
                    <div class="panel-heading-custom">Temple Calendar</div>
                    <div class="panel-body" style="padding: 1px;">
                        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=520&amp;wkst=1&amp;bgcolor=%23ffcc33&amp;src=svtempleofco%40gmail.com&amp;color=%23875509&amp;ctz=America%2FDenver" style="border-width:0" width="100%" height="520" frameborder="0" scrolling="no"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- #include file ="footer.aspx" -->
</body>
</html>