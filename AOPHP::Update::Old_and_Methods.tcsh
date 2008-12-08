#!/bin/tcsh -f
set template = "./AOPHP/templates/comments.php";

if ( ! -d "./AOPHP/::/" && ! -d "./AOPHP/__/" && ! -d "./AOPHP/Methods/" ) then
	printf "This script must be ran from AOPHP's parent directory\n"
	exit
endif

foreach namespace_php ( "`find 'AOPHP/::/' -name '*.class.php'`" )
	set class_name = `echo ${namespace_php} | sed 's/\(.*\)\:\:\/\(.*\)\.class\.php$/\1\2/' | sed 's/\//\:\:/g'`

	set no_namespace_php = `echo "${namespace_php}" | sed 's/\:\:/__/'`
	set no_namespace_dir = `dirname ${no_namespace_php}`

	if ( ! -d "${no_namespace_dir}" ) then
		printf "Creating %s's directory for PHP versions w/o namespace support.\n" ${no_namespace_dir}
		mkdir -p "${no_namespace_dir}"
	endif

	set update_no_namespace_php = "no"
	if ( ! -e "${no_namespace_php}"  ) then
		set update_no_namespace_php = "yes"
	else
		set newest_php = "`ls --sort=time '${namespace_php}' '${no_namespace_php}' | head -1`"
		if ( "${newest_php}" == "${namespace_php}" ) set update_no_namespace_php = "yes"
	endif

	if ( "${update_no_namespace_php}" == "yes" ) then
		printf "Creating a copy of %s for PHP versions w/o namespace support.\n" "${class_name}"
		cp -r "${namespace_php}" "${no_namespace_php}"
		ex -s '+1,$s/[\t\s]\+namespace \([^;]\+\);[\r\n\t\s]\+\(^[\t\s]*class \)\([^\s]\+\)\s/\2\1__\3 /g' '+1,$s/\([a-zA-Z]\{1\}\)\:\:\([a-zA-Z]\{1\}\)/\1__\2/g' '+1,$s/\:\:\(__load_method\)/\1/g' '+wq' "${no_namespace_php}"
	endif

	set method_class_dir = `echo "${namespace_php}" | sed 's/\:\:/Methods/' | sed 's/\.class\.php$//'`

	if ( ! -d "${method_class_dir}" ) then
		printf "Creating %s's Directory\n" ${method_class_dir}
		mkdir -p "${method_class_dir}"
	endif

	foreach method ( `grep -r 'function' "${namespace_php}" | sed 's/.*function\ \([^\ (]\+\).*/\1/'` )
		set methods_php = "${method_class_dir}/${method}.method.php"
		if ( -e "${methods_php}" ) continue
		printf "Creating %s's %s method file:\n" ${namespace_php} ${method}
		if ( ! -e "${template}" ) then
			touch "${methods_php}"
		else
			cp "${template}" "${methods_php}"
		endif
	end
end
