<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet"
    href="@import url('https://fonts.googleapis.com/css2?family=Trirong&effect=neon|outline|emboss|shadow-multiple:wght@200;300;400;500;600;700;800;900&display=swap');">
    <link rel="stylesheet" href="styleContact.css">
    <link rel='icon' href="Images/logob.png" type="image/icon type">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Trirong&effect=neon:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Trirong',serif;
    
    
}
    </style>

    <title>Sparks Bank</title>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Images/logob.png" alt="">&nbsp;Sparks Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          &nbsp;&nbsp;&nbsp;<li class="nav-item">
            <a class="nav-link " aria-current="page" href="about.php">About </a>
        </li>
        &nbsp;&nbsp;&nbsp; <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="contactus.php">Contact us</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
    <section>
        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="Images/location.png" alt=""></span>
                            <span>Nakshatra Phase2 Purnagar<br>
                                Chinchwad ,Pune<br>
                                411019.
                            </span>
                        </li>
                        <li>
                            <span><img src="Images/mail.png" alt=""></span>
                            <span>bhamareomkar5@gamil.com</span>
                        </li>
                        <li>
                            <span><img src="Images/call.png" alt=""></span>
                            <span>+91 9359576160</span>
                        </li>
                        <li>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.0126645517303!2d73.8053344142063!3d18.663427669662134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b827f6cdb7f5%3A0x93470542528f3413!2sNakshatra%20Phase%20II!5e0!3m2!1sen!2sin!4v1625547024436!5m2!1sen!2sin"
                                width="180" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </li>

                    </ul>
                </div>
            </div>
            <form action="javascript:sendMail()" method="POST">
                <div class="contactform">
                    <h2>Get In Touch</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input type="text" id="Name" style="font-size: medium;" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="Last" style="font-size: medium;" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="mail" style="font-size: medium;" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" id="number" style="font-size: medium;" required>
                            <span>Mobile Number </span>
                        </div>
                        <div class="inputBox w100">
                            <textarea id="Message" style="font-size: medium;" required></textarea>
                            <span>Write your Message here...</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" onclick="sendMail()" style="font-size: medium;" value="Send">

                        </div>

                    </div>

                </div>
            </form>
            
     
        </div>

    </section>
    <footer>© 2021 Company, Omkar Bhamare</footer>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js">
    </script>

    <Script>
        function sendMail() {
            var Firstname = $('#Name').val();
            var Lastname = $('#Last').val();
            var Mail = $('#mail').val();
            var Message = $('#Message').val();

            var Body = 'Name: ' + Firstname + '<br>Last: ' + Lastname + '<br>mail: ' + Mail + '<br>Message ' + Message;

            Email.send({
                Host: "smtp.gmail.com",
                Username: "omkar.bhamare20@pccoepune.org",
                Password: "120C10005",
                To: 'bhamareomkar5@gmail.com',
                From: "bhamareomkar5@gmail.com",
                Subject: "New message on contact from " + name,
                Body: Body
            }).then(
                message => {
                    if (message == 'OK') {
                        alert("Your Email has been send");


                    }
                    else {
                        console.error(message);
                        alert('There is an error while sending the message.');
                    }
                }
            );
        }
    </Script>
</body>

</html>