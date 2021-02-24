$(function () {
  var price = [10000, 50000, 100000, 200000, 500000, 1000000];
  $("#slider").slider({
    range: true,
    step: 1,
    min: 0,
    max: price.length - 1,
    values: [0, 3],
    slide: function (event, ui) {
      if (ui.values[0] == ui.values[1]) {
        return false;
      }
      $("#from").val(price[ui.values[0]]);
      $("#to").val(price[ui.values[1]]);
    },
    create: function (event, ui) {
      for (var i = 0; i < price.length; i++) {
        var el = $("<label>" + price[i] + "</label>").css({
          left: (i / (price.length - 1)) * 100 + "%",
          
        });
        $("#slider").append(el);
      }
    },
  });
});
