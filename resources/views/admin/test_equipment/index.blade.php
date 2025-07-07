<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    @include('admin/layout/inc_header')
    <title>Test Equipment | Daikin</title>
</head>
<style>
    .table th {
        text-transform: none;
        font-size: 13px;
        color: #fff !important;
        background-color: #0096e0;
    }

    .table td {
        padding-top: 14px;
        padding-bottom: 14px;
    }

    .custom-table {
        border-collapse: collapse;
        border: 1px solid #dee2e6;
    }

    .custom-table th,
    .custom-table td {
        border-left: none;
        border-right: none;
        border-top: 1px solid #dee2e6;
        border-bottom: 1px solid #dee2e6;
    }
    .custom-table tr {
        border-left: 1px solid #dee2e6;
        border-right: 1px solid #dee2e6;
    }
    .modalHeadDecor .modal-header {
        padding: 0;
    }

    .modalHeadDecor .modal-title {
        padding: 1.25rem 1.5rem 1.25rem;
        color: white;
        background-color: #54BAB9;
        position: relative;
    }

    .modalHeadDecor .modal-title::after {
        position: absolute;
        top: 0;
        right: -65px;
        content: '';
        width: 0;
        height: 0;
        border-top: 65px solid #54BAB9;
        border-right: 65px solid transparent;
    }

    .container-create-job {
        padding: 16px 24px;
    }

    .job-text {
        align-self: center;
    }
