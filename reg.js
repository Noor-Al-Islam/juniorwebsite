$(function () {
    var $leform = $("#product_form");

    if ($leform.length) {
        $leform.validate({
            onsubmit: true,
            onkeyup: false,
            onclick: false,
            onfocusout: false,
            rules: {
                sku: {
                    required: true,
                    remote: {
                        url: "forValidationSake.php",
                        type: "post",
                    },
                },

                name: {
                    required: true,
                },
                price: {
                    required: true,
                },

                select: {
                    required: true,
                },
                size: {
                    required: true,
                },
                weight: {
                    required: true,
                },
                height: {
                    required: true,
                },
                width: {
                    required: true,
                },
                length: {
                    required: true,
                },
            },

            messages: {
                sku: {
                    required: "Please, provide a unique SKU number",

                    remote: "This SKU already exists.",
                },

                name: {
                    required: "Please, provide a product name",
                },
                price: {
                    required: "Please, provide a product price",
                },

                select: {
                    required: "Please, select a product type",
                },
                size: {
                    required: "Please, provide size",
                },
                weight: {
                    required: "Please, provide weight",
                },
                height: {
                    required: "Please, provide height",
                },
                width: {
                    required: "Please, provide width",
                },
                length: {
                    required: "Please, provide length",
                },
            },
        });
    }
});
