<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDE Incubator Dependency Visualization";
	$pageKeywords	= "pde, build, ui, plug-in, development, environment, bundle, incubator, visualization, zest";
	
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

			<p class=bar>Overview</p>
			<p>
			The dependency visualization aims to provide a set of 
			views to assist with plug-in dependency analysis tasks.  
			In particular, the views will provide cognitive support 
			to people as they attempt to understand the dependencies 
			between their plug-ins.
			</p>
			
			<p class=bar>Bugs and Feature Requests</p>
			We use the <A HREF="https://bugs.eclipse.org/bugs/">Eclipse Bugzilla System</a>
			for tracking issues with the Plug-in Dependency Visualization Incubator project.<BR><BR> 
			Click <A HREF="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=%5Bpde+viz%5D&classification=Eclipse&product=PDE&component=Incubators&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">here</a> 
			for a list of currently opened bugs.
			</p>
			
			<p class=bar>Accessing Source Code</p>
			Currently the PDE Dependency Visualization tool is only available in CVS.  The tool is built
			using the <A HREF="http://www.eclipse.org/mylar/zest.php">Zest</A> toolkit and 
			<A HREF="http://www.eclipse.org/gef/">Draw2D</A>.  In order to get the source and
			build the PDE Dependency Visualization Tool follow the instructions found 
			<A HREF="getsource.php">here</a>.
	
			
			

</p>
		
      
<p>&nbsp;</p>
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