</style>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('admin/layout/inc_sidemenu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('admin/layout/inc_topmenu')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row ">
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between container-create-job">
                                        <h6 class="mb-0 job-text">Test Equipment</h6>
                                        <button class="btn btn-primary buttons-collection waves-effect waves-light"
                                            tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                            aria-haspopup="dialog" aria-expanded="false" data-bs-toggle="modal"
                                            data-bs-target="#addserviceModal">
                                            <span><i class="ti ti-plus me-1"></i>Create a new job</span>
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <h6 class="mb-3">All Project under testing</h6>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">

                                            <!-- Datepicker -->
                                            <div class="col-md-3 mb-2">
                                                <label class="form-label">Date</label>
                                                <input type="date" class="form-control" placeholder="DD/MM/YY">
                                            </div>

                                            <!-- Month List -->
                                            <div class="col-md-3 mb-2">
                                                <label class="form-label">Month</label>
                                                <select class="form-select">
                                                    <option value="">Select Month</option>
                                                    @foreach ([
                                                        '01' => 'January',
                                                        '02' => 'February',
                                                        '03' => 'March',
                                                        '04' => 'April',
                                                        '05' => 'May',
                                                        '06' => 'June',
                                                        '07' => 'July',
                                                        '08' => 'August',
                                                        '09' => 'September',
                                                        '10' => 'October',
                                                        '11' => 'November',
                                                        '12' => 'December',
                                                    ] as $key => $month)
                                                        <option value="{{ $key }}">{{ $month }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <!-- Year List -->
                                            <div class="col-md-3 mb-2">
                                                <label class="form-label">Year</label>
                                                <select class="form-select">
                                                    <option value="">Select Year</option>
                                                    @for ($year = date('Y'); $year >= 2000; $year--)
                                                        <option value="{{ $year }}">{{ $year }}</option>
                                                    @endfor
                                                </select>
                                            </div>

                                            <!-- Search Button -->
                                            <div class="col-md-3 d-flex align-items-end mb-2">
                                                <button type="button" class="btn btn-primary w-100">
                                                    <i class="ti ti-search me-1"></i> Search
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin/layout/inc_footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!--add service  Modal -->
    <div class="modal fade modalHeadDecor" id="addserviceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title" id="exampleModalLabel1">&nbsp;เพิ่มพนักงาน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="insert_user" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3 p-4">
                            <div class="col-sm-6">
                                <label for="" class="form-label">สาขา</label><span class="text-danger">
                                    *</span><br>
                                <input class="form-check-input" type="radio" name="ref_branch_id" id="inlineRadio1"
                                    value="1" checked>
                                <label class="form-check-label me-4" for="inlineRadio1">อ่อนนุช</label>
                                <input class="form-check-input" type="radio" name="ref_branch_id" id="inlineRadio2"
                                    value="2">
                                <label class="form-check-label" for="inlineRadio2">ทองหล่อ</label>
                            </div>
                            <div class="col-sm-12"></div>
                            <div class="col-sm-6">
                                <label for="" class="form-label">บัตรพนักงาน</label><span class="text-danger">
                                    *</span>
                                <input name="user_code" type="password" class="form-control"
                                    placeholder="บัตรพนักงาน" id="user_code" required />
                            </div>
                            <div class="col-sm-6">
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="form-label">ชื่อพนักงาน</label><span
                                    class="text-danger"> *</span>
                                <input name="name" type="text" class="form-control" placeholder="ชื่อพนักงาน"
                                    required />
                            </div>
                            <div class="col-sm-6">
                                <label for="" class="form-label">ชื่อเล่น</label><span class="text-danger">
                                    *</span>
                                <input name="nickname" type="text" class="form-control" placeholder="ชื่อเล่น"
                                    required />
                            </div>
                            {{-- <div class="col-sm-6">
                                <label for="" class="form-label">ตำแหน่ง</label>
                                <select name="ref_position_id" id="select2Position1"
                                    class="select2 form-select form-select-lg" data-allow-clear="true">
                                    @foreach ($position as $pos)
                                        <option value="{{ $pos->id }}">{{ $pos->position_name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="col-sm-10 mt-3">
                                <label for="paymentReceipt">รูปภาพ</label>
                                <input type="file" name="image_name" class="form-control mb-2"
                                    id="paymentReceipt">
                                <div class="preview-container">
                                    <img id="preview1" src="" alt="Preview 1"
                                        style="display: none; width:30%">
                                </div>
                            </div>

                            <div class="col-span-12">
                                <div class="col-sm-6 mt-3">
                                    <label for="" class="form-label">ชื่อผู้ใช้</label><span
                                        class="text-danger"> *</span>
                                    <input name="email" type="text" class="form-control"
                                        placeholder="ชื่อผู้ใช้" required />
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <label for="update-profile-form-2" class="form-label">รหัสผ่าน</label><span
                                        class="text-danger"> *</span>
                                    <input name="password" id="password" type="password" class="form-control"
                                        placeholder="รหัสผ่าน">
                                </div>
                                <div class="col-sm-6 mt-3">
                                    <label for="update-profile-form-3" class="form-label">ยืนยัน รหัสผ่าน</label><span
                                        class="text-danger"> *</span>
                                    <input id="confirm_password" type="password" class="form-control"
                                        placeholder="ยืนยัน รหัสผ่าน">
                                </div>
                            </div>
                            <script>
                                //// ทำ input เงินเดือน เริ่ม
                                function formatSalary() {
                                    const input = document.getElementById('salary');
                                    let value = input.value.replace(/,/g, ''); // ลบเครื่องหมายจุลภาค
                                    if (!isNaN(value) && value !== '') {
                                        input.value = Number(value).toLocaleString(); // แปลงเป็นรูปแบบ number_format
                                    } else {
                                        input.value = ''; // ถ้าไม่ใช่ตัวเลขให้ลบค่าที่ป้อน
                                    }
                                }
                                //// ทำ input เงินเดือน จบ

                                //// ทำ เช็ค Password เริ่ม
                                var password = document.getElementById("password"),
                                    confirm_password = document.getElementById("confirm_password");

                                function validatePassword() {
                                    if (password.value != confirm_password.value) {
                                        confirm_password.setCustomValidity("Passwords Don't Match");
                                    } else {
                                        confirm_password.setCustomValidity('');
                                    }
                                }

                                password.onchange = validatePassword;
                                confirm_password.onkeyup = validatePassword;
                                //// ทำ เช็ค Password จบ
                                function handleFileInput(fileInputId, previewId) {
                                    const fileInput = document.getElementById(fileInputId);
                                    const previewImage = document.getElementById(previewId);

                                    fileInput.addEventListener('change', function() {
                                        const file = fileInput.files[0];

                                        if (file) {
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                previewImage.src = e.target.result;
                                                previewImage.style.display = 'block'; // แสดงภาพพรีวิว
                                            };

                                            reader.readAsDataURL(file);
                                        } else {
                                            previewImage.style.display = 'none'; // ซ่อนพรีวิวถ้าไม่ได้เลือกไฟล์
                                        }
                                    });
                                }

                                handleFileInput('paymentReceipt', 'preview1');
                            </script>
                            <div class="col-sm-12">
                                <label for="" class="form-label">หมายเหตุ</label>
                                <textarea name="remark" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer rounded-0 justify-content-center">
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">ปิด</button>
                        <button type="submit" class="btn btn-main">บันทึก</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade modalHeadDecor" id="insurance" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document" id="view">

        </div>
    </div>

    <!--set rent Modal -->

    <!-- / Layout wrapper -->
    @include('admin/layout/inc_js')
    
</body>

</html>