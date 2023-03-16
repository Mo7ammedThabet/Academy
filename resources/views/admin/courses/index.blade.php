@extends("admin.layout._main_layout")
@section("page_title",'الدورات التدريبية')

@section("contents")

<div class="card shadow-sm">
    <div class="card-body">
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack mb-5">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="بحث بعنوان البرنامج ">
            </div>
            <!--end::Search-->

            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                <!--begin::Filter-->
                {{-- <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="tooltip" title="Coming Soon">
                    <span class="svg-icon svg-icon-2">...</span>
                    Filter
                </button> --}}
                <!--end::Filter-->

                
            </div>
            <!--end::Toolbar-->

            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-docs-table-toolbar="selected">
                <div class="fw-bolder me-5">
                    <span class="me-2" data-kt-docs-table-select="selected_count"></span> عنصر
                </div>

                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" title="Coming Soon">
                    Selection Action
                </button> --}}
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Wrapper-->

        <table id="kt_datatable_example_1" class="table align-middle table-row-bordered fs-6 gy-5">
            <thead>
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
                    </div>
                </th>
                <th>اسم الدورة</th>
                <th>التصنيف </th>
                <th>اسم المالك</th>
                <th>الحالة </th>
                <th class="text-end min-w-100px">الاجرائات</th>
            </thead>
            
        </table>
        <!--end::Datatable-->
    </div>
