$(document).ready(function() {
  window.cart = {
    list: [],
    costTotal: 0
  };

  $(".panel-footer").click(function(details) {
    console.log(details);
    window.cart.list.push({
      id: this.attributes.id,
      price: this.attributes.pret,
      produs: this.attributes.produs
    });
    $("#cart").unbind();
    console.log("DONE");
  });
});
function history() {
  if (
    window.username !== undefined &&
    window.username !== null &&
    window.username !== ""
  ) {
    var data = {
      name: window.username
    };
    $.post("list_comenzi.php", data, function(data) {
      $("#content").empty();
      $("#content").html(data);
    }).fail(function(data) {
      // alert("error");
    });
  } else {
    //TODO :: signal that the user is not logged in
  }
}

function switchToCheckout() {
  if (window.cart.list.length !== 0) {
    $.get("checkout.html", function(data) {
      $("#content").empty();
      $("#content").html(data);
      console.log("add items in basket");
      var suma = 0;
      for (var i = window.cart.list.length - 1; i >= 0; i--) {
        suma = +suma + +window.cart.list[i].price.value;
        $("#chOut").prepend(
          '<p class="item" id="' +
            window.cart.list[i].id.value +
            '"><a href="#">' +
            window.cart.list[i].produs.value +
            '</a> <span class="price">$' +
            window.cart.list[i].price.value +
            " </span></p>"
        );
        window.suma = suma;
      }
      $("#chOut").append(
        '<hr><p>Total <b><span id="suma" class="price" style="color:black">$' +
          suma +
          "</b></span></p>"
      );
      $(".item").click(function(event) {
        for (var i = window.cart.list.length - 1; i >= 0; i--) {
          if (
            window.cart.list[i].id.value.localeCompare(
              event.currentTarget.id
            ) === 0
          ) {
            var suma =
              $("#suma")
                .text()
                .substring(1) - window.cart.list[i].price.value;
            if (suma != 0) {
              $("#suma").text("$" + suma);
              window.cart.list.splice(i, 1);
              $(event.currentTarget).remove();
              window.suma = suma;
              return;
            } else {
              window.location.replace("http://localhost/index.php?page=shop");
            }
          }
        }
      });
      $("form").submit(function(event) {
        event.preventDefault();
        var data = {
          Username: window.username,
          Suma: window.suma,
          Nume: event.target[0].value,
          Email: event.target[1].value,
          Adresa: event.target[2].value,
          Oras: event.target[3].value,
          Judet: event.target[4].value,
          Cod: event.target[5].value
        };
        $.post("insert_comenzi.php", data, function(data) {
          // alert("success");
          if (JSON.parse(data).status === "ok") {
            window.location.replace("http://localhost/index.php");
          } else {
            //TODO:: add an error message
          }
        }).fail(function(data) {
          // alert("error");
        });
      });
    });
  } else {
    //TODO :: info ca e cosul gol
    $("#cart")
      .mouseover(function() {
        $(this)
          .children(".description")
          .show();
      })
      .mouseout(function() {
        $(this)
          .children(".description")
          .hide();
      });
  }
}
