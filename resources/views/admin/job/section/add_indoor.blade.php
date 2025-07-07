<!doctype html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
    @include('admin/layout/inc_header')
    <title>Job | Daikin</title>
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

    .form-label {
        font-weight: 610;
    }

    .modal-content {
        border-radius: 20px !important;
    }
</style>

<body>
    <div class="d-flex justify-content-end mb-4">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addIndoor">
            <i class="ti ti-plus me-1"></i> Indoor Add More
        </button>
    </div>

    {{-- Table --}}
    <div class="card mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered custom-table">
                    <thead class="table-light">
                        <tr class="text-center align-middle">
                            <th>Item</th>
                            <th>Model(s) tested</th>
                            <th>Product type</th>
                            <th>Rated Voltage (V) and Frequency (Hz)</th>
                            <th>Current Rating (A)</th>
                            <th>Adding Series Model</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="10" class="text-center">No data available</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addIndoor" tabindex="-1" aria-labelledby="addIndoorLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header border-bottom-0 pb-0">
                    <div class="d-flex justify-content-between align-items-start w-100">
                        <div>
                            <h5 class="modal-title fw-bold mb-4 mt-2" id="addIndoorLabel">INDOOR UNIT</h5>
                        </div>
                        <button type="button" class="position-absolute top-0 end-0 mt-3 me-3 border-0 bg-transparent"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x fs-4"></i>
                        </button>
                    </div>
                </div>

                <div class="modal-body py-0">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Model(s) tested: Indoor</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Product type</label>
                                <input type="text" class="form-control"
                                    placeholder="Example: Wallmount, Cassette, Ceiling, Duct">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rated Voltage (V) and Frequency (Hz)</label>
                            <input type="text" class="form-control" placeholder="Example: 1P 220-240V/50Hz">
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Current Rating (A)</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Uses (Kg)</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">More Information</label>
                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                    </form>
                </div>

                <div class="modal-footer justify-content-center border-top-0">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Add</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
