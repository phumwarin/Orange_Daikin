<style>
    .active .menu-link i {
        color: #ffffff !important;
        /* เปลี่ยนสีของไอคอนใน <li> ที่มีคลาส active */
    }
</style>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme pt-2">
    <div class="app-brand demo" style="height: 66px;">
        <a href="index.html" class="app-brand-link d-block text-center w-100">
            <img src="assets/img/illustrations/Daikin-Logo.png" alt="" class="mw-100" height="20%">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle text-large ms-auto" style="color: white;">
            <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
        </a>
    </div>

    {{-- <div class="menu-inner-shadow"></div> --}}

    <ul class="menu-inner py-3">

        <li class="menu-item">
            <a href="/admin/job" class="menu-link">
                <i class="menu-icon tf-icons ti ti-copy"></i>
                <div data-i18n="Job">Job</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/admin/lab-availability" class="menu-link">
                <i class="menu-icon tf-icons ti ti-copy"></i>
                <div data-i18n="Lab Availability">Lab Availability</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/admin/iso-documents" class="menu-link">
                <i class="menu-icon tf-icons ti ti-copy"></i>
                <div data-i18n="ISO Documents">ISO Documents</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/admin/backup-file" class="menu-link">
                <i class="menu-icon" data-feather="check-circle"></i>
                <div data-i18n="Backup file">Backup file</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/admin/project-status-report" class="menu-link">
                <i class="menu-icon fas fa-table-cells"></i>
                <div data-i18n="Project status Report">Project status Report</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/admin/project-visualization" class="menu-link">
                <i class="menu-icon tf-icons ti ti-pencil-minus"></i>
                <div data-i18n="Project Visualization">Project Visualization</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="/admin/test-equipment" class="menu-link">
                <i class="menu-icon" data-feather="align-left"></i>
                <div data-i18n="Test Equipment">Test Equipment</div>
            </a>
        </li>

        <!-- ทดสอบ -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-adjustments-horizontal"></i>
                <div data-i18n="ทดสอบ">ทดสอบ</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="/admin/order" class="menu-link">
                        <div data-i18n="ทดสอบ1">ทดสอบ1</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/sales_report" class="menu-link">
                        <div data-i18n="ทดสอบ2">ทดสอบ2</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="/admin/card_stock_report" class="menu-link">
                        <div data-i18n="ทดสอบ3">ทดสอบ3</div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</aside>
<script src="https://unpkg.com/feather-icons"></script>
<script>
    setTimeout(() => {
        document.querySelectorAll('.menu-item').forEach(item => {
            const hasActiveChild = item.querySelector('.menu-sub .menu-item.active');
            if (hasActiveChild) {
                item.classList.add('open');
            }
        });
    }, 500);
    document.addEventListener("DOMContentLoaded", function() {
        var links = document.querySelectorAll("ul li a");
        var currentUrl = window.location.pathname;

        links.forEach(function(link) {
            if (link.getAttribute("href") === currentUrl) {
                link.parentElement.classList.add("active");
            }
        });
    });
    if (typeof feather !== 'undefined') {
        feather.replace();
    }
</script>
