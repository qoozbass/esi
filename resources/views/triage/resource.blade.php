<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">ประเมินแน้วโน้มความต้องการทำกิจกรรม Resource</h5> <small class="text-muted float-end">กรอกรายละเอียด Resource ให้ครบถ้วน</small>
        </div>
        {{-- ระดับ 1 --}}
        <div class="card-body">
            <div class="row">
                <h5 class="card-header">ระดับ 1 *Resuscitate*</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_1" class="form-check-input mt-0" type="checkbox" value="Arrest" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Arrest" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_2" class="form-check-input mt-0" type="checkbox" value="Air hunger, Apnea" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Air hunger, Apnea" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_3" class="form-check-input mt-0" type="checkbox" value="SBP<90MAP<60mmHg" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="SBP<90MAP<60mmHg" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_4" class="form-check-input mt-0" type="checkbox" value="ICD" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="ICD" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_5" class="form-check-input mt-0" type="checkbox" value="GCS<=8" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="GCS<=8" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_6" class="form-check-input mt-0" type="checkbox" value="SAT<90%" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="SAT<90%" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r1_7" class="form-check-input mt-0" type="checkbox" value="Seizure" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Seizure" readonly>
                    </div>
                </div>
            </div>
            {{-- ระดับ 2 --}}
            <div class="row">
                <h5 class="card-header">ระดับ 2 *Emergent*</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r2_1" class="form-check-input mt-0" type="checkbox" value="เสี่ยง ซึม ปวด" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="เสี่ยง ซึม ปวด" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r2_2"  class="form-check-input mt-0" type="checkbox" value="Fast track *V/S dangerous*" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Fast track *V/S dangerous*" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r2_3"  class="form-check-input mt-0" type="checkbox" value="GCS 9-12" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="GCS 9-12" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r2_4"  class="form-check-input mt-0" type="checkbox" value="Pain score >= 7 (ร่วมกับความสมเหตุสมผล อวับวะสำคัญ)" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Pain score >= 7 (ร่วมกับความสมเหตุสมผล อวับวะสำคัญ)" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r2_5"  class="form-check-input mt-0" type="checkbox" value="Danger Zone vital sign" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Danger Zone vital sign" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r2_6"  class="form-check-input mt-0" type="checkbox" value="Psychiatric" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Psychiatric" readonly>
                    </div>
                </div>
            </div>
            {{-- ระดับ 3 --}}
            <div class="row">
                <h5 class="card-header">ระดับ 3 *กิจกรรม Resource*</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r3_1"  class="form-check-input mt-0" type="checkbox" value="Lab" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Lab" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r3_2"  class="form-check-input mt-0" type="checkbox" value="EKG, X-Ray, CT Scan" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="EKG, X-Ray, CT Scan" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r3_3"  class="form-check-input mt-0" type="checkbox" value="IV fluid" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="IV fluid" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r3_4"  class="form-check-input mt-0" type="checkbox" value="ฉีดยา IV, IM หรือ พ่นยา" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="ฉีดยา IV, IM หรือ พ่นยา" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r3_5"  class="form-check-input mt-0" type="checkbox" value="Consult เฉพาะทาง" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Consult เฉพาะทาง" readonly>
                    </div>
                    <div class="input-group">
                        <div class="input-group-text">
                            <input name="r3_6"  class="form-check-input mt-0" type="checkbox" value="หัตถการ" aria-label="Checkbox for following text input">
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="หัตถการ" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
