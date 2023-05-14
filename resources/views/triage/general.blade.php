<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">ข้อมูลทั่วไป</h5> <small class="text-muted float-end">กรอกรายละเอียดข้อมูลทั่วไปให้ครบถ้วน</small>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">วันและเวลาที่มาโรงพยาบาล</label>
                <div class="col-sm-10">
                    <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">เวลาคัดกรอง</label>
                <div class="col-sm-10">
                    <div class="input-group mb-3">
                        <input class="form-control" type="time" value="12:30:00" id="html5-time-input" pattern="[0-9]{2}:[0-9]{2}" />
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-email">มาโดย</label>
                <div class="col-sm-10">
                    <div class="col-md">
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input name="default-radio-1" class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                            </div>
                            <span class="input-group-text">มาเอง</span>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input name="default-radio-1" class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                            </div>
                            <span class="input-group-text">Refer จาก </span>
                            <input type="text" class="form-control" aria-label="Text input with radio button">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-text">
                                <input name="default-radio-1" class="form-check-input mt-0" type="radio" value="" aria-label="Radio button for following text input">
                            </div>
                            <span class="input-group-text">EMS</span>
                        </div>
                    </div>
                    <div class="form-text"> เลือกกรณีใดกรณีหนึ่ง </div>
                </div>

            </div>

            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-phone">มาด้วยอาการ</label>
                <div class="col-sm-10">
                    <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="กรอกอาการสำคัญ" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">U/D</label>
                <div class="col-sm-10">
                    <textarea id="basic-default-message" class="form-control" placeholder="กรอก U/D"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">แพ้ยา</label>
                <div class="col-sm-10">
                    <textarea id="basic-default-message" class="form-control" placeholder="กรอกข้อมูลแพ้ยา"></textarea>
                </div>
            </div>
            {{-- <div class="row justify-content-end">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
            </div> --}}
        </div>
    </div>
</div>
