<?php
/**
 * Template Name: Home
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html>
<head>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/base.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/main.css">
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">
<link rel="apple-touch-icon-precomposed" 					href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-iphone.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" 		href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-ipad.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" 	href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-iphone-retina.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" 	href="<?php echo get_stylesheet_directory_uri() ?>/images/touch-icon-ipad-retina.png" />
<?php get_template_part( 'content', 'css' ); ?>

<style>
  .header { opacity: 0; }
</style>
<?php

  // META DATA
  get_template_part( 'content', 'meta' );

  // Google Analytics
  get_template_part( 'content', 'analytics' );
?>
</head>
<body>
<div class="container">
  <div class="container-inner">
    <div class="background"></div>

    <?php get_template_part( 'content', 'header' ); ?>





    <section id="intro" class="sectionWrapper">
      <h1 class="name">Matthew Pateman</h1>
      <h2 class="byline">Designer &amp; Developer</h2>
      <h2 class="byline2">Digital Products &amp; User Experiences</h2>
    </section>
    <section id="skills" class="sectionWrapper">
      <h1 class="skills-title">Skills</h1>
      <p class="skills-byline">These are some of the things I am great at:</p>
      <a class="skills-button button" href="http://www.matthewpateman.com/cv.pdf">Download CV</a>
      <ul id="skillsList">
        <li class="skillsItem skill-1">HTML &amp; CSS<span class="bar scale100"></span></li>
        <li class="skillsItem skill-2">JavaScript<span class="bar scale80"></span></li>
        <li class="skillsItem skill-3">PHP<span class="bar scale50"></span></li>
        <li class="skillsItem skill-4">Ruby on Rails<span class="bar scale50"></span></li>
        <li class="skillsItem skill-5">Sketching<span class="bar scale80"></span></li>
        <li class="skillsItem skill-6">Wireframing<span class="bar scale80"></span></li>
        <li class="skillsItem skill-7">Branding<span class="bar scale80"></span></li>
        <li class="skillsItem skill-8">Illustrator, InDesign, Photoshop<span class="bar scale100"></span></li>
        <li class="skillsItem skill-9">Omnigraffle<span class="bar scale90"></span></li>
        <li class="skillsItem skill-10">Sketch<span class="bar scale60"></span></li>
      </ul>
    </section>
    <section id="projects" class="sectionWrapper">
      <h1 class="projects-title">Portfolio</h1>
      <p class="projects-byline">Here's are some of my projects:</p>
      <a class="projects-button button" href="http://www.matthewpateman.com/portfolio">View portfolio</a>
      <ul id="projectsList">
        <li class="dom-projects-item dei-1"></li>
        <li class="dom-projects-item dei-3"></li>
        <li class="dom-projects-item dei-9"></li>
        <li class="dom-projects-item dei-11"></li>
      </ul>
    </section>
    <section id="experience" class="sectionWrapper">
      <h1 class="experience-title">Experience</h1>
      <p  class="experience-byline">This is what I have been getting up to:</p>
      <a  class="experience-button button" href="http://www.matthewpateman.com/cv.pdf">Download CV</a>
      <div class="experience-line"></div>
      <ul id="experienceList">
        <li class="experienceItem experience-1">
          <span class="time">July 2010<br/>-<br/>Present</span>
          <span class="dot"></span>
          <span class="work">American Express</span>
        </li>
        <li class="experienceItem detail detail-1">
          <span>Senior Designer &amp; Manager for Marketing Communications</span>
          <ul>
            <li>Led muti-market marketing and communications strategies, plans and platforms for international activities in marketings incl. Canada, Singapore, Hong Kong, Nordics, UK and Australia / New Zealand</li>
            <li>Managed internal brand strategy and evolution for key initiatives incl. developments and cultural adjustments and adaptation based on consumer insights</li>
            <li>Led a communications and design team based in London and Singapore</li>
            <li>Collaborated with international agencies and internal partners to develop campaign creatives</li>
            <li>Ensured unified aesthetic and consistent content quality across all markets and channels</li>
            <li>Managed internal stakeholders and project partners involved in programme launches</li>
          </ul>
        </li>
        <li class="experienceItem experience-2">
          <span class="time">June 2009<br/>-<br/>March 2011</span>
          <span class="dot"></span>
          <span class="work">Design Against Crime</span>
        </li>
        <li class="experienceItem detail detail-2">
          <span>Web Designer / Developer &amp; Design Consultant</span>
            <ul>
              <li>Developed the relaunch of the research centre’s website with a focus on UX, Social integration, SEO, CMS and an enhanced mobile experience</li>
              <li>Led the social strategy using Facebook, Twitter, Foursquare and MailChimp and developed Social Apps for the Facebook platform</li>
              <li>Collaborated in design and user research for multiple brands including French luxury group LVMH</li>
              <li>Led the design and development of an interactive web-app for Camden Council</li>
          </ul>
        </li>
      </ul>
    </section>
    <section id="education" class="sectionWrapper">
      <h1 class="education-title">Education</h1>
      <p  class="education-byline">Here is a brief summary of my education:</p>
      <a  class="education-button button" href="http://www.matthewpateman.com/cv.pdf">Download CV</a>
      <div class="education-line"></div>
      <ul id="educationList">
        <li class="educationItem education-1">
          <span class="time">2009<br/>-<br/>2010</span>
          <span class="dot"></span>
          <span class="course">MSc Interactive Multimedia</span>
        </li>
        <li class="educationItem detail detail-1"><span>University of Westminster</br>MSc completed with distinction</span>
          <ul>
            <li>Final thesis was the user experience of native versus web-app on the iPhone</li>
            <li>Developing a case study prototype app for the British Museum.</li>
            <li>Core focus of this course was user experience, user interface design and social media. Attended ‘Future of Web Design’ in London to grow knowledge of trends in the mobile and web space.</li>
            <li>Designed a conceptual store guide app for Selfridges based on Apple’s iOS design guidelines.</li>
            <li>Developed an understanding of the agile development process.</li>
          </ul>
        </li>
        <li class="educationItem education-2">
          <span class="time">2006<br/>-<br/>2009</span>
          <span class="dot"></span>
          <span class="course">BA (Hons) Product Design</span>
        </li>
        <li class="educationItem detail detail-2"><span>Central Saint Martins College of Art and Design, University of the Arts London<br/>Upper second-class degree</span>
          <ul>
            <li>Final project was on preventing product fraud and theft by adding a digital compontent to physical products through integration of RFID and NFC technology (today known as “internet of things”).</li>
            <li>Developed a working prototype which offered customisation opportunities for brands.</li>
            <li>Mastered the design process of a product or service from the initial concept through to the final product including preparation for industrial mass production.</li>
            <li>Worked with multiple brands including Coca Cola South Africa and a conceptual branding project for Audi.</li>
            <li>Developed an understanding of the design development process and methodology.</li>
          </ul>
        </li>
        <li class="educationItem education-3">
          <span class="time"><br/>2013<br/></span>
          <span class="dot"></span>
          <span class="course">User Experience Design</span>
        </li>
        <li class="educationItem detail detail-3">
          <span>General Assembly London</span>
          <ul>
            <li>Successfully completed a 3-month UX course in General Assembly with a seld-initiated UX project.</li>
          </ul>
        </li>
        <li class="educationItem education-4">
          <span class="time"><br/>2013<br/></span>
          <span class="dot"></span>
          <span class="course">Product Management</span>
        </li>
        <li class="educationItem detail detail-4">
           <span>General Assembly London</span>
          <ul>
            <li>Developed a business model and working prototype of an online product based on consumer research initiated for this project.</li>
          </ul>
        </li>
        <li class="educationItem education-5">
          <span class="time"><br/>2012<br/></span>
          <span class="dot"></span>
          <span class="course">Back-end Web Development</span>
        </li>
        <li class="educationItem detail detail-5">
          <span>General Assembly London</span>
          <ul>
            <li>Developed and built a working prototype of a Twitter-like application in Ruby On Rails using GIT and Heroku.</li>
          </ul>
        </li>
      </ul>
    </section>
    <section id="connect">
      <h1 class="connect-byline">Connect with me</h1>
      <a class="btn button" href="http://linkedin.com/in/matthewpateman" target="_blank">LinkedIn</a>
      <a class="btn button" href="http://twitter.com/matthewpateman" target="_blank">Twitter</a>
      <a class="btn button" href="http://github.com/matthewpateman" target="_blank">Github</a>
      <a class="btn button" href="http://plus.google.com/+matthewpateman" target="_blank">Google+</a>
    </section>
  </div>
  
</div>
<h3 class="error">Whoops! Right now this demo doesn't handle resizing or browsers less than 1000px wide. Reload this page or get on a laptop!</h3>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/picasso.js"></script>
</body>
</html>