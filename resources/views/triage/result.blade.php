@extends('layouts/contentNavbarLayout')

@section('title', 'KPH Triage Model')

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">แบบคัดกรองผู้ป่วยห้องฉุกเฉิน /</span> โรงพยาบาลกำแพงเพชร
</h4>

{{-- <div class="col-lg-12 col-md-12 order-1"> --}}
<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-start justify-content-between">
            <h5>ผลการประเมินแบบคัดกรอง</h5>
            <a href="{{ route('triage-index') }}" class="btn btn-outline-primary">กลับสู่หน้าประเมิน</a>
            {{-- <button type="submit" class="btn btn-outline-primary">ประเมินแบบคัดกรอง</button> --}}
        </div>
        <div class="card-body">
            @if($data['esi']==1)
            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card text-white" style="background-color: rgb(244, 10, 10);border: 5px solid rgb(244, 10, 10);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                            </div>
                        </div>
                        <span>Resuscitation</span>
                        <span>
                            <h4 class="card-title text-nowrap mb-1"><small class="text-white fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 1</small></h4>
                        </span>
                    </div>
                </div>
            </div>
            @elseif ($data['esi']==2)
            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card text-white" style="background-color: rgb(220, 147, 52);border: 5px solid rgb(220, 147, 52);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                            </div>
                        </div>
                        <span>Emergency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-white fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 2</small></h4>
                    </div>
                </div>
            </div>
            @elseif ($data['esi']==3)
            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card text-black" style="background-color: rgb(255, 248, 42);border: 5px solid rgb(255, 248, 42);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                            </div>
                        </div>
                        <span>Urgency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-black fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 3</small></h4>
                    </div>
                </div>
            </div>
            @elseif ($data['esi']==4)
            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card text-white" style="background-color: rgb(55, 203, 32);border: 5px solid rgb(55, 203, 32);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                            </div>
                        </div>
                        <span>Semi Urgency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-white fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 4</small></h4>
                    </div>
                </div>
            </div>
            @else
            <div class="col-lg-12 col-md-12 col-6 mb-4">
                <div class="card text-black" style="background-color: rgb(255, 255, 255);border: 5px solid rgb(255, 255, 255);">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="Credit Card" class="rounded">
                            </div>
                        </div>
                        <span>Non Urgency</span>
                        <h4 class="card-title text-nowrap mb-1"><small class="text-secondary fw-semibold"><i class='bx bx-up-arrow-alt'></i> คัดแยกระดับ 5</small></h4>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 order-0 mb-4">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Vital Sign</h5> <small class="text-muted float-end">รายละเอียด Vital Sign</small>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">Body Temperature</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name='v_bt' value="{{ $data['v_bt'] }}" type="text" class="form-control" placeholder="กรอกอุณหภูมิร่างกาย" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_bt'] }}</span>
                            <span class="input-group-text" id="basic-addon33">องศาเซลเซียส</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">Blood Pressure</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name='v_bp1' value="{{ $data['v_bp1'] }}" type="text" class="form-control" placeholder="กรอกความดันโลหิต1" readonly /> --}}
                            {{-- <span class="input-group-text" id="basic-addon33"></span> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_bp1'] }}/{{ $data['v_bp2'] }}</span>
                            {{-- <input name='v_bp2' value="{{ $data['v_bp2'] }}" type="text" class="form-control" placeholder="กรอกความดันโลหิต2" readonly /> --}}
                            {{-- <span class="input-group-text" id="basic-addon33"></span> --}}
                            <span class="input-group-text" id="basic-addon33">mmHg</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">Oxygen Sat</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name='v_oxy' value="{{ $data['v_oxy'] }}" type="text" class="form-control" placeholder="กรอก Oxygen Sat" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_oxy'] }}</span>
                            <span class="input-group-text" id="basic-addon33">%(RA)</span>

                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">DTX</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name='v_dtx' value="{{ $data['v_dtx'] }}" type="text" class="form-control" placeholder="กรอก DTX" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_dtx'] }}</span>
                            <span class="input-group-text" id="basic-addon33">mg%</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-email">Age</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name='v_dtx' value="{{ $data['v_age'] }}" type="text" class="form-control" placeholder="กรอก DTX" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_age'] }}</span>
                            <span class="input-group-text" id="basic-addon33">ปี</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">PR</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name="v_PR" value="{{ $data['v_PR'] }}" type="text" class="form-control" placeholder="กรอก PR" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_PR'] }}</span>
                            <span class="input-group-text" id="basic-addon33">/min</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">RR</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name="v_RR" value="{{ $data['v_RR'] }}" type="text" class="form-control" placeholder="กรอก RR" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_RR'] }}</span>
                            <span class="input-group-text" id="basic-addon33">/min</span>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-4 col-form-label" for="basic-default-name">Pain Score</label>
                    <div class="col-sm-8">
                        <div class="input-group input-group-merge">
                            {{-- <input name="v_painscore" value="{{ $data['v_painscore'] }}" type="text" class="form-control" placeholder="Pain Score" readonly /> --}}
                            <span class="input-group-text" id="basic-addon33">{{ $data['v_painscore'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 order-1 mb-4">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">แนวโน้มความต้องการทำกิจกรรม</h5> <small class="text-muted float-end">รายละเอียด แนวโน้มความต้องการทำกิจกรรม</small>
            </div>
            <div class="card-body">
                <div class="row">
                    <h5 class="card-header">ระดับ 1 *Resuscitate*</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        @php $count = 1 @endphp
                        @foreach ($data as $key => $value)
                        @if(str_contains($key, 'r1'))
                        {{ $count }}.{{ $value }} <br>
                        @php $count ++; @endphp
                        @endif
                        @endforeach

                        @if($count==1)
                            - ไม่มี -
                        @endif
                    </div>
                </div>

                <div class="row">
                    <h5 class="card-header">ระดับ 2 *Emergent*</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        @php $count = 1 @endphp
                        @foreach ($data as $key => $value)
                        @if(str_contains($key, 'r2'))
                        {{ $count }}.{{ $value }} <br>
                        @php $count ++; @endphp
                        @endif
                        @endforeach

                        @if($count==1)
                            - ไม่มี -
                        @endif
                    </div>
                </div>

                <div class="row">
                    <h5 class="card-header">ระดับ 3 *กิจกรรม Resource*</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        @php $count = 1 @endphp
                        @foreach ($data as $key => $value)
                        @if(str_contains($key, 'r3'))
                        {{ $count }}.{{ $value }} <br>
                        @php $count ++; @endphp
                        @endif
                        @endforeach

                        @if($count==1)
                            - ไม่มี -
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
