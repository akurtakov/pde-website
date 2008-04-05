<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Incubator";
	$pageKeywords	= "pde, build, ui, plug-in, development, environment, bundle, incubator";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content between the markers!	
ob_start();
?>		

<div id="midcolumn">
	<h1><?= $pageTitle ?></h1>
	<p class=bar>Mission Statement</p>
		<p>
		The goal of the PDE Incubator is to do experimental, forward-looking work outside of the constraints of the 
		regular release cycles. While not necessarily targeting the next Eclipse release, our work in the 
		incubator is always focused on delivering new capabilities into the development stream.  
		In particular, the PDE Incubator will focus on tools and technologies to assist with 
		plug-in development, providing plug-in developers more cognitive 
		support for the tasks they perform every day.
		<br>
		<blockquote><i>In PDE we do tooling, but our business is people!</i></blockquote>
		</p>
	<p class=bar>Current Work Areas</p>
		<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
			<tr>
		      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
		      <td width="98%"><a href="dependency-visualization/index.php" target="_top"><b>Dependency Visualization</b></a><br>
			    Views designed to assist with plug-in dependency analysis tasks.</td>
			</tr>
			<tr>
		      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
		      <td width="98%"><a href="ds/index.php" target="_top"><b>Declarative Services Tooling</b></a><br>
			    Tooling around the declarative services (DS) specification from OSGi</td>
			</tr>
			<tr>
		      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
		      <td width="98%"><a href="product_customization/index.php" target="_top"><b>Product Customization Tooling</b></a><br>
			    Tooling built around the Equinox Transformations component</td>
			</tr>
	  	</table>
	  	
	  	<p class=bar>Graduated Work</p>
		<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
		  	<tr>
		      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
		      <td width="98%"><a href="spy/index.php" target="_top"><b>Plug-in Spy</b></a><br>
		    	A way for a plug-in developer to introspect Eclipse to aid plug-in development.</td>
		  	</tr>
		  	<tr>
		      <td width="2%" align=RIGHT valign=TOP><img src="http://eclipse.org/images/Adarrow.gif" width="16" height="16" border="0"></td>
		      <td width="98%"><a href="http://wiki.eclipse.org/PDE_UI_Incubator_ApiTools" target="_top"><b>API Tooling</b></a><br>
		    	A collection of utilities that can be used in API maintenance and consistency checks.</td>
		  	</tr>
	  	</table>
</div>
<?php
	include $_SERVER['DOCUMENT_ROOT'] . "/pde/incubator/component-links.html";
	if (file_exists("dir-links.html")) {include "dir-links.html";}
?>
<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
