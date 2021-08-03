<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>

    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <link href="/assets/fonts/googlefont.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://technext.github.io/mazer/assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="/assets/css/bold.css">
    <link rel="stylesheet" href="/assets/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/cropper/cropper.css">
    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.min.css" />
    <script src="/assets/js/jquery.min.js"></script>
    <!-- <link rel="shortcut icon" href="https://technext.github.io/mazer/assets/images/favicon.svg" type="image/x-icon"> -->
    <style>
    @font-face {
         font-family: "Nunito-Regular";
         src: url('/assets/fonts/Nunito-Regular.tff');
         }
 
   .body{
         font-family: "Nunito-Regular";
         }

        .fileUpload {
     position: relative;
     overflow: hidden;
     margin: 10px;
 }
 input.upload {
     position: absolute;
     top: 0;
     right: 0;
     margin: 0;
     padding: 0;
     font-size: 20px;
     cursor: pointer;
     opacity: 0;
     filter: alpha(opacity=0);
 }

.banner,  .extra-preview {
margin-bottom: 20px;
overflow: hidden;
width: 100%;
}
.banner img,  .extra-preview img {
width: 100%;
}
.extra-preview-sm {
height: 90px;
width: 160px;
}
.extra-preview-xs {
height: 36px;
width: 64px;
}
</style>
</head>

<body >
    <div id="app">
        <div id="main">

            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
