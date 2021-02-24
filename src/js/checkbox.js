$("input[type=checkbox]").change(function () {
    $("input[type='checkbox']").parent().removeClass("checkboxchecked");
    $("input[type='checkbox']:checked").parent().addClass("checkboxchecked");
  });
  