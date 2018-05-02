<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="normalize.css">
</head>
<body>
<?php include'includes/cabecera.php' ?>

<div class="primerofaq">
	<div class="container">
		<h1><strong>Windows</strong> Frequently Asked Questions</h1>
	</div>
</div>

<div class="segundofaq">
	<div class="container">
	
		<h3>How do I install XAMPP?</h3><hr>
		<p>XAMPP for Windows exists in three different flavors:</p>

		<p>Installer:</p>
		<p>Probably the easiest way to install XAMPP.</p>

		<p>ZIP:</p>
		<p>For purists: XAMPP as ordinary ZIP archive.</p>

		<p>7zip:</p>
		<p>For purists with low bandwidth: XAMPP as 7zip archive.</p>

		<p>Note: If you extract the files, there can be false-positives virus warnings.</p>

		<h5>Using the installer:</h5>

		<p>The XAMPP control panel for start/stop Apache, MySQL, FileZilla &amp; Mercury or install these server as services.</p>

		<h5>Installing from ZIP</h5>

		<p>Unzip the zip archives into the folder of your choice. XAMPP is extracting to the subdirectory "C:\xampp" below the selected target directory. Now start the file "setup_xampp.bat", to adjust the XAMPP configuration to your system.</p>

		<p>If you choose a root directory "C:\" as target, you must not start "setup_xampp.bat".</p>

		<p>Like with the installer version, you can now use the "XAMPP Control Panel" for additional tasks.</p>


		<h3>Does XAMPP include MySQL or MariaDB?</h3><hr>
		<p>Since XAMPP 5.5.30 and 5.6.14, XAMPP ships MariaDB instead of MySQL. The commands and tools are the same for both.</p>


		<h3>How can I start XAMPP without setup?</h3><hr>
		<p>If you extract XAMPP in a top level folder like "C:\" or "D:\", you can start most servers like Apache or MySQL directly without execution of the file "setup_xampp.bat".</p>

		<p>Not using the setup script, or selecting relative paths in the setup script, is preferred if you are installing XAMPP on a usb drive. Because on each pc such a drive can have an other drive letter. You can switch from absolute to relative paths at any time with the setup script.</p>

		<p>Using the installer from our Downloads page is the easiest way to install XAMPP. After the installation is complete, you will find XAMPP under Start | Programs | XAMPP. You can use the XAMPP Control Panel to start/stop all server and also install/uninstall services.</p>

		<p>The XAMPP control panel for start/stop Apache, MySQL, FileZilla &amp; Mercury or install these server as services.</p>


		<h3>How do I start and stop XAMPP?</h3><hr>

		<p>The universal control center is the "XAMPP Control Panel" (thanks www.nat32.com). It is started with:</p>

		<p><span style="color:darkslateblue;">\xampp\xampp-control.exe</span></p>

		<p>You can also use some batchfiles to start/stop the servers:</p>
			
			<ul>
				<li>Apache &amp; MySQL start: <span style="color:crimson;">\xampp\xampp_start.exe</li>
				<li>Apache &amp; MySQL stop: <span style="color:crimson;">\xampp\xampp_stop.exe</span></li>
				<li>Apache start: <span style="color:crimson;">\xampp\apache_start.bat</span></li>
				<li>Apache stop: <span style="color:crimson;">\xampp\apache_stop.bat</span></li>
				<li>MySQL start: <span style="color:crimson;">\xampp\mysql_start.bat</span></li>
				<li>MySQL stop: <span style="color:crimson;">\xampp\mysql_stop.bat</span></li>
				<li>Mercury Mailserver start: <span style="color:crimson;">\xampp\mercury_start.bat</span></li>
				<li>Mercury Mailserver stop: <span style="color:crimson;">\xampp\mercury_stop.bat</span></li>
				<li>FileZilla Server start: <span style="color:crimson;">\xampp\filezilla_start.bat</span></li>
				<li>FileZilla Server stop: <span style="color:crimson;">\xampp\filezilla_stop.bat</span></li>
			</ul>

		<h3>How can I test that everything worked?</h3><hr>

		<h3>How can I install a server as a service?</h3><hr>

		<h3>Is XAMPP production ready?</h3><hr>

		<h3>How do I uninstall XAMPP?</h3><hr>

		<h3>What is the "lite" version of XAMPP?</h3><hr>

		<h3>Where should I place my web content?</h3><hr>

		<h3>Can I move the XAMPP installation?</h3><hr>
		<h3>What are "Automatic start pages" for the WWW directories?</h3><hr>
		<h3>Where can I change the configuration?</h3><hr>
		<h3>Why can't XAMPP work on Windows XP SP2?</h3><hr>
		<h3>Why doesn't XAMPP work on Vista?</h3><hr>
		<h3>How do I check the md5 checksum?</h3><hr>
		<h3>Why have changes in my php.ini not taken effect?</h3><hr>
		<h3>Help! There is a virus in XAMPP!</h3><hr>
		<h3>How do I configure my antivirus application?</h3><hr>
		<h3>Why doesn't the Apache server start on my system?</h3><hr>
		<h3>Why is my CPU load for Apache almost 99%?</h3><hr>
		<h3>Why are pictures and style-sheets not displayed?</h3><hr>
		<h3>How can I set a root password in MySQL?</h3><hr>
		<h3>Can I use my own MySQL server?</h3><hr>
		<h3>How do I restrict access to phpMyAdmin from the outside?</h3><hr>
		<h3>How do I enable access to phpMyAdmin from the outside?</h3><hr>
		<h3>Where is the IMAP support for PHP?</h3><hr>
		<h3>Why don't some PHP open source apps work with XAMPP on Windows?</h3><hr>
		<h3>Can I delete the "install" directory after installation?</h3><hr>
		<h3>How do I activate the eaccelerator?</h3><hr>
		<h3>How do I fix a connection error to my MS SQL server?</h3><hr>
		<h3>How do I work with the PHP mcrypt extension?</h3><hr>
		<h3>Do Microsoft Active Server Pages (ASP) work with XAMPP?</h3><hr>
		<h3>How can I get XAMPP working on port 80 under Windows 10?</h3><hr>
		<h3>How can I use Microsoft Edge to access local addresses under Windows 10?</h3><hr>
	</div>
</div>


<?php include 'includes/pie.php' ?>
</body>
</html>