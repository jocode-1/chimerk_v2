$(document).ready(function () {

     // CREATE PRODUCT 

     $('#submit').on('click', function (e) {
        e.preventDefault()
        var product_name = $('#product_name').val()
        var cost_price = $('#cost_price').val()
        var quantity = $('#quantity').val()
        var selling_price = $('#selling_price').val()
        var product_date = $('#date').val()
        var product_category = $('#product_category').val()
        var payment_status = $('#payment_status').val()
        if (product_name == '' || cost_price == '' || quantity == '' || selling_price == '' || product_date == '' || product_category == '' || payment_status == ''  ) {
            sweet('question', 'Empty fields', 'Empty fields detected, please try again')
        } else {
            create_category(product_name, cost_price, quantity, selling_price, product_date, product_category, payment_status);
        }

    })

    function create_category(product_name, cost_price, quantity, selling_price, product_date, product_category, payment_status) {
        $('#submit').text('Loading .....');
        $('#submit').attr('disabled', true);
        $.ajax({
            url: 'http://donchimerk.org/inc/services/CreateProductAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {
                product_name: product_name,
                cost_price: cost_price,
                product_quantity: quantity,
                selling_price: selling_price,
                date: product_date,
                product_category: product_category,
                status: payment_status,
            },
            success: function (data) {
                console.log(data)
                $('#submit').text('Create');
                $('#submit').attr('disabled', false);
                if (data.message = 'success') {
                    sweet('success', 'Congrats', 'Product created successfully!')
                    $('#product_name').val('')
                    $('#cost_price').val('')
                    $('#quantity').val('')
                    $('#selling_price').val('')
                    $('#date').val('')
                    $('#product_category').val('')
                    $('#payment_status').val('')
                } else {
                    sweet('error', 'Oops', 'There was an error, please try again')
                }

            },
            error: function (xhr, status, errorThrown) {
                sweet('error', 'Network error', 'Check network and try again')
                console.log("error status: " + xhr.status);
                console.log("errorThrown: " + errorThrown);
                $('#submit').text('Create');
                $('#submit').attr('disabled', false);
            }
        });


    }

    fetchProduct()

    function fetchProduct() {
        $.ajax({
            url: 'http://donchimerk.org/inc/services/FetchProductAjax.php',
            type: 'POST',
            dataType: 'json',

            success: function (data) {
                console.log(data)
                $("#datatables-buttons").DataTable({
                    dom: "Bfrtip",
                    "destroy": true,
                    "serverside": true,
                    "processing": true,
                    "bresponsive": true,
                    "lengthChange": !1,
                    "buttons": ["copy", "print", "csv"],
                    "aaData": data,
                    "scrollX": true,
                    "aoColumns": [
                        { "sTitle": "Product Name", "mData": "product_name" },
                        { "sTitle": "Cost Price", "mData": "cost_price" },
                        { "sTitle": "Litres", "mData": "product_quantity" },
                        { "sTitle": "Selling Price", "mData": "selling_price" },
                        { "sTitle": "Product Date", "mData": "date" },
                        { "sTitle": "Product Category", "mData": "product_category" },
                        {
                            "sTitle": "Status", "mData": "status", "render":
                                function (mData, type, row, meta) {
                                    if (mData == 1) {
                                        return '<span class="badge bg-success">In-Stock</span>'
                                    } else if (mData == 2) {
                                        return '<span class="badge bg-danger">Out-of-Stock</span>'
                                    }

                                }
                        },
                        {
                            "sTitle": "Edit",
                            "mData": "category_id",
                            "render": function (mData, type, row, meta) {
                                return '<button class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1 edit" data = ' + mData + '></i> Edit</button>'
                            }
                        },
                        {
                            "sTitle": "Delete",
                            "mData": "product_id",
                            "render": function (mData, type, row, meta) {
                                return '<button class="btn btn-sm btn-white text-danger delete" data = ' + mData + '><i class="far fa-trash-alt me-1 " ></i>Delete</button>'
                            }
                        }
                    ]
                });
                // datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)");
            },
            error: function (xhr, status, errorThrown) {
                console.log("error status: " + xhr.status);
            }
        });
    }


    $('#datatables-buttons').on('click', function (event) {
        let e1 = event.target.getAttribute("id");
        if (event.target.classList.contains("delete")) {
            var product_id = event.target.getAttribute("data");
            console.log("View From " + product_id)
            DeleteProductByID(product_id)
        }

    })

    function DeleteProductByID(product) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: 'http://donchimerk.org/inc/services/UpdateProductByIdAjax.php',
                    method: 'POST',
                    data: { product_id: product },
                    success: function (response) {
                        fetchProduct()
                        // console.log(response)
                        Swal.fire(
                            'Deleted!',
                            'Product Was Deleted Successfully.',
                            'success'
                        )
                        

                    }
                });

            }
        });


    }


    fetchCategory()

    function fetchCategory() {

        $.ajax({
            url: 'http://donchimerk.org/inc/services/FetchCategoryAjax.php',
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                console.log(data)
                let video = $('#product_category');
                video.empty();
                video.append('<option selected="true" disabled>--Select Category--</option>');
                video.prop('selectedIndex', 0);
                for (var i = 0; i < data.length; i++) {
                    video.append($('<option></option>').attr('value', data[i].category_name).text(data[i].category_name));

                }

            },
            error: function (xhr, status, errorThrown) {
                sweet('error', 'Network error', 'Check network and try again')

            }
        });


    }








    function sweet(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        })
    }


})
