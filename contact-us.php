<!DOCTYPE html>
<html lang="en">
<head>
    <?php require "template/head.php" ?>
    <title>Hubungi Kami - PD Sinar Rezeki</title>
</head>
<body class="contact-us">
    <?php require "template/nav.php" ?>

    <main>
        <div class="container text-center py-0 py-sm-4">
            <div class="row">
                <div class="col-md-6 mt-0 mt-md-5">
                    <h1 class="mt-0 mt-lg-5 pt-5 pb-3 fw-bold">We're Happy To Help You Today!</h1>
                    <p class="mb-5 fs-5">Hubungi kami melalui salah satu channel yang telah kami sediakan di bawah</p>
                </div>
                <div class="col-md-6 mt-0 mt-md-5">
                    <img src="assets/img/contact-us/contact-1.svg" alt="contact-1" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="contact-us container py-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-5">
                        <img src="assets/img/contact-us/email.png" alt="email" class="img-fluid img-width">
                        <div class="card-body">
                            <h4 class="text-center pb-3">Kontak Melalui E-mail</h4>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="mailto:pd.sinarrezeki@gmail.com" class="btn btn-primary">Send Email</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-5">
                        <img src="assets/img/contact-us/whatsapp.svg" alt="whatsapp" class="img-fluid img-width">
                        <div class="card-body">
                            <h4 class="text-center pb-3">Kontak Melalui Whatsapp</h4>
                            <div class="btn-group d-flex justify-content-center align-items-center">
                                <a href="https://wa.me/62818728927" class="btn btn-primary">Admin 1</a>
                                <a href="https://wa.me/6288290736620" class="btn btn-primary">Admin 2</a>
                                <a href="https://wa.me/6285156132731" class="btn btn-primary">Admin 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <h1 class="text-center py-1">Hubungi Kami</h1>
            <form action="" method="post" name="submit-to-google-sheet">
                <div class="row">
                    <div class="col-md-5 d-flex align-items-center justify-content-center">
                        <img src="assets/img/contact-us/contact-2.svg" alt="contact-2" class="img-fluid">
                    </div>
                    <div class="col-md-7 rounded p-5">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" maxlength="100" placeholder="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" maxlength="100" placeholder="nama@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="telepon" class="form-label">No Telepon</label>
                            <input type="tel" name="telepon" id="telepon" class="form-control" maxlength="13" placeholder="08xxx" required>
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea name="pesan" id="pesan" class="form-control" cols="30" rows="10" placeholder="Pesan anda..." required></textarea>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" name="submit" class="btn btn-primary btn-send">Kirim</button>
                            <button type="button" class="btn btn-primary btn-loading d-none" disabled>
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Loading...
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="alert alert-success d-none my-alert" role="alert">
                <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
            </div>
        </div>
    </main>
    <hr>

    <?php require "template/footer.php" ?>

    <script>
    const scriptURL =
    'https://script.google.com/macros/s/AKfycbwj8QK7OAzF7VKSXB73aBQLLM2anLw9NyC039ohDJwl3jYjp3nqqzYVlTi9JwPUZPjB/exec';
    const form = document.forms['submit-to-google-sheet'];
    const btnSend = document.querySelector('.btn-send');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');

    form.addEventListener('submit', (e) => {
    e.preventDefault();
    btnLoading.classList.toggle('d-none');
    btnSend.classList.toggle('d-none');
    fetch(scriptURL, { method: 'POST', body: new FormData(form) })
        .then((response) => {
            btnLoading.classList.toggle('d-none');
            btnSend.classList.toggle('d-none');
            myAlert.classList.toggle('d-none');
            form.reset();
            console.log('Success!', response);
            setTimeout(() => {
                myAlert.classList.toggle('d-none');
            }, 5000);
        })
        .catch((error) => console.error('Error!', error.message));
    });
    </script>
</body>
</html>