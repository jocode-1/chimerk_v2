$(document).ready(function () {

     // CREATE PRODUCT 

     $('#submit').on('click', function (e) {
        e.preventDefault()
        var fullname = $('#fullname').val()
        var email = $('#email').val()
        // var password = $('#password').val()
        var address = $('#address').val()
        var phone = $('#phone').val()
        var role = $('#role').val()
        if (fullname == '' || email == '' || address == '' || phone == '' ) {
            sweet('question', 'Empty fields', 'Empty fields detected, please try again')
        } else {
            createStaff(fullname, email, address, phone, role);
        }

    })

    function createStaff(fullname, email, address, phone, role) {
        $('#submit').text('Loading .....');
        $('#submit').attr('disabled', true);
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/CreateStaffAjax.php',
            type: 'POST',
            dataType: 'json',
            data: {
                fullname: fullname,
                email: email,
                address: address,
                phone: phone,
                role: role
            },
            success: function (data) {
                console.log(data)
                $('#submit').text('Create Staff');
                $('#submit').attr('disabled', false);
                if (data.message = 'success') {
                    sweet('success', 'Congrats', 'Staff created successfully!')
                    $('#fullname').val('')
                    $('#email').val('')
                    $('#address').val('')
                    $('#phone').val('')
                    
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

    fetchStaff()

    function fetchStaff() {
        $.ajax({
            url: 'http://localhost/chimerk_v2/inc/services/FetchAllStaffAjax.php',
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
                        { "sTitle": "Staff ID", "mData": "staff_id" },
                        { "sTitle": "Fullname", "mData": "fullname" },
                        { "sTitle": "E-mail", "mData": "email" },
                        { "sTitle": "Password", "mData": "password" },
                        { "sTitle": "Address", "mData": "address" },
                        { "sTitle": "Role", "mData": "role" },
                        {
                            "sTitle": "Status", "mData": "active", "render":
                                function (mData, type, row, meta) {
                                    if (mData == "Y") {
                                        return '<span class="badge bg-success">Active</span>'
                                    } else if (mData == "N") {
                                        return '<span class="badge bg-danger">Staff Disabled</span>'
                                    }

                                }
                        },
                        {
                            "sTitle": "Edit",
                            "mData": "staff_id",
                            "render": function (mData, type, row, meta) {
                                return '<button class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1 edit" data = ' + mData + '></i> Edit</button>'
                            }
                        },
                        {
                            "sTitle": "Delete",  
                            "mData": "staff_id", 
                            "render": function (mData, type, row, meta) {
                                return '<button class="btn btn-sm btn-white text-danger me-2 delete"data = ' + mData + ' ><i class="far fa-edit me-1 " ></i> Delete</button>'
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
            var staff_id = event.target.getAttribute("data");
            console.log("View From " + staff_id)
            DeleteProductByID(staff_id)
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
                    url: 'http://localhost/chimerk_v2/inc/services/disableStaffAjax.php',
                    method: 'POST',
                    data: { staff_id: product },
                    success: function (response) {
                        fetchStaff()
                        console.log(response)
                        Swal.fire(
                            'Disabled!',
                            'Staff Disabled Successfully.',
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
            url: 'http://localhost/chimerk_v2/inc/services/FetchCategoryAjax.php',
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
