$(document).ready(function () {

    fetchCategory()

    function fetchCategory() {
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchCategoryAjax.php',
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
                        { "sTitle": "Category Name", "mData": "category_name" },
                        {
                            "sTitle": "Status", "mData": "status", "render":
                                function (mData, type, row, meta) {
                                    if (mData == 1) {
                                        return '<span class="badge bg-success">Active</span>'
                                    } else if (mData == 2) {
                                        return '<span class="badge bg-danger">Deactive</span>'
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


    $('#datatables-buttons').on('click', function (event) {
        let e1 = event.target.getAttribute("id");
        if (event.target.classList.contains("delete")) {
            var category_id = event.target.getAttribute("data");
            // console.log("View From " + category_id)
            DeleteCategoryByID(category_id)
        }

    })

    function DeleteCategoryByID(category_id) {
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
                    url: 'http://localhost/chimerk_v2/inc/services/UpdateCategoryByIdAjax.php',
                    method: 'POST',
                    data: { category_id: category_id },
                    success: function (response) {
                        fetchCategory()
                        // console.log(response)
                        Swal.fire(
                            'Deleted!',
                            'Category Was Deleted Successfully.',
                            'success'
                        )
                        

                    }
                });

            }
        });


    }

    // CREATE CATEGORY 

    $('#submit').on('click', function (e) {
        e.preventDefault()
        var category_name = $('#category_name').val()
        var status = $('#status').val()
        if (category_name == '' || status == '' ) {
            sweet('question', 'Empty fields', 'Empty fields detected, please try again')
        } else {
            create_category(category_name, status);
        }

    })

    function create_category(category_name, status) {
        $('#submit').text('Loading .....');
        $('#submit').attr('disabled', true);
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/CreateCategoryAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {
                category_name: category_name,
                status: status
            },
            success: function (data) {
                console.log(data)
                $('#submit').text('Create');
                $('#submit').attr('disabled', false);
                if (data.message = 'success') {
                    sweet('success', 'Congrats', 'Category created successfully!')
                    $('#category_name').val('')
                    $('#status').val('')
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

    function sweet(icon, title, text) {
        Swal.fire({
            icon: icon,
            title: title,
            text: text
        })
    }


})
