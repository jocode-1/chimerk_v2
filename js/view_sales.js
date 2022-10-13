
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
                        { "sTitle": "Agent ID", "mData": "agent_id" },
                        { "sTitle": "Agent Name", "mData": "fullname" },
                        { "sTitle": "Agent Name", "mData": "product_name" },
                        { "sTitle": "Agent Name", "mData": "product_price" },
                        { "sTitle": "Agent Name", "mData": "quantity" },
                        { "sTitle": "Agent Name", "mData": "total_amount" },
                        { "sTitle": "Agent Name", "mData": "amount_paid" },
                        { "sTitle": "Agent Name", "mData": "customer_name" },
                        { "sTitle": "Agent Name", "mData": "payment_type" },
                        {
                            "sTitle": "Status", "mData": "status", "render":
                                function (mData, type, row, meta) {
                                    if (mData == "Owing") {
                                        return '<span class="badge bg-success">Owing</span>'
                                    } else if (mData == "Y") {
                                        return '<span class="badge bg-danger">No Debt</span>'
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