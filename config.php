<?php

	// Configuration file

	$WIKI_TITLE = '';// name of the site

	// SHA1 hash of password. If empty (or commented out), no password is required
	$PASSWORD=sha1('');

	$TEMPLATE='templates/dandelion.html';// presentation template
	$TEMPLATE='templates/dokuwiki/index.html';// presentation template

	// if true, you need to fill password for reading pages too
	// before setting to true, read http://lionwiki.0o.cz/index.php?page=UserGuide%3A+How+to+use+PROTECTED_READ
	$PROTECTED_READ=false;

	$NO_HTML=true;// XSS protection
