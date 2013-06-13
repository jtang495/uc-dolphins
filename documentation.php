<!DOCTYPE html>
<?php require 'includes/head.inc.php' ?>
<link href="css/docs.css" rel="stylesheet">
<title>Upper County - Documentation</title>
<div id="wrap">
  <!-- Include navigation bar -->
  <?php require 'includes/navbar.inc.php' ?>
  <div id="push"></div>
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container">
    <div class="row">
      <div class="span3 docs-sidebar">
        <ul class="nav nav-list docs-sidenav">
          <li><a href="#overview"><i class="icon-chevron-right"></i>Overview</a>
          <li><a href="#hosting"><i class="icon-chevron-right"></i>Hosting</a>
          <li><a href="#install"><i class="icon-chevron-right"></i>Installing Git and Heroku</a>
          <li><a href="#workflow"><i class="icon-chevron-right"></i>Workflow</a>
        </ul>
      </div><!-- /.span3 -->
      <div class="span9">
        <section id="overview">
          <div class="page-header">
            <h1>Overview</h1>
          </div>
          <p>The purpose of this documentation is to help potential contributors to the website familiarize themselves with the current deployment configuration and recommended workflow. At the time of this writing, the Upper County website is a completely static website with the exception of PHP-style server-side includes to refactor common HTML and JavaScript. This means that until there are server-side scripts to assist you in making website updates, you will be editting the HTML directly.
          <h3>How to Read</h3>
          <p>Throughout this document, actual code will be enclosed in a code block such as <code>&lt;html&gt;&lt;/html&gt;</code>. For multi-line code blocks, each line will be numbered and colored syntax highlighting will be used:

<pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  ...
&lt;/html&gt;
</pre>
          <p>Command line interface commands will be displayed in a code block without line numbering. Commands themselves will be preceded by an "$" while output will be displayed directly:
<pre>
$ echo "Hello World!"
Hello World
</pre>
        </section>
        <section id="hosting">
          <div class="page-header">
            <h1>Hosting</h1>
          </div>
          <h3>Heroku</h3>
          <p>The Upper County website is hosted on the <a href="//www.heroku.com" target="_blank">Heroku</a> cloud application platform. Prior to cloud platform services such as Heroku, web developers were responsible for pushing code to the server through file transfer protocol (FTP) and configuring/maintaining their web server. If you bought a shared web hosting plan with a provider such as GoDaddy, your web server is most likely Apache. Heroku takes care of configuration so that as the developer, you just need to focus on writing the code. Best of all, for sites with low traffic, it's free!
          <h3>Bitbucket</h3>
          <p>The code for the website is also hosted as a Git repository on <a href="//www.bitbucket.org" target="_blank">Bitbucket</a>. This repository serves as the remote master copy of our code and is private. You will need to request access from an admin of the repository to pull/push commits.
        </section>
        <section id="install">
          <div class="page-header">
            <h1>Installing Git and Heroku</h1>
          </div>
          The directions below have been tested under the Ubuntu 12.04 LTS distribution. If you plan to contribute to the website but are unfamiliar with Linux and the command line interface, it is worth learning. You will save a lot of time!
          <h3>Git</h3>
          <p>From the command line, run
<pre>
$ sudo apt-get install git
</pre>
          <p>Now that git is installed, you need to tell it your name and email so it can properly label your commits:
<pre>
$ git config --global user.name "Your Name Here"
$ git config --global email "your-email@example.com"
</pre>
That's it!
          <h3>Heroku</h3>
          <h4>Create an Account</h4>
          <p>Visit <a href="//www.heroku.com">Heroku</a> and open an account. It's free and you will never need to visit this site again.
          <h4>Install the Command Line Interface</h4>
          <p>From now on, you will interact with Heroku through the command line. To install the Heroku command line interface, run
<pre>
$ wget -q0- https://toolbelt.heroku.com/install.sh | sh
</pre>
          <p>Once installed, log in using your Heroku account credientials:
<pre>
$ heroku login
Enter your Heroku credentials.
Email: your-email@example.com
Password:
Could not find an existing public key.
Would you like to generate one? [Yn]
Generating new SSH public key.
Uploading ssh public key /Users/your-name/.ssh/id_rsa.pub
</pre>
Done! Your credentials are stored on your local machine and you should never be asked to log in again.
        </section>
        <section id="workflow">
          <div class="page-header">
            <h1>Workflow</h1>
          </div>
          <h3>Version Control</h3>
          <h3>Syncing with others - Git Pull</h3>
          <h3>Make local changes - Git Add/Commit</h3>
          <h3>Share your changes - Git Push</h3>
          <h3>Redeploying Site</h3>
        </section>
      </div><!-- /.span9 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
  <div id="push"></div>
</div><!-- /.wrap -->
<?php require 'includes/footer.inc.php' ?>
