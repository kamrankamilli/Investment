$("input[type=radio]").change(function () {
  $("input[type='radio']").parent().removeClass("radiochecked");
  $("input[type='radio']:checked").parent().addClass("radiochecked");
});
