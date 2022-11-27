<style>
    .container {
        width: 1024px;
        padding: 2em;
    }

    .bold-blue {
        font-weight: bold;
        color: #0277BD;
    }
</style>
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                {{-- <a class="nav-link" href="/admin">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a> --}}
                <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}"
                    href="{{ url('admin/') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Info</div>

                {{-- Doctors --}}
                <a class="nav-link collapsed {{ Request::is('admin/doctors') || Request::is('admin/add-doctors') || Request::is('admin/doctors/*') ? 'collapse active' : 'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapseDoctors" aria-expanded="false"
                    aria-controls="collapseDoctors">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Doctors
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/doctors') || Request::is('admin/add-doctors') || Request::is('admin/doctors/*') ? 'show' : '' }}"
                    id="collapseDoctors" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-doctors') ? 'active' : '' }}"
                            href="{{ route('doctors.create') }}">Add Specialist</a>
                        <a class="nav-link {{ Request::is('admin/doctors') || Request::is('admin/doctors/*') ? 'active' : '' }}"
                            href="{{ route('doctors.index') }}">View Specialist</a>
                    </nav>
                </div>

                {{-- Patients --}}
                <a class="nav-link collapsed {{ Request::is('admin/patients') || Request::is('admin/add-patients') || Request::is('admin/patients/*') ? 'collapse active' : 'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapsePatients" aria-expanded="false"
                    aria-controls="collapsePatients">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Patients
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/patients') || Request::is('admin/add-patients') || Request::is('admin/patients/*') ? 'show' : '' }}"
                    id="collapsePatients" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-patients') ? 'active' : '' }}"
                            href="{{ route('patients.create') }}">Add Patient</a>
                        <a class="nav-link {{ Request::is('admin/patients') || Request::is('admin/patients/*') ? 'active' : '' }}"
                            href="{{ route('patients.index') }}">View Patient</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Appointment Process</div>

                {{-- Appointment Process --}}
                <a class="nav-link collapsed {{ Request::is('admin/appointments') || Request::is('admin/add-appointments') || Request::is('admin/appointments/*') ? 'collapse active' : 'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapseAppointment" aria-expanded="false"
                    aria-controls="collapseAppointment">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Appointment
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/appointments') || Request::is('admin/add-appointments') || Request::is('admin/appointments/*') ? 'show' : '' }}"
                    id="collapseAppointment" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-appointments') ? 'active' : '' }}"
                            href="{{ route('appointments.create') }}">Add Appointment</a>
                        <a class="nav-link {{ Request::is('admin/appointments') || Request::is('admin/appointments/*') ? 'active' : '' }}"
                            href="{{ route('appointments.index') }}">List of Appointment</a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>
<script>
    //exporte les données sélectionnées
    var $table = $('#table');
    $(function() {
        $('#toolbar').find('select').change(function() {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })

    var trBoldBlue = $("table");

    $(trBoldBlue).on("click", "tr", function() {
        $(this).toggleClass("bold-blue");
    });
</script>
