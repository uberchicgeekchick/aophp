#!/bin/tcsh -f
foreach class_php ( `find AOPHP/::/ -name "*.class.php"` )
	set class = `echo ${class_php} | sed 's/\(.*\)\:\:\/\(.*\)\.class\.php$/\1\2/' | sed 's/\//\:\:/g'`
	set class_dir = `echo "${class_php}" | sed 's/\:\:/Methods/' | sed 's/\.class\.php$//'`

	if ( ! -d "${class_dir}" ) then
		printf "Creating %s's Directory\n" ${class_dir}
		mkdir -p "${class_dir}"
	endif

	foreach method ( `grep -r 'function' "${class_php}" | sed 's/.*function\ \([^\ (]\+\).*/\1/'` )
		set methods_php = "${class_dir}/${method}.method.php"
		if ( -e "${methods_php}" ) continue
		printf "Creating %s's %s method file:\n" ${class} ${method}
		touch "${methods_php}"
	end
end
