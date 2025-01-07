<style>
*
{
margin:0;
padding:0;
box-sizing:border-box;
}
body
{
font-family:italic;
}
a
{
text-decoration:none;
}
li{
list-style:none;
}
.navbar
{
display:flex;
align-items:center;
justify-content:space-between;
padding:20px;
background-color:#BC8F8F;
color:#fff;
}
.navlinks a
{
color:#fff;
}

.menu
{
display:flex;
gap:1em;
font-size:21px;
}
.menu li:hover
{
background-color:#785050;
border-radius:5px;
transition:0.3s ease;
}
.menu li
{
padding:5px 14px;
}
.service
{
position:relative;
}
.dropdown
{
background-color:#CD5C5C;
padding:1em 0;
position:absolute;
display:none;
border-radius:8px;
top:35px;
}
.dropdown li+li
{
margin-top:10px;
}
.dropdown li
{
padding:0.5em 1em;
width:8em;
text-align:center;
}
.dropdown li:hover
{
background-color:#DB7093;
}
.service:hover .dropdown
{
display:block;
}
input[type=checkbox]
{
display:none;
}
.hamburger
{
display:none;
font-size:24px;
user-select:none;
}
img
{
max-width:100%;
height:auto;
}
.slides
{
display:none;
}
.f
{
position:fixed;
left:0;
bottom:0;
width:100%;
background-color:black;
color:white;
text-align:center;
}
.logo
{
font-size:23px;
color:maroon;
font-style:italic;
font-weight:bold;
}
@media (max-width:768px)
{
.menu
{
display:none;
position:absolute;
background-color:#785050;
right:0;
left:0;
text-align:center;
padding:16px 0;
}
.menu li:hover
{
display:inline-block;
background-color:#785050;
transition:0.3s ease;
}
.menu li+li
{
margin-top:12px;
}
input[type=checkbox]:checked ~.menu
{
display:block;
}
.hamburger
{
display:block;
}
.dropdown
{
left:3%;
top:30px;
transform:translateX(35%);
}
.dropdown li:hover
{
background-color:#785050;
}
}
</style>


<body>
<nav class="navbar">
<div class="logo">Online<br/>Shopping</div>
<ul class="navlinks">
<input type="checkbox" id="checkbox_toggle"/>
<label for="checkbox_toggle" class="hamburger">&#9776;</label>

<div class="menu">
<li><a href="AdminHomePage.html">Home</a></li>
<li><a href="Product.html">Add Product</a></li>
<li><a href="ProductTable.html">View</a></li>
<li><a href="Booked.html">Booked</a></li>
<li><a href="Adminlogin.html">Logout</a></li>

</div>
</ul>
</nav>



