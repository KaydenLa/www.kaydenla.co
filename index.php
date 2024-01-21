<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
        include '/opt/bitnami/apache/htdocs/partials/head.php';
    ?>
    <title>Personal Portfolio For Kayden La - Home</title>
  </head>
  <body>
  <?php
        include '/opt/bitnami/apache/htdocs/partials/nav.php';
    ?>
    <div class="padding">
      <div style="text-align: center;">
        <h1>
         Content
        </h1>
      </div>
      <div style="text-align: left;">
	<h2><a href="/login">Login to Filesytem</a></h2>
	<h2><a href="/blog">Blog - HTX Adventures - Tech Guides</a></h2>
        <h2><a href="/cis4365">Bakery Database System</a></h2>
        <h2><a href="/view-customer">View by Customer</a></h2>
	<h2><a href="/node">React App</a></h2>
        <h2><a href="https://kaydenla.com">Exit to main Kayden La Website</a></h2>
        <h2 style="text-align: center;">
		About
        </h2> 
	This website is a fork of Kayden's main website deployed at kaydenla.com
	<br>Content here is much more fluid and experimental than what is found on the main page.
	<br>Being able to use this smaller, simplier, website is useful as it lets me prototype new features without worrying about distrupting SEO and accessability of the main page. 
	<br>Additionally, content here is mostly served on AWS and when CDNs are used, caching configurations are set to a minimal to ease with development.
      </div>
    </div>
  </body>
</html>
