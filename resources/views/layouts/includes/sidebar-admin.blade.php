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
                <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ url('admin/') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                <div class="sb-sidenav-menu-heading">Main</div>

                {{-- Doctors --}}
                <a class="nav-link collapsed {{ Request::is('admin/doctors') || Request::is('admin/add-doctors') || Request::is('admin/doctors/*') ? 'collapse active' : 'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapseDoctors" aria-expanded="false"
                    aria-controls="collapseDoctors">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-doctor"></i></div>
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

                {{-- Appointment --}}
                <a class="nav-link collapsed {{ Request::is('admin/appointments2') || Request::is('admin/add-appointments2') || Request::is('admin/appointments2/*') ? 'collapse active' : 'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapseAppointment" aria-expanded="false"
                    aria-controls="collapseAppointment">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    Appointment
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/appointments2') || Request::is('admin/add-appointments2') || Request::is('admin/appointments2/*') ? 'show' : '' }}"
                    id="collapseAppointment" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-appointments2') ? 'active' : '' }}"
                            href="{{ route('appointmentRevamp.create') }}">Add Appointment</a>
                        <a class="nav-link {{ Request::is('admin/appointments2') || Request::is('admin/appointments2/*') ? 'active' : '' }}"
                            href="{{ route('appointmentRevamp.index') }}">List of Appointment</a>
                    </nav>
                </div>

                <div class="sb-sidenav-menu-heading">Record</div>

                {{-- Patients --}}
                <a class="nav-link collapsed {{ Request::is('admin/patients2') || Request::is('admin/add-patients2') || Request::is('admin/patients2/*') ? 'collapse active' : 'collapsed' }}"
                    href="#" data-bs-toggle="collapse" data-bs-target="#collapsePatients2" aria-expanded="false"
                    aria-controls="collapsePatients2">
                    <div class="sb-nav-link-icon">
                        <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    Patients
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ Request::is('admin/patients2') || Request::is('admin/add-patients2') || Request::is('admin/patients2/*') ? 'show' : '' }}"
                    id="collapsePatients2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Request::is('admin/add-patients2') ? 'active' : '' }}"
                            href="{{ route('patientRevamp.create') }}">Add Patient</a>
                        <a class="nav-link {{ Request::is('admin/patients2') || Request::is('admin/patients2/*') ? 'active' : '' }}"
                            href="{{ route('patientRevamp.index') }}">View Patient</a>
                        <a class="nav-link {{ Request::is('admin/patients2') || Request::is('admin/patients2/*') ? 'active' : '' }}"
                            href="{{ route('patientRevamp.history') }}">Patient History Update Via QRCODE DECODER</a>
                        <a class="nav-link {{ Request::is('admin/patients2') || Request::is('admin/patients2/*') ? 'active' : '' }}"
                            href="#a">Patient History Update Via QRCODE SCANNER</a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>
<script>
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
