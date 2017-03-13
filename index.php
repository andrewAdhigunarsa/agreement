
<?php

$errors = '';
//<-----Put Your email address here.
if(!empty($_POST['weddingDate']) || !empty($_POST['ceremonyLocation']) || !empty($_POST['groomEmail']) || !empty($_POST['groomName']) )
{
 $weddingDate = $_POST['weddingDate'];
  $ceremonyLocation = $_POST['ceremonyLocation'];
  $groomEmail = $_POST['groomEmail'];
  $groomName = $_POST['groomName'];
}else{
   $errors .= "\n Error: all fields are required";
};



  if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $groomEmail))
    {
      $errors .= "\n Error: Invalid email address";
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="This is Agreement page for humblebloom Client">
      <meta name="author" content="Humblebloom">
      <link rel="icon" href="http://sstatic.net/so/favicon.ico">

      <title>Jumbotron Template for Bootstrap</title>

      <link rel="stylesheet" href="agreement.css">

      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.css">

      <!-- Optional theme -->
      <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">

      <!-- Latest compiled and minified JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <script type="text/javascript" src="main.js">
      </script>
      <script type="text/javascript" src="gen_validatorv4.js">
      </script>

      <script src="javascript_form/gen_validatorv4.js" type="text/javascript"></script>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body  onload="disableSubmit()">

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Humblebloom</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <form class="navbar-form navbar-right">
              <div class="form-group">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-default">Sign in</button>
            </form>
          </div><!--/.navbar-collapse -->
        </div>
      </nav>

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="margin-top:25px;">
        <div class="container">
          <h1>Hello!</h1>
          <p>If you are on this page, that means you have decided to use our service. Thank you so much for that!
            This is just a little bit of formality. Please fill the form below for our record.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
          </div>
        </div>

        <div class="container">

          <h3>Agreement Form</h3>

          <br>

          <form class="" id="myform" method="post" name="agreement_form" action="formHandler.php">
            <div class="row">


              <div class="col-md-6">
                <div class="form-group">
                  <label for="weddingDate" class="col-2 col-form-label">Wedding date</label>
                  <input class="form-control" type="date" value="" id="weddingDate" name="weddingDate">
                </div>
                <div class="form-group ">
                  <label for="ceremonyLocation">Ceremony location</label>
                  <input type="text" class="form-control" id="ceremonyLocation"  name="ceremonyLocation">
                </div>
                <div class="form-group ">
                  <label for="receptionLocation">Reception location</label>
                  <input type="text" class="form-control" id="receptionLocation" placeholder="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group col-xs-6">
                  <label for="startTime" class="col-2 col-form-label"> Photography start time</label>
                  <input class="form-control" type="time" value="12:00:00" id="startTime">
                </div>
                <div class="form-group col-xs-6">
                  <label for="endTime" class="col-2 col-form-label">Photography end time</label>
                  <input class="form-control" type="time" value="23:30:00" id="endTime">
                </div>
                <div class="form-group ">
                  <label for="otherInfo">Other info</label>
                  <input type="text" class="form-control" id="otherInfo" placeholder="">
                </div>

              </div>
            </div>


            <div class="row">

              <div class="col-md-6">
                <div class="form-group ">
                  <label for="groomName">Groom's name</label>
                  <input type="text" class="form-control" id="groomName" name="groomName" placeholder="">
                </div>
                <div class="form-group">
                  <label for="groomMobile">Mobile number</label>
                  <input type="text" class="form-control" id="groomMobile" placeholder="">
                </div>
                <div class="form-group">
                  <label for="groomEmail">Email</label>
                  <input type="text" class="form-control" id="groomEmail" name="groomEmail" placeholder="">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="brideName">Bride's name</label>
                  <input type="text" class="form-control" id="brideName" placeholder="">
                </div>


                <div class="form-group ">
                  <label for="brideMobie">Mobile number</label>
                  <input type="text" class="form-control" id="brideMobie" placeholder="">
                </div>


                <div class="form-group">
                  <label for="brideEmail">Email</label>
                  <input type="text" class="form-control" id="brideEmail" placeholder="">
                </div>
              </div>

            </div>
            <br>

            <div class="row col-xs-12">

              <h4>Details</h4>

              <div class="form-group col-xs-6">
                <label for="packages">Wedding package</label>
                <select class="form-control" id="packages">
                  <option>Peony package (Fullday coverage)</option>
                  <option>Rose package (Halfday coverage)</option>
                </select>
              </div>
              <div class="form-group col-xs-6">
                <label for="esession">Engagement session</label>
                <select class="form-control" id="esession">
                  <option>none</option>
                  <option>1-2 hours</option>
                  <option>halfday</option>
                  <option>2x halfdays</option>
                  <option>Themed</option>
                </select>
              </div>
              <div class="form-group col-xs-6">
                <label for="usbBox">
                  <input type="checkbox" id="usbBox"> Designer USB Box
                </label>
                <br>
                <label for="coffeeTableBook">
                  <input type="checkbox" id="coffeeTableBook"> 60 pages coffee table book
                </label>
              </div>
              <div class="form-group col-xs-6">
                <label for="groomName">Total Agreed to</label>
                <input type="text" class="form-control" id="groomName" placeholder="" value="$">
              </div>

            </div>

            <br>

            <div class="">
              <textarea class="border-all-1px" name="name" rows="12" style="width:100%;">
                ENTIRE AGREEMENT: This agreement contains the entire understanding between Humblebloom Photography and the CLIENT. It supersedes all prior and simultaneous agreements between the parties. The only way to add or change this agreement is to do so in writing, signed by all the parties. If the parties want to waive one provision of this agreement, that does not mean that any other provision is also waived. The party against whom a waiver is sought to be effective must have signed a waiver in writing.

                RESERVATION: A signed contract and reservation fee are required to reserve the specific coverage

                PRE-EVENT CONSULTATION: The parties agrees to a pre-event consultation before the event date in order to finalize the actual shooting times, locations, and CLIENT’S request list (in writing) for specific photographs.

                COOPERATION: The parties agree to cheerful cooperation and communication for the best possible result within the definition of this agreement. Humblebloom Photography recommends that CLIENT designate an “event guide” to point out important individuals for informal or candid photographs to the photographer during the wedding that they wish to have photographed. The photographer will not be held accountable for not photographing desired people if there is no one to assist in identifying people or gathering people for photographs. Humblebloom photography is not responsible if key individuals fail to appear or cooperate during photography sessions or for missed images due to details not revealed to Humblebloom photography.

                SHOOTING TIME/ADDITIONS: The photography schedule and selected methodology are designed to accomplish the goals and wishes of the CLIENT in a manner enjoyed by all parties. CLIENT and Humblebloom photography agree that cheerful cooperation and punctuality are therefore essential to that purpose. Shooting commence at the scheduled start time.

                EVENT FOOD SERVICE: Clients agree to provide a meal for the Photographer if the length of attendance exceeds five hours.

                PERMISSION TO PHOTOGRAPH: It is the sole responsibility of CLIENT to secure permission of the venue of the wedding for Humblebloom photography to photograph the ceremony/event. CLIENT shall insure the placement of the bridal party, the officiant(s) and the altar decorations so as to not obscure the view of the bride and groom. Humblebloom photography will abide by the rules of the venue in regards to camera placement at the ceremony. Many cities, countries, state agencies and private venues/businesses are charging a photography permit fee. CLIENT is responsible for the payment of such fee. In the event clients fail or refuse to pay for any such permit fee, client is responsible for any and all related costs or fines if applicable.

                HOUSE RULES: The photographer is limited by the guidelines of the ceremony official or reception site management. CLIENT agrees to accept the technical results of their imposition on the photographer. Negotiation with the officials for moderation of guidelines is CLIENT’s responsibility; Humblebloom photography will offer technical recommendations only.

                COPYRIGHTS: Until final payment for the service rendered is made, the photographs produced by Humblebloom photography are protected by Federal Copyright Law (all rights reserved) and may not be reproduced in any manner without Humblebloom photography’s explicitly written permission. Upon final payment by the CLIENT, limited copyright ownership of the resulting images will be transferred to the CLIENT under the following conditions:
                The image files are the property of CLIENT for personal use and for the purpose of the reproduction and giving of photographs to friend and relative. The CLIENT must obtain written permission from and compensate HUMBLEBLOOM photography prior to the CLIENT or its friends and relative publishing or selling the photographs for profit.

                EXHIBITION: Requests for specific images to be used by Humblebloom photography may be requested at future time. CLIENT grants Humblebloom photography permission to display selected images resulting from this assignment as an example of Humblebloom photography’s photography work and for entrance into photographic competitions and release all claims to profits that may arise from use of images.

                MODEL RELEASE: The CLIENT hereby grants to Humblebloom photography and its legal representatives and assigns, the irrevocable and unrestricted right to use and publish photographs of the CLIENT or in which the CLIENT may be included, for editorial, trade, advertising and any other purpose and in any manner and medium; to alter the same without restriction; and to copyright the same. The CLIENT hereby releases Humblebloom photography and its legal representatives and assigns from all claims and liability relating to said photographs.

                FINAL PHOTO PRODUCT: Humblebloom photography makes no guarantee, either expressed or implied, in regard to the quality of the images, because they are subjective and in addition, may be influenced by many factors beyond the control of Humblebloom photography, especially during live or unstaged events such as weddings. It is also understood that the CLIENT is hiring the photographer for his/her technical and artistic expertise and, therefore, the Humblebloom photography reserves the right to edit the images as he/she see fit. Humblebloom photography does not guarantee that everyone involved in the event will be photographed or will be included in final images.

                LIMIT OF LIABILITY: In the unlikely event that the photographer is injured or become to ill to photograph the event, Humblebloom photography will make every effort to secure a replacement photographer. If the situation should occur and a suitable replacement is not found, responsibility and liability is limited to the return of all payments received for the event package. Humblebloom takes the utmost care with respect to exposure, transportation, and processing the photographs. However, in the unlikely event that photographs have been lost, stolen, or destroyed for reasons within or beyond Humblebloom photography’s control, Humbleboom photography liability is limited to the return of all payments received for the event package. CLIENT understands the unpredictable and non-posed nature of photojournalism (assumption of risk) and waives any right to any civil action due to missed or lost photographs (including but not limited to unintentional infliction of emotional distress and negligence). In the event the photographer fails to perform for any other reason, Humblebloom photography’s liability is limited to solely to the return of all payments received from the CLIENT under this agreement.

                SECURITY DEPOSIT: In the event of cancellation, the security deposit paid is non-refundable. It shall be liquidated damages to Humblebloom Photography in the event of a breach of contract by CLIENT.

                PAYMENT SCHEDULE: 30% due at the time of signing of agreement. Balance payable in full at time of wedding.
              </textarea>

              <br>
              <input type="checkbox" style="margin-left: 20px;" name="terms" id="terms" onchange="activateButton(this)">  I have read and understood the terms above. I hereby agree to the terms of this agreement.
              <br><br>
              <input class="btn btn-default" type="submit" name="submit" id="submit">

              <?php echo $result; ?>


            </div>

          </form>


          <hr>

          <footer>
            <p>&copy; 2017 Humblebloom Weddings.</p>
          </footer>
        </div> <!-- /container -->


        <script>

        </script>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="../../dist/js/bootstrap.min.js"></script> -->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
      </body>
      </html>
