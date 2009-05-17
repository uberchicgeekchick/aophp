#!/bin/tcsh -f
set my_editor = "`printf "\""${0}"\"" | sed 's/.*\/\([^\.]\+\).*/\1/g'`"
switch ( "${my_editor}" )
case "gedit":
	breaksw
case "vi":
case "vim":
case "vim-enhanced":
default:
	set my_editor = `printf "%s -p" "vim-enhanced"`
	breaksw
endsw

${my_editor} "./apps/speakingOUT/shows/Expressive Programming/episodes/0008/show_notes.php" "./apps/speakingOUT/shows/Expressive Programming/episodes/init.php"
