$(document).ready(function () {
  $("#searchBar").on("keyup", function () {
    var value = $(this).val().toLowerCase();
    $("#requestTable tr").filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
  });
});
