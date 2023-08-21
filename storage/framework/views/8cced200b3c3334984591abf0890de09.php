<div class="container">

    <div class="d-flex justify-content-center mt-5">
        <div class="d-flex flex-column mb-3 text-center">
            <div class="p-2"><img src="<?php echo e(asset('storage/img/h.png')); ?>" width="170" height="170"></div>
            <div class="p-2 fs-4 fw-bold">แจ้งข้อร้องเรียน เสนอแนะ แนะนำบริการ</div>

        </div>
    </div>

    <div class="card shadow my-4">
        <div class="card-header text-center text-success">
            <div class="p-2 fs-4">สำหรับประชาชนผู้มารับบริการโรงพยาบาลหนองหาน</div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-center mb-3 text-center">
                <form class="form-floating mt-5" style="width: 700px;" action="<?php echo e(route('report')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('post'); ?>
                    <div class="form-floating mb-3">
                        <select class="form-select <?php $__errorArgs = ['papade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingSelect"
                            name="papade" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="ข้อร้องเรียน" <?php echo e(old('papade') == 'ข้อร้องเรียน' ? 'selected' : ''); ?>>
                                1.ข้อร้องเรียน</option>
                            <option value="ข้อเสนอแนะ" <?php echo e(old('papade') == 'ข้อเสนอแนะ' ? 'selected' : ''); ?>>
                                2.ข้อเสนอแนะ</option>
                            <option value="ข้อชื่นชม" <?php echo e(old('papade') == 'ข้อชื่นชม' ? 'selected' : ''); ?>>3.ข้อชื่นชม
                            </option>
                            <option value="อื่นๆ" <?php echo e(old('papade') == 'อื่นๆ' ? 'selected' : ''); ?>>4.อื่นๆ</option>
                        </select>
                        <label for="floatingSelect">ประเด็น</label>
                        <?php $__errorArgs = ['papade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback text-start" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-floating">
                        <select class="form-select mb-3 <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingSelect"
                            name="type" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="พฤติกรรมบริการ" <?php echo e(old('type') == 'พฤติกรรมบริการ' ? 'selected' : ''); ?>>
                                1.พฤติกรรมบริการ</option>
                            <option value="ระบบบริการ" <?php echo e(old('type') == 'ระบบบริการ' ? 'selected' : ''); ?>>2.ระบบบริการ
                            </option>
                            <option value="อาคาร/สถานที่" <?php echo e(old('type') == 'อาคาร/สถานที่' ? 'selected' : ''); ?>>
                                3.อาคาร/สถานที่</option>
                            <option value="สิ่งแวดล้อม" <?php echo e(old('type') == 'สิ่งแวดล้อม' ? 'selected' : ''); ?>>
                                4.สิ่งแวดล้อม</option>
                            <option value="อื่นๆ" <?php echo e(old('type') == 'อื่นๆ' ? 'selected' : ''); ?>>5.อื่นๆ</option>
                        </select>
                        <label for="floatingSelect">เลือกประเภทร้องเรียน</label>
                        <?php $__errorArgs = ['type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback text-start" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="detail" placeholder="Leave a comment here"
                            id="floatingTextarea2" style="height: 100px"><?php echo e(old('detail')); ?></textarea>
                        <label for="floatingTextarea2" class="text-secondary">รายละเอียด</label>
                        <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback text-start" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="d-flex justify-content-center my-5 text-center text-primary fs-4">
                        ช่องทางติดต่อกลับ ให้ท่านเลือกอย่างน้อย 1 ช่องทาง
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="<?php echo e(old('name')); ?>" name="name"
                            id="floatingInput" placeholder="ชื่อ">
                        <label for="floatingInput" class="text-secondary">ชื่อ-นามสกุล</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="tel" pattern="[0-9]{10}" value="<?php echo e(old('tel')); ?>" class="form-control"
                            name="tel" id="floatingPassword" placeholder="เบอร์โทรศัพท์">
                        <label for="floatingPassword" class="text-secondary">เบอร์โทรศัพท์</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" value="<?php echo e(old('line')); ?>" name="line"
                            id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-secondary">ID Line</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" value="<?php echo e(old('email')); ?>"
                            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                            id="floatingPassword" placeholder="Email">
                        <label for="floatingPassword" class="text-secondary">Email</label>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback text-start" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <?php echo htmlFormSnippet(); ?>

                    <?php $__errorArgs = ['g-recaptcha-response'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="text-start text-danger">
                            <strong>* กรุณายืนยันบอท</strong>
                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>



                    <button type="submit" class="btn btn-success mt-3">ส่งข้อมูล</button>
                </form>

            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\laragon\www\report\resources\views/livewire/report.blade.php ENDPATH**/ ?>