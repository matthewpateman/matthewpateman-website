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
      <p class="projects-byline">Here are some of my projects:</p>
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
          <span class="time">August 2011<br/>-<br/>Present</span>
          <span class="dot"></span>
          <span class="work">American Express</span>
        </li>
        <li class="experienceItem detail detail-1">
          <span>Designer &amp; Manager for Marketing Communications</span>
          <p>After a successful contractor role I was offered a more senior designer and managerial position, overseeing marketing and communications strategies, and managing a designer and a communications specialist based in London and Singapore. The team’s main focus is on digital marketing and communications.</p>
          <ul>
            <li>Managed the internal brand strategy and evolution of key initiatives. This involved continuous development of the brand platform and adjustments to it according to different cultural requirements and consumer insights.</li>
            <li>Collaborated with international agencies and internal partners to develop marketing materials.</li>
            <li>Developed 360 marketing campaigns, including microsites based on both HTML5/CSS3 and Flash with AS3.</li>
            <li>Ensured a unified aesthetic and consistent content quality across all markets and channels.</li>
            <li>Communicated the intentions behind design choices and worked closely with internal and external teams in order to help achieve business needs.</li>
          </ul>
        </li>
        <li class="experienceItem experience-2">
          <span class="time">July 2010<br/>-<br/>August 2011</span>
          <span class="dot"></span>
          <span class="work">American Express</span>
        </li>
        <li class="experienceItem detail detail-2">
          <span>Junior Communications Designer</span>
          <p>I joined American Express as a contractor to support with international product launches in Singapore, Hong Kong and Argentina. My role was to design advertising and marketing materials. The launches saw a revised and updated visual identity based on the existing US brand platform. In this role the focus was to grow digital communications to facilitate further international launches.</p>
        </li>
        <li class="experienceItem experience-3">
          <span class="time">June 2009<br/>-<br/>March 2011</span>
          <span class="dot"></span>
          <span class="work">Design Against Crime</span>
        </li>
        <li class="experienceItem detail detail-3">
          <span>Web Designer / Developer &amp; Design Consultant</span>
            <ul>
              <li>Developed the relaunch of the research centre’s website with a focus on user experience and interaction.</li>
              <li>Together with an additional graphic designer the site was rebuilt using Wordpress, including improving search though better SEO and an enhanced mobile and tablet experience.</li>
              <li>Conducted user testing to ensure the content on the site was meeting target audience’s needs.</li>
              <li>Developed the research centre’s social strategy on Facebook and Twitter.</li>
              <li>Collaborated in design- and user-research for multiple brands including French luxury group LVMH.</li>
              <li>Led the design and development of an interactive web-app for Camden Council. Encouraged the incorporation of a responsive site making it more compatible for future devices.</li>
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
            <li>My final thesis compared the user experience of native versus web apps on mobile devices, which led to the development of a case study prototype app for the British Museum.</li>
            <li>The core focus of this course was user experience, user interface design and human-computer interactions.</li> 
            <li>Attended industry events to grow knowledge of trends in the mobile and web and UX field.</li>
            <li>Designed a conceptual store guide app for Selfridges based on mobile HCI best practices.</li>
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
            <li>My final project was originally proposed to prevent product fraud and theft by adding a digital component to physical products. It expanded into a general enhancement of physical products by integrating digital components and touch-points.</li>
            <li>Developed a working prototype of a web platform, which offered customisation opportunities for brands.</li>
            <li>Mastered the design process of a product or service from the initial concept through to the final product including preparation for industrial mass production.</li>
            <li>Worked with multiple brands including Coca Cola South Africa and a conceptual branding project for Audi.</li>
            <li>Developed an understanding of design development processes and methodologies.</li>
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