</div>
@endsection
@section("js")
<script>

    "use strict";
    
    // Class definition
    var KTDatatablesServerSide = function () {
        // Shared variables
        var table;
        var dt;
        var filterPayment;
    
        // Private functions
        var initDatatable = function () {
            dt = $("#kt_datatable_example_1").DataTable({
                responsive: true,
                searchDelay: 500,
                processing: false,
                serverSide: true,
                "bSort": false,
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json"
                },
                stateSave: false,
                select: {
                    style: 'os',
                    selector: 'td:first-child',
                    className: 'row-selected'
                },
                ajax: {
                url: '{{ route('admin.courses.datatable') }}',
                    
                },
                columns: [
                    { data: 'id',"searchable": false },
                    { data: 'title'},
                    { data: 'category.title'},
                    { data: 'user.name' },
                    { data: 'is_publish'},
                    { data: null,"searchable": false },
                ],
                columnDefs: [
                    {
                        targets: 0,
                        orderable: false,
                        render: function (data) {
                            return `
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="${data}" />
                                </div>`;
                        }
                    },
                   
                    {
                    targets: -1,
                    data: null,
                    orderable: false,
                    className: 'text-end',
                    render: function (data, type, row) {
                        var edit_link = '/goals/'+data.id+'/edit';
                    
                        return `\
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                ...
                              
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="${edit_link}" class="menu-link px-3" data-kt-docs-table-filter="edit_row">
                                        تعديل
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" val_id="${data.id}" class="menu-link px-3" data-kt-docs-table-filter="delete_row">
                                        حذف
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        `;
                    },
                },
                ],
                // Add data-filter attribute
                createdRow: function (row, data, dataIndex) {
                    $(row).find('td:eq(4)').attr('data-filter', data.CreditCardType);
                }
            });
    
            table = dt.$;
    
            // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
            dt.on('draw', function () {
                initToggleToolbar();
                toggleToolbars();
                handleDeleteRows();
                KTMenu.createInstances();
            });
        }
    
        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = function () {
            const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                dt.search(e.target.value).draw();
            });
        }
    
        // Filter Datatable
        var handleFilterDatatable = () => {
            // Select filter options
            filterPayment = document.querySelectorAll('[data-kt-docs-table-filter="payment_type"] [name="payment_type"]');
            const filterButton = document.querySelector('[data-kt-docs-table-filter="filter"]');
    
            // Filter datatable on submit
            if(filterButton){
                filterButton.addEventListener('click', function () {
                // Get filter values
                let paymentValue = '';
    
                // Get payment value
                filterPayment.forEach(r => {
                    if (r.checked) {
                        paymentValue = r.value;
                    }
    
                    // Reset payment value if "All" is selected
                    if (paymentValue === 'all') {
                        paymentValue = '';
                    }
                });
    
                // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()
                dt.search(paymentValue).draw();
            });
            }
           
        }
    
        // Delete customer
        var handleDeleteRows = () => {
            // Select all delete buttons
            const deleteButtons = document.querySelectorAll('[data-kt-docs-table-filter="delete_row"]');
    
            deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Select parent row
                    const parent = e.target.closest('tr');
    
                    // Get customer name
                    const customerName = parent.querySelectorAll('td')[1].innerText;
                    const id = $(this).attr('val_id'); 
                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "هل أنت متأكد من حذف  " + customerName + " ؟",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "نعم , احذف!",
                        cancelButtonText: "لا , الغاء",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            // Simulate delete request -- for demo purpose only
                            jQuery.ajax({
                                type: "DELETE",
                                url: 'externals/'+id,
                                data:{
                                    "_token": "{{ csrf_token() }}",
                                },
                                dataType: 'json',
                                success :function (data) {
                                    Swal.fire({
                                    text: "تم حذف  " + customerName + "!.",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "حسنًا ، موافق!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                }).then(function () {
                                    // delete row data from server and re-draw datatable
                                    dt.draw();
                                });
                                }
                            });
                               
                     
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: customerName + " تم الغاء عملية الحذف.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "حسنًا ، موافق!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                })
            });
        }
    
        // Reset Filter
        var handleResetForm = () => {
            // Select reset button
            const resetButton = document.querySelector('[data-kt-docs-table-filter="reset"]');
    
            // Reset datatable
            if(resetButton){
                resetButton.addEventListener('click', function () {
                // Reset payment type
                filterPayment[0].checked = true;
    
                // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
                dt.search('').draw();
            });
            }
           
        }
    
        // Init toggle toolbar
        var initToggleToolbar = function () {
            // Toggle selected action toolbar
            // Select all checkboxes
            const container = document.querySelector('#kt_datatable_example_1');
            const checkboxes = container.querySelectorAll('[type="checkbox"]');
    
            // Select elements
            const deleteSelected = document.querySelector('[data-kt-docs-table-select="delete_selected"]');
    
            // Toggle delete selected toolbar
            checkboxes.forEach(c => {
                // Checkbox on click event
                c.addEventListener('click', function () {
                    setTimeout(function () {
                        toggleToolbars();
                    }, 50);
                });
            });
    
            // Deleted selected rows
            if(deleteSelected){
                deleteSelected.addEventListener('click', function () {
                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete selected customers?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    showLoaderOnConfirm: true,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    },
                }).then(function (result) {
                    if (result.value) {
                        // Simulate delete request -- for demo purpose only
                        Swal.fire({
                            text: "Deleting selected customers",
                            icon: "info",
                            buttonsStyling: false,
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            Swal.fire({
                                text: "You have deleted all selected customers!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // delete row data from server and re-draw datatable
                                dt.draw();
                            });
    
                            // Remove header checked box
                            const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0];
                            headerCheckbox.checked = false;
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Selected customers was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            });
            }
           
        }
    
        // Toggle toolbars
        var toggleToolbars = function () {
            // Define variables
            const container = document.querySelector('#kt_datatable_example_1');
            const toolbarBase = document.querySelector('[data-kt-docs-table-toolbar="base"]');
            const toolbarSelected = document.querySelector('[data-kt-docs-table-toolbar="selected"]');
            const selectedCount = document.querySelector('[data-kt-docs-table-select="selected_count"]');
    
            // Select refreshed checkbox DOM elements
            const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');
    
            // Detect checkboxes state & count
            let checkedState = false;
            let count = 0;
    
            // Count checked boxes
            allCheckboxes.forEach(c => {
                if (c.checked) {
                    checkedState = true;
                    count++;
                }
            });
    
            // Toggle toolbars
            if (checkedState) {
                selectedCount.innerHTML = count;
                toolbarBase.classList.add('d-none');
                toolbarSelected.classList.remove('d-none');
            } else {
                toolbarBase.classList.remove('d-none');
                toolbarSelected.classList.add('d-none');
            }
        }
    
        // Public methods
        return {
            init: function () {
                initDatatable();
                handleSearchDatatable();
                initToggleToolbar();
                handleFilterDatatable();
                handleDeleteRows();
                handleResetForm();
            }
        }
    }();
    
    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTDatatablesServerSide.init();
    });
    
    
    
    </script>

@endsection