<section class="page-header">
      <div class="company-text">
        <h1>Welcome To Apps Avenue</h1>
      </div>
    </section>
    <section class="page-about" id="about-us">
      <div class="about-header"><h1>About Us</h1></div>
      <div class="about">
        <div class="about-us">
          <div class="about-description">
            <div class="about-des"><h3>Mission</h3></div>
            <p>
              Welcome to an exceptional service that is designed to exceed your
              expectations. Our team is committed to providing you with
              top-quality services that pave the way for your growth. We are
              dedicated to helping aspiring professionals realize their dreams
              by providing practical experience in web development and
              full-stack expertise. Our mission is to empower you to surpass
              your business objectives with innovative, reliable, and
              cutting-edge solutions that redefine industry standards. Join us
              on this journey, elevate your business, and let's redefine
              possibilities together.
            </p>
          </div>
        </div>
        <div class="about-us">
          <div class="about-description">
            <div class="about-des"><h3>Vision</h3></div>
            <p>
              Our goal is not just to offer innovative services but also to
              establish new benchmarks for the online world. We want people to
              experience new technologies and possibilities like never before.
              We also believe that investing in talented individuals and
              providing them with practical experience through our internship
              programs can not only nurture new talent but also contribute to
              shaping the future of the online world. Join us on this exciting
              journey as we bring our vision to life and build a digital
              universe that is limitless in its potential and possibilities.
            </p>
          </div>
        </div>
        <div class="about-us">
          <div class="about-description">
            <div class="about-des"><h3>Promise</h3></div>
            <p>
              Our team is made up of skilled professionals who are dedicated to
              providing exceptional services that will take your business to new
              heights. We have an innovative approach and a commitment to
              excellence that ensures we exceed your expectations. If you are an
              aspiring professional looking for practical experience in the
              dynamic field of web development, we invite you to explore our
              internship opportunities. Let's redefine possibilities and start
              writing your success story today.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!--Service starts here-->

    <section class="page-service" id="service">
      <div class="service-header"><h2>Services</h2></div>
      <div class="service-intro">
        <p>
          Our company offers a wide range of services designed to meet the
          diverse needs of our clients. From consulting and strategic planning
          to implementation and support, we provide comprehensive solutions that
          are tailored to each client's unique requirements. Our team comprises
          experienced professionals who are passionate about delivering
          exceptional results and exceeding expectations.
        </p>
      </div>

      <div class="slider-container">
        <div class="slider-wrapper">
          <div class="slide">
            <div class="slide-content">
              <h2>Mobile Application Development</h2>
              <p>
                Build powerful, process-based applications to solve everyday
                business problems. Design custom workflows, streamline
                communication, and automate routine tasks. Build Traditional app
                development quickly. Modern cross platform mobile apps rely on
                API's, cloud back-ends, and cloud processing.
              </p>
            </div>
          </div>

          <div class="slide">
            <div class="slide-content">
              <h2>Web Applications</h2>
              <p>
                Web applications are software programs accessed through web
                browsers. They provide a versatile and dynamic way to perform
                tasks, access information, and interact with content over the
                internet. They're crucial for modern digital experiences,
                including e-commerce and social networking.
              </p>
            </div>
          </div>

          <div class="slide">
            <div class="slide-content">
              <h2>Web Design</h2>
              <p>
                Web design refers to the process of creating and arranging the
                visual elements of a website. It involves the planning,
                conceptualization, and execution of the layout, color scheme,
                typography, and overall aesthetics of a website. The goal of web
                design is to enhance the user experience by making a website
                visually appealing, easy to navigate, and effective in conveying
                information or facilitating interactions.
              </p>
            </div>
          </div>

          <div class="slide">
            <div class="slide-content">
              <h2>Web Development</h2>
              <p>
                Web development is the process of building and maintaining
                websites or web applications. It encompasses a range of tasks,
                including designing the user interface, developing the
                functionality, and ensuring the overall performance and security
                of a website. Web development can involve both front-end
                development, which focuses on the user interface and user
                experience, and back-end development, which deals with
                server-side logic and databases.
              </p>
            </div>
          </div>

          <div class="slide">
            <div class="slide-content">
              <h2>software Development</h2>
              <p>
                Software development is the process of creating, designing,
                programming, testing, and maintaining software applications or
                systems. It involves a systematic approach to building software
                to meet specific needs, solve problems, or provide a desired
                functionality. Software development encompasses a broad range of
                activities, from initial concept and planning to implementation,
                testing, and ongoing maintenance.
              </p>
            </div>
          </div>

          <div class="slide">
            <div class="slide-content">
              <h2>UI/UX</h2>
              <p>
                UI/UX, which stands for User Interface (UI) and User Experience
                (UX), are two closely related aspects of designing digital
                products, such as websites, mobile apps, and software
                applications.UI is about the visual and interactive aspects,
                focusing on the aesthetics and presentation of a digital
                product. UX, on the other hand, is about the overall user
                experience, emphasizing the user's journey, satisfaction, and
                ease of use.
              </p>
            </div>
          </div>
        </div>

        <div class="prev">&#10094;</div>
        <div class="next">&#10095;</div>
      </div>
    </section>

    <!-- Career Starts Here-->

    <section class="career-container" id="career">
      <div class="career-intro">
        <div class="intro-header"><h2>Our Company Portfolio</h2></div>
        <div class="intro-description">
          <p>
            Are you ready to take your career to the next level? Look no further
            than joining our company! Our company offers exciting and rewarding
            opportunities to work with cutting-edge technology and collaborate
            with talented and diverse individuals. We specialize in creating
            custom software to meet the unique needs of our clients. Our company
            is comprised of skilled professionals who are experts in developing
            user-friendly and responsive applications for various domains. We
            are committed to providing excellent services and high-quality
            products that exceed the expectations of our clients. Our innovative
            products are designed to help our clients achieve their goals and
            stay ahead of the competition. Don't miss out on this chance to work
            for a company that values its employees and is dedicated to making a
            real difference in the industry.
          </p>
        </div>
      </div>
      <!--Internship Starts here-->
      <div class="internship-conatiner">
        <div class="internship-header">
          <h2>
            An internship that provides hands-on experience in the industry
          </h2>
        </div>
        <div class="internship-intro">
          <p>
            We offer specialized internship training programs to students of all
            backgrounds who are seeking practical experience and want to enhance
            their professional skills. Our program is designed to cater to the
            needs of students from all levels of experience and backgrounds. We
            provide hands-on training in various domains, including
            <span class="tech-menu"
              >Java Full-Stack Development, Python Full-Stack Development, Web
              Development, Mobile Application Development, and more</span
            >. Our practical curriculum covers popular programming languages
            such as Python, Java, and ASP.NET, giving students a comprehensive
            understanding of the industry. Upon completion of the training
            program, students will receive an Internship Certificate.
          </p>
        </div>
        <div class="internship-benifits">
          <div class="benifits-header">
            <h3>What internship teach you</h3>
          </div>
          <div class="benifits-box">
            <div class="benifits">
              <p>
                <b>Hands-On Experience:</b> Hands-on experience is more
                effective than traditional classroom instruction as it allows
                you to gain valuable insights that can be applied in real-world
                situations. Employers highly value hands-on experience as it
                gives you a competitive edge in the job market.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Skill Enhancement:</b>
                Internships offer hands-on experience and learning opportunities
                with experienced professionals in the field. It's a chance to
                develop skills, learn new technical abilities and software
                programs, and gain a competitive edge in the job market.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Industry Insight:</b> Industry insight is key to success. It
                involves gathering data from multiple sources to analyze trends,
                challenges, and opportunities. Without it, you risk losing your
                competitive edge and missing out on opportunities. Employers
                value industry insight as it gives you an advantage in the job
                market.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Professional Development:</b>During the internship, You gain
                essential skills like professional communication, time
                management, and critical thinking. Networking with industry
                professionals gave me valuable insights. Networking with
                industry professionals provided me with valuable insights.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Build Professional Network:</b> Internships are not just
                about gaining work experience; they also offer valuable
                networking opportunities by attending events and connecting with
                professionals, you can build a strong network that can provide
                mentorship and job prospects.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Career Growth:</b>Internships offer hands-on experience, new
                skills, and valuable connections with professionals. They allow
                individuals to showcase their abilities and gain a clearer
                understanding of their career goals.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Academic Credit:</b>
                We provide practical internships to students and graduates which
                offers academic credit. Which can help you meet graduation
                requirements.
              </p>
            </div>
            <div class="benifits">
              <p>
                <b>Internship Certificate:</b>
                We offer Internship Certificate which are a reflection on our
                commitment to providing you with the best possible industrail
                experience and oportunities.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Testimonial-->
    <!--<section class="testimonial">
      <div class="testimonial-header"><h3>How Do We Rate?</h3></div>
      <div class="testimonial-container">
        <div class="testimonial-box">
          <div class="testimonial-img">
            <img src="styles/img/profile-img.png" alt="." />
          </div>
          <div class="message">
            <p>
              Successfully completed mine internship on Java full stack
              development course. Durning internship, I have learnt lot of
              practical skills for jsp and Database . Winsoft solution is the
              best institute for learning and gave lot of supports, I'm very
              much happy with my internship...✨🤞🏻🔜🔝 …
            </p>
          </div>
        </div>
        <div class="testimonial-box">
          <div class="testimonial-img">
            <img src="styles/img/profile-img.png" alt="." />
          </div>
          <div class="message">
            <p>
              Successfully completed mine internship on Java full stack
              development course. Durning internship, I have learnt lot of
              practical skills for jsp and Database . Winsoft solution is the
              best institute for learning and gave lot of supports, I'm very
              much happy with my internship...✨🤞🏻🔜🔝 …
            </p>
          </div>
        </div>
        <div class="testimonial-box">
          <div class="testimonial-img">
            <img src="styles/img/profile-img.png" alt="." />
          </div>
          <div class="message">
            <p>
              Successfully completed mine internship on Java full stack
              development course. Durning internship, I have learnt lot of
              practical skills for jsp and Database . Winsoft solution is the
              best institute for learning and gave lot of supports, I'm very
              much happy with my internship...✨🤞🏻🔜🔝 …
            </p>
          </div>
        </div>
        <div class="testimonial-box">
          <div class="testimonial-img">
            <img src="styles/img/profile-img.png" alt="." />
          </div>
          <div class="message">
            <p>
              Successfully completed mine internship on Java full stack
              development course. Durning internship, I have learnt lot of
              practical skills for jsp and Database . Winsoft solution is the
              best institute for learning and gave lot of supports, I'm very
              much happy with my internship...✨🤞🏻🔜🔝 …
            </p>
          </div>
        </div>
        <div class="testimonial-box">
          <div class="testimonial-img">
            <img src="styles/img/profile-img.png" alt="." />
          </div>
          <div class="message">
            <p>
              Successfully completed mine internship on Java full stack
              development course. Durning internship, I have learnt lot of
              practical skills for jsp and Database . Winsoft solution is the
              best institute for learning and gave lot of supports, I'm very
              much happy with my internship...✨🤞🏻🔜🔝 …
            </p>
          </div>
        </div>
        <div class="testimonial-box">
          <div class="testimonial-img">
            <img src="styles/img/profile-img.png" alt="." />
          </div>
          <div class="message">
            <p>
              Successfully completed mine internship on Java full stack
              development course. Durning internship, I have learnt lot of
              practical skills for jsp and Database . Winsoft solution is the
              best institute for learning and gave lot of supports, I'm very
              much happy with my internship...✨🤞🏻🔜🔝 …
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!--Contact is here-->

    <section class="page-contact" id="contact">
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form id="myForm" onsubmit="return validateForm()">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>

          <div class="form-group">
            <label for="contact">Contact No.:</label>
            <input
              type="tel"
              id="telephone"
              name="telephone"
              maxlength="10"
              required
            />
          </div>

          <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
          </div>

          <button type="submit">Submit</button>
        </form>
      </div>
    </section>

    <!--Footer starts here-->
    <footer>
      <div class="footer-col-2">
        <div class="links">
          <a href="#">Home</a>
          <a href="#about-us">About Us</a>
          <a href="#service">Services</a>
          <a href="#career">Career</a>
          <a href="#contact">Contact</a>
        </div>
        <div class="footer-conatct">
          <span id="footer-conatct">Contact Info: 8105043820</span>
          <br />
          <span id="footer-email">E-mail: appsavenuea2@gmail.com</span>
        </div>
        <div class="footer-address">
          <p>
            Mailing address:
            <a href="#"
              >PLOT NO. 107, MITRA VISHAL PARK OPP CHETAN COLLEGE, VIDYANAGAR
              HUBLI Dharwad KA 580031 IN</a
            >
          </p>
        </div>
      </div>
    </footer>

    <p class="copy-right">
      &copy; AppsAvenue. All rights reserved | Design & Developed by
      AppsAvenue,Hubli
    </p>
    <script type="text/javascript" src="scripts/index.js"></script>
  </body>
</html>



</body>
</html>