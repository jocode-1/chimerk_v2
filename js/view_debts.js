
$(document).ready(function () {


    function sweet(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        })
    }


    fetchAllDebts()


    function fetchAllDebts() {
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchDebtsAjax.php',
            type: 'POST',
            dataType: 'json',
            // data: {staff_id: agent_id},

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
                        { "sTitle": "Product Price", "mData": "product_price" },
                        { "sTitle": "Liters", "mData": "product_quantity" },
                        { "sTitle": "Total Amount", "mData": "total_amount" },
                        { "sTitle": "Amount Paid", "mData": "amount_paid" },
                        { "sTitle": "Amount Owing", "mData": "amount_owing" },
                        { "sTitle": "Coustomer Name", "mData": "customer_name" },
                        { "sTitle": "Payment Type", "mData": "payment_type" },
                        {
                            "sTitle": "Status", "mData": "status", "render":
                                function (mData, type, row, meta) {
                                    if (mData == "Owing") {
                                        return '<span class="badge bg-danger">Owing</span>'
                                    } else if (mData == "Y") {
                                        return '<span class="badge bg-success">No Debt</span>'
                                    }

                                }
                        },
                        {
                            "sTitle": "Action",
                            "mData": "sales_id",
                            "render": function (mData, type, row, meta) {
                                return '<button class="btn btn-sm btn-white text-success me-2 edit" data = ' + mData + '> Edit </button>'
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
        if (event.target.classList.contains("edit")) {
            var sales_id = event.target.getAttribute("data");
            console.log("edit From " + sales_id)
            editProductByID(sales_id)
        }

    })
    

    function editProductByID(sales) {


        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchAllSalesByIdAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {
                sales_id: sales
            },
            success: function (data) {
                // console.log(data)
                for (var i = 0; i < data.length; i++) {

                // console.log(data[i].product_price)

                $('#product_name').val(data[i].product_name)
                    $('#product_price').val(data[i].product_price)
                    $('#product_quantity').val(data[i].litres)
                    $('#total_amount').val(data[i].total_amount);
                    $('#amount_paid').val(data[i].amount_paid)
                    $('#amount_owing').val(data[i].amount_owing)
                    $('#customer_name').val(data[i].customer_name)
                // initMap()
                $('#sizedModalSm').modal('show');
                }

            },
            error: function (xhr, status, errorThrown) {
                sweet('error', 'Network error', 'Check network and try again')

            }
        });
      
    }

    // function UpdateSalesById(sales) {
    //     Swal.fire({
    //         title: 'Are you sure?',
    //         text: "You won't be able to revert this!",
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Yes!'
    //     }).then((result) => {
    //         if (result.value) {
    //             $.ajax({
    //                 url: 'http://localhost/chimerk_v2/inc/services/UpdateSalesByIdAjax.php',
    //                 method: 'POST',
    //                 data: { sales_id: sales },
    //                 success: function (response) {
    //                     fetchAllDebts()
    //                     // console.log(response)
    //                     Swal.fire(
    //                         'Paid!',
    //                         'Debt Cleared Successfully.',
    //                         'success'
    //                     )


    //                 }
    //             });

    //         }
    //     });


    // }

    $('#update_sales').on('click', function (e) {
        e.preventDefault()

        var product_name = $('#product_name').val()
        var product_price = $('#product_price').val()
        var product_quantity = $('#product_quantity').val()
        var total_amount = $('#total_amount').val()
        var amount_paid = $('#amount_paid').val()
        var amount_owing = $('#amount_owing').val()
        var customer_name = $('#customer_name').val()
        if (product_name == '' || product_price == '' || product_quantity == '' || total_amount == '' || amount_paid == '' || amount_owing == '' || customer_name == '') {
            sweet('question', 'Empty fields', 'Empty fields detected, please try again')
        } else {
            UpdateSalesById(product_name, product_price, product_quantity, total_amount, amount_paid, amount_owing, customer_name)
        }

    })


    // editProductByID(product)
    function UpdateSalesById(product_name, product_price, product_quantity, total_amount, amount_paid, amount_owing, customer_name) {


        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/UpdateOwingSalesAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {
                product_name: product_name,
                product_price: product_price,
                product_quantity: product_quantity,
                total_amount: total_amount,
                amount_paid: amount_paid,
                amount_owing: amount_owing,
                customer_name: customer_name
            },
            success: function (data) {
                console.log(data)
                $('#update_sales').text('Update Sales');
                $('#update_sales').attr('disabled', false);
                if (data.message = 'success') {
                    sweet('success', 'Congrats', 'Product Updated successfully!')
                    $('#product_name_update').val('')
                    $('#sales_point_update').val('')
                    $('#product_quantity_update').val('')
                    $('#empty_create_update').val('')
                    $('#product_category_update').val('')
                    $('#product_price_update').val('')
                    $('#product_description_update').val('')
                    // initMap()
                    $('#sizedModalSm').modal('hide');
                    fetchAllDebts()

                } else {
                    sweet('error', 'Oops', 'There was an error, please try again')
                }

            },
            error: function (xhr, status, errorThrown) {
                sweet('error', 'Network error', 'Check network and try again')

            }
        });

    }






})