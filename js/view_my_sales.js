
$(document).ready(function () {

    var agent_id = document.getElementById("staff_id").innerHTML;
    

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
                        { "sTitle": "Litres", "mData": "product_quantity" },
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



})