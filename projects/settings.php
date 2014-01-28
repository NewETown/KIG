<?php

function KIGProjectHeader() {
	print "<!DOCTYPE html>\n";
	print "<html lang=\"en\">\n";
	print "<head>\n";
	print "\t<meta charset=\"UTF-8\">\n";
	print "\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
	print "\t<title>KIG Prototype</title>\n";
	print "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../../css/bootstrap.css\">\n";
	print "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/custom.css\">\n";
	print "\t<script src=\"http://code.jquery.com/jquery-1.10.1.min.js\"></script>\n";
	// print "\t <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>\n";
	print "</head>\n";
	print "<body>\n";
	print "\t<div class=\"container\">\n";
}

function KIGProjectFooter() {
	print "\t</div>\n";
	print "\t<script src=\"../../js/bootstrap.min.js\"></script>\n";
	print "</body>\n";
	print "</html>";
}

?>