@extends('layouts/contentNavbarLayout')

@section('title', 'KPH Triage Model')

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('content')
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">แบบคัดกรองผู้ป่วยห้องฉุกเฉิน /</span> โรงพยาบาลกำแพงเพชร
    </h4>

    <div class="col-lg-12 col-md-12 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card text-white" style="background-color: rgb(244, 10, 10);border: 5px solid black;">
                    <span class="border border-dark">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                        class="rounded">
                                </div>
                            </div>
                            <span>Resuscitation</span>
                            <span>
                                <h4 class="card-title text-nowrap mb-1"><small class="text-white fw-semibold"><i
                                            class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 1</small></h4>
                            </span>
                        </div>
                    </span>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-4">
                <div class="card text-white" style="background-color: rgb(220, 147, 52);border: 5px solid rgb(220, 147, 52);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded">
                            </div>
                        </div>
                        <span>Emergency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-white fw-semibold"><i
                                    class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 2</small></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card text-black" style="background-color: rgb(255, 248, 42);border: 5px solid rgb(255, 248, 42);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded">
                            </div>
                        </div>
                        <span>Urgency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-black fw-semibold"><i
                                    class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 3</small></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card text-white" style="background-color: rgb(55, 203, 32);border: 5px solid rgb(55, 203, 32);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded">
                            </div>
                        </div>
                        <span>Semi Urgency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-white fw-semibold"><i
                                    class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 4</small></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-6 mb-4">
                <div class="card text-black" style="background-color: rgb(255, 255, 255);border: 5px solid rgb(255, 255, 255);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card"
                                    class="rounded">
                            </div>
                        </div>
                        <span>Non Urgency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-secondary fw-semibold"><i
                                    class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 5</small></h4>
                    </div>
                </div>
            </div>
            {{-- ข้อมูลทั่วไป --}}
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex align-items-start justify-content-between">
                        <h5>แบบคัดกรองผู้ป่วยห้องฉุกเฉิน</h5>
                        <button type="submit" class="btn btn-outline-primary">ประเมินแบบคัดกรอง</button>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            กดเลือกหัวข้อแบบคัดกรอง
                        </p>
                        <p class="demo-inline-spacing">
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                ข้อมูลทั่วไป
                            </button>
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                Vital Sign
                            </button>
                            <button class="btn btn-primary me-1" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                                ประเมินแน้วโน้มความต้องการทำกิจกรรม Resource
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
                        <div class="collapse" id="collapseExample3">
                            {{-- ข้อมูลทั่วไป --}}
                            @include('triage.resource')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
