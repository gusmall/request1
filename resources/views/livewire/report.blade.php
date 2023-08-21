<div class="container">

    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex flex-column mb-3 text-center">
            <div class="p-2"><img src="{{ asset('storage/img/h.png') }}" width="170" height="170"></div>
            <div class="p-2 fs-4 fw-bold">แจ้งข้อร้องเรียน เสนอแนะ แนะนำบริการ</div>

        </div>
    </div>

    <div class="card shadow my-4">
        <div class="card-header text-center text-success">
            <div class="p-2 fs-4">สำหรับประชาชนผู้มารับบริการโรงพยาบาลหนองหาน</div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-center mb-3 text-center">
                <form class="form-floating mt-5" style="width: 700px;" action="{{ route('report') }}" method="POST">
                    @csrf
                    @method('post')
                    <div class="form-floating mb-3">
                        <select class="form-select @error('papade') is-invalid @enderror" id="floatingSelect"
                            name="papade" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="ข้อร้องเรียน" {{ old('papade') == 'ข้อร้องเรียน' ? 'selected' : '' }}>
                                ข้อร้องเรียน</option>
                            <option value="ข้อเสนอแนะ" {{ old('papade') == 'ข้อเสนอแนะ' ? 'selected' : '' }}>
                                ข้อเสนอแนะ</option>
                            <option value="ข้อชื่นชม" {{ old('papade') == 'ข้อชื่นชม' ? 'selected' : '' }}>ข้อชื่นชม
                            </option>
                            <option value="อื่นๆ" {{ old('papade') == 'อื่นๆ' ? 'selected' : '' }}>อื่นๆ</option>
                        </select>
                        <label for="floatingSelect">ประเด็น</label>
                        @error('papade')
                            <span class="invalid-feedback text-start" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select @error('type') is-invalid @enderror" id="floatingSelect"
                            name="type" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="พฤติกรรมบริการ" {{ old('type') == 'พฤติกรรมบริการ' ? 'selected' : '' }}>
                                พฤติกรรมบริการ</option>
                            <option value="ระบบบริการ" {{ old('type') == 'ระบบบริการ' ? 'selected' : '' }}>ระบบบริการ
                            </option>
                            <option value="อาคาร/สถานที่" {{ old('type') == 'อาคาร/สถานที่' ? 'selected' : '' }}>
                                อาคาร/สถานที่</option>
                            <option value="สิ่งแวดล้อม" {{ old('type') == 'สิ่งแวดล้อม' ? 'selected' : '' }}>
                                สิ่งแวดล้อม</option>
                            <option value="อื่นๆ" {{ old('type') == 'อื่นๆ' ? 'selected' : '' }}>อื่นๆ</option>
                        </select>
                        <label for="floatingSelect">เลือกประเภทร้องเรียน</label>
                        @error('type')
                            <span class="invalid-feedback text-start" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px">{{ old('detail') }}</textarea>
                        <label for="floatingTextarea2" class="text-secondary">รายละเอียด</label>
                        @error('detail')
                            <span class="invalid-feedback text-start" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="d-flex justify-content-center my-5 text-center text-primary fs-4">
                        ช่องทางติดต่อกลับ ให้ท่านเลือกอย่างน้อย 1 ช่องทาง
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name"
                            id="floatingInput" placeholder="ชื่อ">
                        <label for="floatingInput" class="text-secondary">ชื่อ-นามสกุล</label>
                        @error('name')
                            <span class="invalid-feedback text-start" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" pattern="[0-9]{10}" value="{{ old('tel') }}" class="form-control"
                            name="tel" id="floatingPassword" placeholder="เบอร์โทรศัพท์">
                        <label for="floatingPassword" class="text-secondary">เบอร์โทรศัพท์</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="{{ old('line') }}" name="line"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-secondary">ID Line</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" value="{{ old('email') }}"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            id="floatingPassword" placeholder="Email">
                        <label for="floatingPassword" class="text-secondary">Email</label>
                        @error('email')
                            <span class="invalid-feedback text-start" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {!! htmlFormSnippet() !!}
                    @error('g-recaptcha-response')
                        <div class="text-start text-danger">
                            <strong>* กรุณายืนยันบอท</strong>
                        </div>
                    @enderror



                    <button type="submit" class="btn btn-success mt-3">ส่งข้อมูล</button>
                </form>

            </div>
        </div>
    </div>

</div>
