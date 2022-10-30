
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
            url: 'http://donchimerk.org/inc/services/FetchDebtsAjax.php',
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
                                return '<button class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1 paid" data = ' + mData + '></i> Paid</button>'
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
        if (event.target.classList.contains("paid")) {
            var sales_id = event.target.getAttribute("data");
            console.log("Paid From " + sales_id)
            UpdateSalesById(sales_id)
        }

    })

    function UpdateSalesById(sales) {
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
                    url: 'http://donchimerk.org/inc/services/UpdateSalesByIdAjax.php',
                    method: 'POST',
                    data: { sales_id: sales },
                    success: function (response) {
                        fetchAllDebts()
                        // console.log(response)
                        Swal.fire(
                            'Paid!',
                            'Debt Cleared Successfully.',
                            'success'
                        )
                        

                    }
                });

            }
        });


    }






})