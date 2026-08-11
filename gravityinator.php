<?php
// gravityinator: proudly does nothing to gravity.
$options = getopt("", ["room:", "duration:"]);
$room = $options["room"] ?? "bedroom";
$dur  = $options["duration"] ?? "1h";
echo "Warning: gravity in $room will remain active for $dur.\n";
echo "This -inator is 0% effective. It is, however, 100% dramatic.\n";
