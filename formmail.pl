#!/usr/bin/perl
use CGI;

my $modulo = new CGI;
my $sender = "/usr/sbin/sendmail -t";
my $miamail = "lucabee@libero.it";
my $successo = $modulo->param('successo');
my $name = $modulo->param('name');
my $email = $modulo->param('email');
my $message = $modulo->param('message');
my $message = "Name: " . $name . "\nEmail: " . $email . "\nMessaggio: " . $message;

open(SENDMAIL, "|$sender") or die "Problama in $sender: $!";
print SENDMAIL "To: " . $miamail;
print SENDMAIL "Reply-To: " . $miamail;
print SENDMAIL "Subject: Messaggio dal sito";
print SENDMAIL "Content-type: text/plain\n\n";
print SENDMAIL $messaggio;
close(SENDMAIL);

print $modulo->redirect($successo);