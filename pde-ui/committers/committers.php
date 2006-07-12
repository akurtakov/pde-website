<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE/UI Committers and Contributors";
	$pageKeywords	= "PDE/UI, PDE, plug-in, development, tools, Eclipse, committer, contributor";
	$pageAuthor		= "PDE/UI Team";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
ob_start();
?>
	<div id="midcolumn">
		<h1><?= $pageTitle ?></h1>
		<div class="homeitem3col">
			<a name="committers"></a>
			<h3>PDE/UI Committers</h3>
			<table width="100%" border="0">
              <tr>
                <td width="33%"><p align="center"><img src="brian_bauman.gif" alt="Brian Bauman" width="200" height="280"></p>
                <p align="center"><strong>Brian Bauman </strong></p>
                <p align="center">Committer, IBM Austin Labs</p>
                <p align="center">&nbsp;</p>
                <p align="center">&nbsp;</p></td>
                <td width="33%"><p align="center"><img src="dejan_glozic.gif" alt="Dejan Glozic" width="200" height="280"></p>
                  <p align="center"><strong>Dejan Glozic</strong></p>
                  <p align="center">Father of PDE, IBM Toronto Lab</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p></td>
				<td width="34%"><p align="center"><img src="konrad_kolosowski.gif" alt="Konrad Kolosowski" width="200" height="280"></p>
                  <p align="center"><strong>Konrad Kolosowski</strong></p>
				  <p align="center">Committer, IBM Toronto Lab</p>
                  <p align="center">&nbsp;</p>
                  <p align="center">&nbsp;</p>
				</td>
              </tr>
              <tr>
                <td><p align="center"><img src="janek_lasocki_biczysko.gif" alt="Janek Lasocki-Biczysko" width="200" height="280"></p>
                <p align="center"><strong>Janek Lasocki-Biczysko</strong></p>
                <p align="center">Committer, IBM Toronto Lab</p></td>
                <td><p align="center"><img src="wassim_melhem.gif" alt="Wassim Melhem" width="200" height="280"></p>
                <p align="center"><strong><a href="http://wassim-melhem.blogspot.com">Wassim Melhem</a></strong></p>
                <p align="center">PDE/UI Lead, IBM Toronto Lab </p></td>
                <td><p align="center"><img src="cherie_wong.jpg" alt="Cherie Wong" width="200" height="280"></p>
                <p align="center"><strong>Cherie Wong</strong></p>
                <p align="center">Committer, Amazon.com</p></td>
              </tr>
          </table>
        </div>
		<div class="homeitem3col">
			<a name="contributors"></a>
			<h3>Active PDE/UI Contributors</h3>
			<table width="100%" border="0">
              <tr>
               <td width="50%"><p align="center"><img src="mike_pawlowski.gif" alt="Mike Pawlowski" width="200" height="280"></p>
                  <p align="center"><strong>Mike Pawlowski</strong></p>
                  <p align="center">Contributor, IBM Toronto Lab</p>               
			    </td>
				<td width="50%"><p></p></td>
              </tr>
          </table>
        </div>
	</div>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>

