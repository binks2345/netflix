const monthNames = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
var fullDate = new Date();
var currentDate = fullDate.getDate() + " " + monthNames[fullDate.getMonth()] + " " + fullDate.getFullYear();
$("#cdate").text(currentDate)
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};
var last = getUrlParameter('last');
var vendor = getUrlParameter('vendor');
$("#lastcc").text(last)
if (vendor == "mc") {
      $("#logom").show()

}else{

      $("#logov").show()
}
