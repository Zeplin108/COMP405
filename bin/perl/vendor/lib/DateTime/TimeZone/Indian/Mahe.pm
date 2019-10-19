# This file is auto-generated by the Perl DateTime Suite time zone
# code generator (0.07) This code generator comes with the
# DateTime::TimeZone module distribution in the tools/ directory

#
# Generated from /tmp/G45iu_6zbF/africa.  Olson data version 2013h
#
# Do not edit this file directly.
#
package DateTime::TimeZone::Indian::Mahe;
{
  $DateTime::TimeZone::Indian::Mahe::VERSION = '1.63';
}
BEGIN {
  $DateTime::TimeZone::Indian::Mahe::AUTHORITY = 'cpan:DROLSKY';
}

use strict;

use Class::Singleton 1.03;
use DateTime::TimeZone;
use DateTime::TimeZone::OlsonDB;

@DateTime::TimeZone::Indian::Mahe::ISA = ( 'Class::Singleton', 'DateTime::TimeZone' );

my $spans =
[
    [
DateTime::TimeZone::NEG_INFINITY, #    utc_start
60129029892, #      utc_end 1906-05-31 20:18:12 (Thu)
DateTime::TimeZone::NEG_INFINITY, #  local_start
60129043200, #    local_end 1906-06-01 00:00:00 (Fri)
13308,
0,
'LMT',
    ],
    [
60129029892, #    utc_start 1906-05-31 20:18:12 (Thu)
DateTime::TimeZone::INFINITY, #      utc_end
60129044292, #  local_start 1906-06-01 00:18:12 (Fri)
DateTime::TimeZone::INFINITY, #    local_end
14400,
0,
'SCT',
    ],
];

sub olson_version { '2013h' }

sub has_dst_changes { 0 }

sub _max_year { 2023 }

sub _new_instance
{
    return shift->_init( @_, spans => $spans );
}



1;

