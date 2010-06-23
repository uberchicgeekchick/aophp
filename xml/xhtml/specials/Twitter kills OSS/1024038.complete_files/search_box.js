var $searchBox = $('input#query'),
    initialString = window.initialText || "Search the help center";

$searchBox.focus(function() {
    if ($searchBox.val() == initialString) {
        this.value = "";
        $searchBox.addClass("active");
        $("td#content").addClass("active");
    }
});

$searchBox.blur(function() {
    if ($searchBox.val() == "") {
        this.value = initialString;
        $searchBox.removeClass("active");
        $("td#content").removeClass("active");
    }
});