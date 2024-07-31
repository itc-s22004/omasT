#!/usr/bin/perl
use utf8;
use strict;
use CGI qw/-no_xhtml :standard/;

my $cgi = new CGI;
my $url = $cgi->parma('url');

if ($url =~ /^http:\/\/example\.jp\//) {
Content-Type: text/html; charset=UTF-8

<body>
Bad URL
</body>
END_OF_HTML

