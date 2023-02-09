<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="top-nav">

        <div>
            Blood Donation
        </div>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
            <div class='menu-button'></div>
        </label>

        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Skills</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>

        </div>
    </nav>
    <!-- first section -->
    <section class="home-content">
        <div class="texts">
            <h2 class="text">BLOOD DONATION </h2>
            <h3 class="text">cost you NOTHING, <br> <span> but it will save a life</span></h3>
            <p>Lorem ipsum dolor sited and ametvel, nobised, minimali! Quibusdam temporibus, placeate reessed veritatis
                optio aliquam illum debitis at, perspiciatis consequatur iure vel, quae ratione. Praesentium, at.</p>
            <div class="button">
                <a href="#">Explore Me
                    <i class="fas fa-location-arrow"></i></a>
            </div>
    </section>
    <!-- secount section -->
    <section class="body-content">
        <div class="body-half">

            <img class="img" src="OIP.jpg" alt="">
        </div>
        <div class="body-half"><br><br><br><br>
            <h1>The need for blood</h1><br>
            <span class="body-text">

                As blood can be stored for shorter period of duration, there is a constant need of blood donation to
                have an adequate and safe supply of all blood groups in time of need. Each donor contributes
                significantly to meet the challenge of accessibility and affordability to patients by making it
                available whenever and wherever wanted.

                Not only it helps saving lives, but also plays a vital role in improving health of a donor.

                Blood should be accepted only from voluntary, non-remunerated, low risk, safe and healthy donors.
                Replacement of donors should be phased out.</span>

        </div>
    </section>
    <!-- third section -->
    <section class="section-3">
        <div>



        </div>

        <!-- footer section start here -->

    </section class="footer-section">
    <section class="form">
        <div>
            <form action="">
                <div class="form-box">
                    <div class="form-heading">
                        <h1>Blood Donation Form</h1>
                    </div><br>
                    <div class="row">
                        <div class="column">
                            <label for="">name</label><br>
                            <input class="input-border" type="text">
                        </div>
                        <div class="column">
                            <label for="">place</label><br>
                            <input class="input-border" type="text">
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="column">
                            <label for="">blood group</label><br>
                            <input class="input-border" type="text">
                        </div>
                        <div class="column">
                            <label for="">phone</label><br>
                            <input class="input-border" type="text">
                        </div>
                    </div><br>
                    <div>
                        <input type="submit" class="submit-btn" value="SUBMIT">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>Blood<span>Donation</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Blood Donation © 2022</p>

           

        </div>

        <div class="footer-right">

            <p>Contact Us</p>

            <form action="#" method="post">

                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>

            </form>

        </div>

    </footer>


    <script>
    let check = document.querySelector('#check');


    icons.addEventListener("click", () => {
        colorIcons.classList.toggle("open");
    })
    </script>
</body>

</html>