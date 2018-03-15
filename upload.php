<?php
    session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="HandheldFriendly" content="true" />
<title>Quality Enhancer</title>
<link href="https://cdn.jotfor.ms/static/formCss.css?3.3.18271" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.18271" />
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.18271" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
<style type="text/css">
    .form-label-left{
        width:150px !important;
    }
    .form-line{
        padding-top:12px;
        padding-bottom:12px;
    }
    .form-label-right{
        width:150px !important;
    }
    body, html{
        margin:0;
        padding:0;
        background-image:  url('back_img2.jpg');
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }

    .form-all{
        margin:0px auto;
        padding-top:0px;
        width:690px;
        font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, sans-serif;
        font-size:14px;
    }
    .form-radio-item label, .form-checkbox-item label, .form-grading-label, .form-header{
        color: false;
    }

</style>

<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */
.form-label.form-label-auto {
        
      display: inline-block;
      float: left;
      text-align: left;
    
      }/*PREFERENCES STYLE*/
    .form-all {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-header-group {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
    .form-label {
      font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Verdana, Tahoma, sans-serif, sans-serif;
    }
  
    
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      width: 65%;
    }
  
    .form-label-left,
    .form-label-right {
      width: 65%
    }
  
    .form-all {
      font-size: 14pxpx
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 14pxpx
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 14pxpx
    }
  
    .supernova .form-all, .form-all {
      background-color: #021116;
      border: 1px solid transparent;
      opacity: 0.6;
    }
  
    .form-all {
      color: #555;
    }
    .form-header-group .form-header {
      color: #555;
    }
    .form-header-group .form-subHeader {
      color: #555;
    }
    .form-label-top,
    .form-label-left,
    .form-label-right,
    .form-html,
    .form-checkbox-item label,
    .form-radio-item label {
      color: #555;
    }
    .form-sub-label {
      color: #6f6f6f;
    }
  
    .supernova {
      background-color:#09F;
    }
    .form-submit-button-simple_carolina_blue {
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#63b9ee), color-stop(100%,#0f2a31));
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color:#FFC;
    }
  
    .supernova {
      background-image:  url('back_img2.jpg');
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }
    #stage {
      background-image: none;
    }
  
    .form-all {
      background-image: none;
    }
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>

<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/buttons/form-submit-button-simple_carolina_blue.css?3.3.18271"/>
<script src="https://cdn.jotfor.ms/js/vendor/imageinfo.js?v=3.3.18271" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js?3.3.18271" type="text/javascript"></script>

<body>
<form class="jotform-form" action="imageUpload.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
<div style="display: inline-flex;">

  <?php
    $image = file_get_contents($_SESSION['image_path_orig']);
    $image_codes = base64_encode($image);
  ?>
<img src="data:image/jpg;charset=utf-8;base64,<?php echo $image_codes; ?>" style="width: 45%; height: 0%; margin-left: 5%; margin-top: 2%; margin-bottom: 1%;">
<?php
    $image1 = file_get_contents($_SESSION['image_path']);
    $image_codes1 = base64_encode($image1);
  ?>
 <img src="data:image/jpg;charset=utf-8;base64,<?php echo $image_codes1; ?>" style="width: 45%; height: 0%; margin-left: 0%; margin-top: 2%; margin-bottom: 1%;">
</div>
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Upload Your Image
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Generate DSLR type image...
            </div>
          </div>
        </div>
      </li>





      <li class="form-line jf-required" data-type="control_fileupload" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6">
          Please Upload Your Product Image
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <span class="form-sub-label-container" style="vertical-align:top;">
            <input type="file" id="input_6" name="icon_img" data-imagevalidate="yes" data-file-accept="bmp, jpg, jpeg, png, gif" data-file-maxsize="8000" data-file-minsize="50" data-file-limit="0" data-component="fileupload" required />
            <label class="form-sub-label" for="input_6" style="min-height:13px;">  </label>
          </span>
        </div>
      </li>


      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:center;" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_carolina_blue" data-component="button" style="margin-right: 7%; padding: 2px 2px; border-radius: 0;">
              Upload Image
            </button>
            <button id="input_2" type="submit" class="form-submit-button form-submit-button-simple_carolina_blue" data-component="button" style="padding: 2px 2px; border-radius: 0;">
             <a href="<?php echo $_SESSION['image_path']; ?>" download="enhanced_image.jpg" style="text-decoration: none;">Download Image</a>
           </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  
</form></body>
</html>
