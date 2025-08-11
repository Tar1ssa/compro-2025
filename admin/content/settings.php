<?php
// jika data setting sudah ada maka update data tersebut
// selain itu kalau belum ada maka insert data

if (isset($_POST['simpan'])) {
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // $company = $_POST['company'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $linkedin = $_POST['linkedin'];
    $querysetting = mysqli_query($koneksi, "SELECT * FROM settings LIMIT 1");
    if (mysqli_num_rows($querysetting) > 0) {
        //update
        $row = mysqli_fetch_assoc($querysetting);
        $id_setting = $row['id'];
        $update = mysqli_query($koneksi, "UPDATE settings SET email='$email', phone='$phone', address='address', twitter='$twitter', facebook='$facebook', instagram='$instagram', linkedin='$linkedin' WHERE id = '$$id_setting'");
    } else {
        //insert
        $insert = mysqli_query($koneksi, "INSERT INTO settings (email, phone, address, twitter, facebook, instagram, linkedin) 
            VALUES ('$email', '$phone', '$address', '$twitter', '$facebook', '$instagram', '$linkedin')");
    }
}
$querysetting = mysqli_query($koneksi, "SELECT * FROM settings LIMIT 1");
$row = mysqli_fetch_assoc($querysetting);
?>


<div class="pagetitle">
    <h1>Settings</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Pages</li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Settings</h5>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">Email</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="email" name="email" id="" class="form-control"
                                value="<?php echo isset($row['email']) ? $row['email'] : '' ?>">
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">No. Telp</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="number" name="phone" id="" class="form-control"
                                value="<?php echo isset($row['phone']) ? $row['phone'] : '' ?>">
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">Alamat</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <textarea name="address" id=""
                                class="form-control"><?php echo isset($row['address']) ? $row['address'] : '' ?></textarea>
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">Company Logo</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="file" name="company" id="">
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">Twitter</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="url" name="twitter" id="" class="form-control"
                                value="<?php echo isset($row['twitter']) ? $row['twitter'] : '' ?>">
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">Facebook</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="url" name="facebook" id="" class="form-control"
                                value="<?php echo isset($row['facebook']) ? $row['facebook'] : '' ?>">
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">Instagram</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="url" name="instagram" id="" class="form-control"
                                value="<?php echo isset($row['instagram']) ? $row['instagram'] : '' ?>">
                        </div>
                        <div class="mb-2 row">
                            <label for="" class="form-label fw-bold">LinkedIn</label>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <input type="url" name="linkedin" id="" class="form-control"
                                value="<?php echo isset($row['linkedin']) ? $row['linkedin'] : '' ?>">
                        </div>
                        <div class="mb-2 row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div>

</section>