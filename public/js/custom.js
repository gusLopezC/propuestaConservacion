/* ----------------- Start Document ----------------- */
console.log('Hello!');
(function ($) {
    "use strict";
    $(document).ready(function () {
        console.log('Hi!');
    });



});

function viewArrayInput() {
    var arrayInputs = new Array();
    var result = 0;

    var inputsVale = document.getElementsByClassName('metros');

    console.log(inputsVale)
}

/*----------------------------------------------------*/
/* Pricing List
/*----------------------------------------------------*/
function newMenuItem() {
    var newElem = $("tr.pricing-list-item.pattern").first().clone();
    newElem.find("input").val("");
    newElem.appendTo("table#pricing-list-container");
}


if ($("table#pricing-list-container").is("*")) {
    $(".add-pricing-list-item").on("click", function (e) {
        e.preventDefault();
        newMenuItem();
    });

    // remove ingredient
    $(document).on(
        "click",
        "#pricing-list-container .delete",
        function (e) {
            e.preventDefault();
            $(this).parent().parent().remove();
        }
    );

    // add submenu
    $(".add-pricing-submenu").on("click", function (e) {
        e.preventDefault();

        var newElem = $(
            "" +
            '<tr class="pricing-list-item pricing-submenu">' +
            "<td>" +
            '<div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>' +
            '<div class="fm-input"><input type="text" placeholder="Category Title" /></div>' +
            '<div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>' +
            "</td>" +
            "</tr>"
        );

        newElem.appendTo("table#pricing-list-container");
    });

    $("table#pricing-list-container tbody").sortable({
        forcePlaceholderSize: true,
        forceHelperSize: false,
        placeholder: "sortableHelper",
        zIndex: 999990,
        opacity: 0.6,
        tolerance: "pointer",
        start: function (e, ui) {
            ui.placeholder.height(ui.helper.outerHeight());
        },
    });
}

// Unit character
var fieldUnit = $(".pricing-price").children("input").attr("data-unit");
$(".pricing-price")
    .children("input")
    .before('<i class="data-unit">' + fieldUnit + "</i>");

