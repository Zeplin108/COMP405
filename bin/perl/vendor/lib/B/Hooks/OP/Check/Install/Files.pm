package B::Hooks::OP::Check::Install::Files;

$self = {
          'typemaps' => [],
          'libs' => '',
          'deps' => [],
          'inc' => ''
        };


# this is for backwards compatiblity
@deps = @{ $self->{deps} };
@typemaps = @{ $self->{typemaps} };
$libs = $self->{libs};
$inc = $self->{inc};

	$CORE = undef;
	foreach (@INC) {
		if ( -f $_ . "/B/Hooks/OP/Check/Install/Files.pm") {
			$CORE = $_ . "/B/Hooks/OP/Check/Install/";
			last;
		}
	}

1;
