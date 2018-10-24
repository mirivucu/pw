$(document).ready(function () {
    $("form").submit(function (event) {
        event.preventDefault();
        var data = {
            Username: event.target[0].value,
            Parola: event.target[1].value
        };
        $.post("auth.php", data, function (data) {
            // alert("success");
            if (JSON.parse(data).status === "ok") {
                $.redirect("index.php", JSON.parse(data));
            } else {
            }
        }).fail(function (data) {
        });
    });
});

function registerPage() {
    $.get("register.html", function (data) {
        $("#content").empty();
        $("#content").html(data);

        $("form")
            .submit(function (event) {
                event.preventDefault();
                var data = {
                    Username: event.target[0].value,
                    Parola: event.target[3].value,
                    Email: event.target[1].value,
                    Telefon: event.target[2].value
                };
                $.post("insert_cont.php", data, function (data) {
                    // alert("success");
                    if (JSON.parse(data).status === "ok") {
                        window.location.replace("http://localhost/index.php?page=login");
                    } else {
                    }
                })
                    .fail(function (data) {
                    });
            });
    });
}
