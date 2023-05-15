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
            {{-- ข้อมูลทั่วไป --}}
            <div class="row">
                <div class="card">
                    <div class="card-header d-flex align-items-start justify-content-between">
                        <h5>ผลการประเมินแบบคัดกรอง</h5>
                        {{-- <button type="submit" class="btn btn-outline-primary">ประเมินแบบคัดกรอง</button> --}}
                    </div>
                    <div class="card-body">
                      {{$data['esi']}}
                    </div>
                </div>
            </div>
            </form>
        </div>
    @endsection
