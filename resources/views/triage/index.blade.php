@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic - UI elements')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/masonry/masonry.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">แบบคัดกรองผู้ป่วยห้องฉุกเฉิน /</span> โรงพยาบาลกำแพงเพชร</h4>

<div class="col-lg-12 col-md-12 order-1">
    <div class="row">
        <div class="col-lg-4 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                        </div>
                    </div>
                    <span>Non Urgency</span>
                    <h4 class="card-title text-nowrap mb-1"><small class="text-secondary fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 1</small></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                        </div>
                    </div>
                    <span>Semi Urgency</span>
                    <h4 class="card-title text-nowrap mb-1"><small class="text-success fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 2</small></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                        </div>
                    </div>
                    <span>Urgency</span>
                    <h4 class="card-title text-nowrap mb-1" style="color: $yellow-500;"><small class="fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 3</small></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                        </div>
                    </div>
                    <span>Emergency</span>
                    <h4 class="card-title text-nowrap mb-1"><small class="text-warning fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 4</small></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{asset('assets/img/icons/unicons/wallet-info.png')}}" alt="Credit Card" class="rounded">
                        </div>
                    </div>
                    <span>Resuscitation</span>
                    <h4 class="card-title text-nowrap mb-1"><small class="text-danger fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 5</small></h4>
                </div>
            </div>
        </div>
    </div>

    {{-- ข้อมูลทั่วไป --}}
    <div class="col-12">
        <div class="card mb-4">
            <h5 class="card-header">แบบคัดกรองผู้ป่วยห้องฉุกเฉิน</h5>
            <div class="card-body">
                <p class="card-text">
                    กดเลือกหัวข้อแบบคัดกรอง
                </p>
                <p class="demo-inline-spacing">
                    <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                        ข้อมูลทั่วไป
                    </button>
                    <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        Vital Sign
                    </button>
                </p>
                <div class="collapse" id="collapseExample1">
                    {{-- ข้อมูลทั่วไป --}}
                    @include('triage.general')
                </div>
                <div class="collapse" id="collapseExample2">
                    {{-- ข้อมูลทั่วไป --}}
                    @include('triage.vsign')
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
