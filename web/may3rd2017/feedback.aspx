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
            <div class="col-lg-12">
                <div class="panel panel-custom">
                    <div class="panel-heading-custom">Feedback</div>
                    <div class="panel-body">
                        <form class="form-horizontal" style="width: 50%" action="">

                            <h4>Please provide your valuable feedback to SV Temple Colorado</h4>

                            <br>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Name</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter Name" name="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="email">Email</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Feedback</label>
                              <div class="col-sm-10">
                                <textarea class="form-control" id="pwd" placeholder="Enter Feedback" name="feedback">
                                </textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #include file ="footer.aspx" -->
</body>
</html>