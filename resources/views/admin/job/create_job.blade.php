<!doctype html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-template="vertical-menu-template">

<head>
    @include('admin/layout/inc_header')
    <title>Job | Daikin</title>
</head>

<style>
    .container-create-job {
        padding: 16px 24px;
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header d-flex justify-content-between container-create-job">
                                        <h6 class="mb-0">Create a new job</h6> <!-- 🔹 Removed .job-text class -->
                                        <div>
                                            <button class="btn btn-primary" type="button">
                                                <span><i class="fa-regular fa-floppy-disk me-2"></i>Save</span>
                                            </button>
                                            <a href="{{ url('admin/job') }}" class="btn btn-secondary ms-2">
                                                <i class="ti ti-arrow-left me-1"></i>Back
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Form Sections -->
                                @include('admin.job.section.test_information')
                                @include('admin.job.section.add_indoor')
                                @include('admin.job.section.requirement_condition')
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    @include('admin/layout/inc_footer')
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- 🔹 Removed .drag-target as it's likely unused -->
    </div>
    <!-- / Layout wrapper -->

    @include('admin/layout/inc_js')
</body>

</html>