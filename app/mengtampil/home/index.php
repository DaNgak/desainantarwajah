<div id="main" class="container">
    <div class="row d-flex align-items-center justify-content-between" style="height: inherit;">
        <div class="col-md-3 overflow-auto" style="height: inherit; border-right: 1px solid black;">
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img style="width: 72px !important; height: 30px; margin-top: 11px;"
                    src="https://cdn.discordapp.com/attachments/846785183460884490/907779126339985438/Group_3.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907609163520147456/unknown.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907780999474188338/unknown.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907781134501417011/unknown.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907781361639759882/unknown.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907781566053384252/unknown.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907781656662921276/unknown.png"
                    alt="Logo ">
            </a>
            <a href="#" class="row d-flex align-items-center justify-content-center py-3">
                <img src="https://cdn.discordapp.com/attachments/846785183460884490/907781744936230952/unknown.png"
                    alt="Logo ">
            </a>
        </div>
        <form class="col-md overflow-auto" action="<?= BASEURL ?>/home/tambah" method="POST"
            style="height: inherit !important; ">
            <div class="row my-3 text-center">
                <h2>Form Registrasi</h2>
            </div>
            <div class=" row mb-4 d-flex justify-content-between" style="width: 100%;">
                <div class="col-md-6">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Input your first name here" required>
                </div>
                <div class="col-md-6">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Input your last name here" required>
                </div>
            </div>
            <div class="row mb-4 d-flex justify-content-between" style="width: 100%;">
                <div class="col-md">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Input your email here" required>
                </div>
            </div>
            <div class="row mb-4 d-flex justify-content-between" style="width: 100%;">
                <div class="col-md">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Input your user id here" required>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-between" style="width: 100%;">
                <div class="col-md">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="number" id="phone" name="phonenumber" class="form-control" placeholder="Input your phone number here" required>
                </div>
            </div>
            <div class="row d-flex justify-content-end" style="width: 100%;">
                <div class="col-md">
                    <?php Flashbeng::cetakFlash(); ?>
                </div>
            </div>
            <div class="row mb-4 d-flex justify-content-end" style="width: 100%;">
                <div class="d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-outline-info btn-lg">Kirim</button>
                </div>
            </div>
        </form>
    </div>
</div>
