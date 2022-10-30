
$(document).ready(function () {

    fetchSalesById() 
    

    function fetchSalesById() 
    {
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchAllExpensesAjax.php',
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
                    "buttons": ["copy", "pdf", "print", "csv"],
                    "aaData": data,
                    "scrollX": true,
                    "aoColumns": [
                        { "sTitle": "Expenses Name", "mData": "exp_name" },
                        { "sTitle": "Expenses Description", "mData": "exp_description" },
                        { "sTitle": "Expenses Category", "mData": "exp_category" },
                        { "sTitle": "Expenses Amount", "mData": "exp_amount" },
                        { "sTitle": "Money From", "mData": "money_from" },
                        { "sTitle": "Expenses Date", "mData": "exp_date" },
                        
                        {
                            "sTitle": "Delete",
                            "mData": "expenses_id",
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