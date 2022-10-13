
$(document).ready(function () {

    var agent_id = document.getElementById("staff_id").innerHTML;
    var agent_name = document.getElementById("fullname").innerHTML;
    // var sales_point = document.getElementById("sales_id").innerHTML;
    // var sales_point = $("#sales_id").attr("data-id");

    // fetchProduct()



    $('#create_sales').on('click', function (e) {
        e.preventDefault()

        var product_id = $('#product_name option:selected').val()
        var product_name = $('#product_name option:selected').text()
        var product_price = $('#product_price').val()
        var product_quantity = $('#product_quantity').val()
        var total_amount = $('#total_amount').val()
        var amount_paid = $('#amount_paid').val()
        var amount_owing = $('#amount_owing').val()
        var customer_name = $('#customer_name').val()
        var payment_type = $('#payment_type').val()
        if (product_name == '' || product_price == '' || product_quantity == '' || amount_paid == '' || customer_name == '') {
            sweet('question', 'Empty fields', 'Empty fields detected, please try again')
        } else {
            createSales(agent_id, agent_name, product_name, product_price, product_quantity, total_amount, amount_paid, 
                amount_owing, customer_name, payment_type, product_id);
                // 
        }

    })




    function createSales(agent_id, agent_name,  product_name, product_price, product_quantity, total_amount, amount_paid, 
        amount_owing, customer_name, payment_type, product_id) {
        $('#create_sales').text('Loading .....');
        $('#create_sales').attr('disabled', true);
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/CreateSalesAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {
                agent_id: agent_id,
                fullname: agent_name,
                product_name: product_name,
                product_price: product_price,
                product_quantity: product_quantity,
                total_amount: total_amount,
                amount_paid: amount_paid,
                amount_owing: amount_owing,
                customer_name: customer_name,
                payment_type: payment_type,
                product_id: product_id
            },
            success: function (data) {
                console.log(data)
                $('#create_sales').text('Create');
                $('#create_sales').attr('disabled', false);
                if (data.message = 'success') {
                    sweet('success', 'Congrats', 'Sales Recorded Successfully!')
                    $('#product_name').val('')
                    $('#product_price').val('')
                    $('#product_quantity').val('')
                    $('#total_amount').val('')
                    $('#amount_paid').val('')
                    $('#amount_credit').val('')
                    $('#empty_create').val('')
                    $('#customer_name').val('')
                    $('#payment_type').val('')
                } else {
                    sweet('error', 'Oops', 'There was an error, please try again')
                }

            },
            error: function (xhr, status, errorThrown) {
                sweet('error', 'Network error', 'Check network and try again')
                console.log("error status: " + xhr.status);
                console.log("errorThrown: " + errorThrown);
                $('#create_sales').text('Create Sales');
                $('#create_sales').attr('disabled', false);
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



    $(function() {
        $("#product_price, #product_quantity").on("keydown keyup click focus", qty);

        function qty() {

            var sum = (Number($("#product_price").val()) * Number($("#product_quantity").val()));

            $('#total_amount').val(sum);
        }

    });

    $(function() {
        $("#amount_paid, #total_amount").on("keydown keyup click focus", qty);

        function qty() {

            var sum = (Number($("#total_amount").val()) - Number($("#amount_paid").val()));

            $('#amount_owing').val(sum);
        }

    });

    fetchProduct()
    function fetchProduct() {

        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchProductAjax.php',
            type: 'POST',
            dataType: 'json',
            // data: {product_id: product},
            success: function (data) {
                console.log(data)
                let name = $('#product_name');
                name.empty();
                name.append('<option selected="true" disabled>--Select Product--</option>');
                name.prop('selectedIndex', 0);
                for (var i = 0; i < data.length; i++) {
                    name.append($('<option></option>').attr('value', data[i].product_id).text(data[i].product_name));

                }

            },
            error: function (xhr, status, errorThrown) {
                sweet('error', 'Network error', 'Check network and try again')

            }
        });
    }





    fetchSalesById(agent_id) 
    

    function fetchSalesById(agent_id) 
    {
        console.log(agent_id)

        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchSalesByIdAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {staff_id: agent_id},

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
                            "sTitle": "Edit",
                            "mData": "category_id",
                            "render": function (mData, type, row, meta) {
                                return '<button class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1 edit" data = ' + mData + '></i> Edit</button>'
                            }
                        },
                        {
                            "sTitle": "Delete",
                            "mData": "category_id",
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



    


})