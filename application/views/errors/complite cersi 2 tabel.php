<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>ALTRAMAN</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lightbox.min.css">
        <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">   
        <link href="<?php echo base_url(); ?>assets/themes/css/bootstrappage.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/themes/css/jquery.fancybox.css" rel="stylesheet"/>
        <script src="<?php echo base_url(); ?>assets/themes/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>       
        <script src="<?php echo base_url(); ?>assets/themes/js/superfish.js"></script>  
        <script src="<?php echo base_url(); ?>assets/themes/js/jquery.scrolltotop.js"></script>
        <script src="<?php echo base_url(); ?>assets/themes/js/jquery.fancybox.js"></script>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min1.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/custom.min1.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/jquery.ui.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assets/css/helpers/jquery.fancybox-buttons.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/helpers/jquery.fancybox-thumbs.css" />
        <script type="text/javascript">

    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }

  </style>

  <style type="text/css">
.glass {
  position: relative;
  padding: 10px 0;
  border-bottom: 1px solid;
  border-bottom-color: #ccc;
  border-bottom-color: rgba(255, 255, 255, 0.2);
  background-color: rgba(85, 85, 85, 0.3);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
  width: 600px;
  height: unset;
}

.glass::before {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  background-position: center bottom;
  background-attachment: fixed;
  background-size: cover;
  content: "";
  filter: url("data:image/svg+xml,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22UTF-8%22%3F%3E%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20version%3D%221.1%22%3E%3Cdefs%3E%3Cfilter%20id%3D%22blur%22%3E%3CfeGaussianBlur%20stdDeviation%3D%225%22%2F%3E%3C%2Ffilter%3E%3C%2Fdefs%3E%3C%2Fsvg%3E#blur");
  -webkit-filter: blur(5px);
  filter: blur(5px);
}

.glass .legacy-ie-fix {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #fff;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=20)";
}

</style>



    </head>

    <body style="padding-right:0px importanc">

<!-- Start of LiveChat (www.livechatinc.com) code -->
    <script type="text/javascript">
    window.__lc = window.__lc || {};
    window.__lc.license = 8076901;
    (function() {
      var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
      lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
    })();
    </script>
    <!-- End of LiveChat code -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">
                    <div class="col-sm-6 col-xs-12 text-right" style="width:100%">
                        <ul class="list-unstyled list-inline header-social">
                            <li>Share to </li>
                            <li> 
                              <a id="button" onClick="window.open('http://www.facebook.com/sharer.php?s=100&amp;p[title]=PT ALTRAMAN&amp;p[summary]=Jual Alat Timbangan Terbaik&amp;p[url]=http://nyoba-web.esy.es/&amp;&p[images][0]=http://nyoba-web.esy.es/assets/images/slider/home-slider-1.jpg', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)"><i class="fa fa-facebook"></i> </a> 
                            </li>
                            <li> 
                                <a id="button" onClick="window.open('http://twitter.com/share?source=sharethiscom&text=PT ALTRAMAN&url=http://nyoba-web.esy.es/;&via=berbagiyuks', 'sharer', 'toolbar=0,status=0,width=550,height=400');" target="_parent" href="javascript: void(0)"><i class="fa fa-twitter"></i></a> 
                            </li>
                            <li> 
                                <a href="javascript:void(0);" onclick="popUp=window.open('https://plus.google.com/share?url=http://nyoba-web.esy.es','popupwindow','scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google"></i></a></li>
                            <li> 
                                <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'><i class="fa fa fa-pinterest-p"></i></a> 
                            </li>
                       </ul> <!-- /.header-social  -->
                    </div>
                  </div>
              </div>
            </div>
            <div class="navbar-main">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" style="background: #000;" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>welcome/index"><img src="assets/images/sadaka-logo.png" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse pull-right">
                  <ul class="nav navbar-nav">
                    <li style="margin-left: 15px;"><a href="<?php echo base_url(); ?>welcome/index">Home</a></li>
                    <li style="margin-left: 15px;" class="has-child"><a  class="is-active" href="#">Product <i class="fa fa-caret-down" style="text-align: right; width: 15px;"></i></a>
                    <ul class="submenu">
                      <?php 
                       $s = -1;
                       foreach ($_SESSION['data'] as $bismillah) { 
                        $s = $s + 1;?>
                        <li class="submenu-item"><a style="text-transform: unset; font-size: 14px;" href="<?php echo base_url(); ?>welcome/product/<?php echo $bismillah['Subproduk'] ?>"><?php echo $bismillah['Subproduk'] ?><i class="fa fa-caret-right" style="float: right;"></i></a>
                            <ul class="submenu2" style="margin-top:<?php echo (-63 + ($s*29.93))?>px !important">

                              <?php foreach ($_SESSION['isi'] as $bismillah2) { ?>
                                  <?php if ( $bismillah2['Category'] == $bismillah['Subproduk'] ) { ?>
                                      <li class="submenu2-item"><a style="text-transform: unset; font-size: 14px;" href="<?php echo base_url(); ?>welcome/complete/<?php echo $bismillah2['Type'] ?>"><?php echo $bismillah2['Type'] ?></a></li>
                                  <?php } ?>
                              <?php } ?>
                              </ul>
                        </li>
                      <?php } ?>
                    </ul>
                    <li style="margin-left: 15px;"><a href="<?php echo base_url(); ?>welcome/about">About</a></li>
                    <li style="margin-left: 15px;"><a href="<?php echo base_url(); ?>welcome/about">Article</a></li>
                    <li style="margin-left: 15px;"><a href="<?php echo base_url(); ?>welcome/contact">Contact</a></li>
                  

                    <form method="post" id="searchform">
                      <fieldset style="margin-top: 10px;">
                      <input onmouseover="jalankan();" id="s" name="s" type="text"
                              value="Search..." class="text_input"
                              onblur="if(this.value==''){this.value='Search...';}"
                              onfocus="if(this.value =='Search...') {this.value=''; }"
                              style="font-style: italic;" />
                      <input onmouseover="jalankan();" onmouseout="hentikan();" name="submit" type="submit"  value="" />
                      </fieldset>
                  </form>

        <script type="text/javascript">
          function jalankan(){
          document.getElementById('s').style.width = "170px";
          document.getElementById('s').style.background = "#E8E8E8";
      }
      function hentikan(){
          document.getElementById('s').style.width = "0px";
          document.getElementById('s').style.background = "transparent";
          }
        </script>          
                  </ul>
                </div> <!-- /#navbar -->
              </div> <!-- /.container -->
            </div> <!-- /.navbar-main -->
        </nav> 
    </header> <!-- /. main-header -->
    <hr>
    <div style="height:70px"></div>



<?php foreach ($hasil as $bismillah3) { ?>
      <div style="width:60%;background:#e3e3e3;min-height:250px;margin-left:20%;margin-top:40px">
        <img style="float: right;margin-top: 10px;margin-right: 30px;height: 230px;" src="<?php echo base_url()."Gambar Header/".$bismillah3['Header_Pic']; ?>">
        <div style="width: 45%;font-size: 14px;line-height: 30px;text-align: justify;float: left;margin-left:40px;">
          <p  style="font-size: 42px;margin-top:50px"><strong><?php echo $bismillah3['Type']; ?></strong></p>
          <p  style="font-size: 28px;margin-top:10px;font-family: Segoe UI Light;"><strong><?php echo $bismillah3['Category']; ?></strong></p>
          <br> 
           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"  style="font-family: segoe ui;font-size: 18px;padding: 8px 15px;"> Request Info</a>
           <a href="<?php echo base_url()."PDF/".$bismillah3['PDF']; ?>" class="btn btn-primary"  style="font-family: segoe ui;font-size: 18px;padding: 8px 15px; margin-left: 5px;"> Download Brochure</a>
          </div>
          </div>
              <div class="span9" style="margin-top:40px; margin-left:20%; width: 60%;">
                <ul class="nav nav-tabs" id="myTab" style="color: white;">
                  <li class="active"><a style="background: rgb(145, 145, 145 ); margin-bottom: 2px;" href="#home">Overview</a></li>
                  <li class=""><a style="background: rgb(145, 145, 145 );" href="#profile">Specifications</a></li>
                </ul>              
                <div class="tab-content" style="height : 400px;">
                  <div class="tab-pane active" id="home">
                    <div style="margin: 20px;text-align: center; width:800px;font-family: Segoe UI Semibold;font-size: 16px;">
                      <?php echo $bismillah3['Text_Intro']; ?>
                    </div>
                    <div style="margin-left: 40px; margin-top:20px;text-align: justify;width:250px;float: left; height: 300px">
                    <p>
                      <a class="fancybox" href="<?php echo base_url()."Pic 1/".$bismillah3['Pic_1']; ?>" data-fancybox-group="gallery" ><img src="<?php echo base_url()."Pic 1/".$bismillah3['Pic_1']; ?>" alt="" style="width:220px;border: 1px solid #919191;"/></a>
                    
                      <a class="fancybox" href="<?php echo base_url()."Gambar Depan/".$bismillah3['Pic_Depan']; ?>" data-fancybox-group="gallery"><img src="<?php echo base_url()."Gambar Depan/".$bismillah3['Pic_Depan']; ?>" alt="" style="border: 1px solid #919191;width:40px; margin-top:5px; margin-left:5px"/></a>
                    
                      <a class="fancybox" href="<?php echo base_url()."Gambar Kiri/".$bismillah3['Pic_Kiri']; ?>" data-fancybox-group="gallery"><img src="<?php echo base_url()."Gambar Kiri/".$bismillah3['Pic_Kiri']; ?>" alt="" style="border: 1px solid #919191;width:40px; margin-top:5px; margin-left:5px" /></a>
                    </p>
                    </div>
                    <div style="margin: 20px 20px 20px 0px;text-align: justify; width: 50%;float: left;">
                      <?php echo $bismillah3['Text_Detail']; ?>
                    </div>
                  </div>
                  <div class="tab-pane" id="profile"  style="margin: 20px;text-align: justify;">
                    <table class="table table-striped shop_attributes" style="font-family: arial nero;"> 
                      <tbody id="Sys">
                        <?php $Data = $bismillah3['Json']; ?>
                      </tbody>
                    </table>
                    <div style="width:100px"></div>
                    <table class="table table-striped shop_attributes" style="width: unset;font-family: arial nero;"> 
                      <tbody id="Sys2">
                        <?php $Data = $bismillah3['Json']; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                            <script>
                                var today = new Date();
                                var xmlhttp = new XMLHttpRequest();
                                xmlhttp.onreadystatechange = function() {
                                  var stat = xmlhttp.responseText;
                                  obj = JSON.parse(stat);
                                  var output = '<tr style = "background: white;">';
                                  var output2 = '<tr style = "background: white;">';
                                  
                                  if (obj.length <= 7){

                                  // data satu
                                  if (obj[1].Data1 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+3].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data1 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data1 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data1 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data1 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data1 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data1 == obj[i+1].Data1){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data1 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data dua
                                  if (obj[1].Data2 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+3].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data2 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data2 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data2 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data2 == obj[i+1].Data2){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 3
                                  if (obj[1].Data3 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+3].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data3 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data3 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data3 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data3 == obj[i+1].Data3){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 4
                                  if (obj[1].Data4 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+3].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data4 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data4 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data4 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data4 == obj[i+1].Data4){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 5
                                  if (obj[1].Data5 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+3].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data5 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data5 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data5 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data5 == obj[i+1].Data5){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 6
                                  if (obj[1].Data6 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+3].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data6 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data6 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data6 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data6 == obj[i+1].Data6){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 7
                                  if (obj[1].Data7 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+3].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data7 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data7 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data7 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data7 == obj[i+1].Data7){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 8
                                  if (obj[1].Data8 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+3].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data8 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data8 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data8 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data8 == obj[i+1].Data8){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 9

                                if (obj[1].Data9 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+3].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data9 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data9 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data9 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data9 == obj[i+1].Data9){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 10
                                  if (obj[1].Data10 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+3].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data10 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data10 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data10 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data10 == obj[i+1].Data10){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 11
                                  if (obj[1].Data11 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+3].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data11 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data11 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data11 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data11 == obj[i+1].Data11){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 12
                                  if (obj[1].Data12 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+3].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data12 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data12 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data12 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data12 == obj[i+1].Data12){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 13
                                  if (obj[1].Data13 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+3].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data13 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data13 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data13 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data13 == obj[i+1].Data13){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  //data 14
                                  if (obj[1].Data14 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+3].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data14 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data14 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data14 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data14 == obj[i+1].Data14){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 15
                                  if (obj[1].Data15 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+3].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data15 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data15 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data15 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data15 == obj[i+1].Data15){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 16
                                  if (obj[1].Data16 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+3].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data16 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data16 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data16 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data16 == obj[i+1].Data16){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 17
                                  if (obj[1].Data17 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+3].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data17 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data17 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data17 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data17 == obj[i+1].Data17){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 18
                                  if (obj[1].Data18 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+3].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data18 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data18 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data18 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data18 == obj[i+1].Data18){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 19
                                  if (obj[1].Data19 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+3].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data19 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data19 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data19 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data19 == obj[i+1].Data19){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 20
                                  if (obj[1].Data20 != ""){
                                      for (var i = 0; i < obj.length; i++){                                    
                                        if (i+3<obj.length){
                                            if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+3].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data20 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data20 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<obj.length){
                                            if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data20 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<obj.length){
                                              if(obj[i].Data20 == obj[i+1].Data20){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                   output = output + "</tr>"                        
                                  document.getElementById("Sys").innerHTML = output;

                                }

                                //-----------------------------------------------------------------------------------
                                //-----------------------------------------------------------------------------------
                                //-----------------------------------------------------------------------------------
                                
                                else{
                                  // data satu
                                  if (obj[1].Data1 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+3].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data1 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data1 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data1 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data1 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data1 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data1 == obj[i+1].Data1){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data1 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data1+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data dua
                                  if (obj[1].Data2 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+3].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data2 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data2 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data2 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data2 == obj[i+1].Data2){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 3
                                  if (obj[1].Data3 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+3].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data3 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data3 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data3 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data3 == obj[i+1].Data3){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 4
                                  if (obj[1].Data4 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+3].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data4 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data4 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data4 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data4 == obj[i+1].Data4){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 5
                                  if (obj[1].Data5 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+3].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data5 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data5 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data5 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data5 == obj[i+1].Data5){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 6
                                  if (obj[1].Data6 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+3].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data6 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data6 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data6 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data6 == obj[i+1].Data6){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 7
                                  if (obj[1].Data7 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+3].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data7 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data7 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data7 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data7 == obj[i+1].Data7){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 8
                                  if (obj[1].Data8 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+3].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data8 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data8 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data8 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data8 == obj[i+1].Data8){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 9

                                if (obj[1].Data9 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+3].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data9 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data9 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data9 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data9 == obj[i+1].Data9){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 10
                                  if (obj[1].Data10 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+3].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data10 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data10 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data10 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data10 == obj[i+1].Data10){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 11
                                  if (obj[1].Data11 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+3].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data11 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data11 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data11 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data11 == obj[i+1].Data11){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 12
                                  if (obj[1].Data12 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+3].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data12 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data12 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data12 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data12 == obj[i+1].Data12){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 13
                                  if (obj[1].Data13 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+3].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data13 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data13 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data13 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data13 == obj[i+1].Data13){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  //data 14
                                  if (obj[1].Data14 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+3].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data14 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data14 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data14 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data14 == obj[i+1].Data14){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 15
                                  if (obj[1].Data15 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+3].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data15 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data15 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data15 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data15 == obj[i+1].Data15){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 16
                                  if (obj[1].Data16 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+3].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data16 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data16 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data16 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data16 == obj[i+1].Data16){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 17
                                  if (obj[1].Data17 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+3].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data17 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data17 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data17 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data17 == obj[i+1].Data17){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 18
                                  if (obj[1].Data18 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+3].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data18 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data18 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data18 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data18 == obj[i+1].Data18){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 19
                                  if (obj[1].Data19 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+3].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data19 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data19 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data19 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data19 == obj[i+1].Data19){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                  // data 20
                                  if (obj[1].Data20 != ""){
                                      for (var i = 0; i < 7; i++){                                    
                                        if (i+3<7){
                                            if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+3].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data20 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data20 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2<7){
                                            if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data20 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20){
                                              output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1<7){
                                              if(obj[i].Data20 == obj[i+1].Data20){
                                                output = output + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                              }
                                            }else{
                                              output = output+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                          }
                                        }
                                    }
                                     output = output + '</tr><tr style = "background: white;">'
                                  }

                                   output = output + "</tr>"

                                   //-----------------------------------------------------------
                                   //-----------------------------------------------------------
                                   //-----------------------------------------------------------
                                   //-----------------------------------------------------------
                                              
                                   // data satu
                                  if (obj[1].Data1 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px">' + obj[0].Data1 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+3].Data1){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px" colspan="4">' + obj[i].Data1 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px" colspan="3">' + obj[i].Data1 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px" colspan="2">' + obj[i].Data1 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px">'+obj[i].Data1+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data1 == obj[i+1].Data1 && obj[i+2].Data1 == obj[i+1].Data1){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px" colspan="3">' + obj[i].Data1 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data1 == obj[i+1].Data1){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px" colspan="2">' + obj[i].Data1 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px">'+obj[i].Data1+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data1 == obj[i+1].Data1){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px" colspan="2">' + obj[i].Data1 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px">'+obj[i].Data1+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center; width:130px">'+obj[i].Data1+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data dua
                                  if (obj[1].Data2 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data2 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+3].Data2){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data2 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data2 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data2 == obj[i+1].Data2 && obj[i+2].Data2 == obj[i+1].Data2){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data2 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data2 == obj[i+1].Data2){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data2 == obj[i+1].Data2){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data2 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data2+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 3
                                  if (obj[1].Data3 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data3 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+3].Data3){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data3 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data3 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data3 == obj[i+1].Data3 && obj[i+2].Data3 == obj[i+1].Data3){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data3 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data3 == obj[i+1].Data3){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data3 == obj[i+1].Data3){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data3 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data3+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 4
                                  if (obj[1].Data4 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data4 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+3].Data4){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data4 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data4 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data4 == obj[i+1].Data4 && obj[i+2].Data4 == obj[i+1].Data4){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data4 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data4 == obj[i+1].Data4){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data4 == obj[i+1].Data4){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data4 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data4+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 5
                                  if (obj[1].Data5 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data5 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+3].Data5){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data5 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data5 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data5 == obj[i+1].Data5 && obj[i+2].Data5 == obj[i+1].Data5){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data5 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data5 == obj[i+1].Data5){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data5 == obj[i+1].Data5){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data5 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data5+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 6
                                  if (obj[1].Data6 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data6 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+3].Data6){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data6 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data6 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data6 == obj[i+1].Data6 && obj[i+2].Data6 == obj[i+1].Data6){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data6 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data6 == obj[i+1].Data6){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data6 == obj[i+1].Data6){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data6 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data6+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 7
                                  if (obj[1].Data7 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data7 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+3].Data7){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data7 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data7 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data7 == obj[i+1].Data7 && obj[i+2].Data7 == obj[i+1].Data7){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data7 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data7 == obj[i+1].Data7){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data7 == obj[i+1].Data7){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data7 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data7+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 8
                                  if (obj[1].Data8 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data8 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+3].Data8){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data8 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data8 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data8 == obj[i+1].Data8 && obj[i+2].Data8 == obj[i+1].Data8){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data8 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data8 == obj[i+1].Data8){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data8 == obj[i+1].Data8){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data8 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data8+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 9

                                if (obj[1].Data9 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data9 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+3].Data9){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data9 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data9 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data9 == obj[i+1].Data9 && obj[i+2].Data9 == obj[i+1].Data9){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data9 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data9 == obj[i+1].Data9){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data9 == obj[i+1].Data9){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data9 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data9+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 10
                                  if (obj[1].Data10 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data10 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+3].Data10){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data10 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data10 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data10 == obj[i+1].Data10 && obj[i+2].Data10 == obj[i+1].Data10){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data10 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data10 == obj[i+1].Data10){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data10 == obj[i+1].Data10){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data10 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data10+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 11
                                  if (obj[1].Data11 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data11 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+3].Data11){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data11 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data11 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data11 == obj[i+1].Data11 && obj[i+2].Data11 == obj[i+1].Data11){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data11 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data11 == obj[i+1].Data11){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data11 == obj[i+1].Data11){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data11 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data11+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 12
                                  if (obj[1].Data12 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data12 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+3].Data12){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data12 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data12 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data12 == obj[i+1].Data12 && obj[i+2].Data12 == obj[i+1].Data12){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data12 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data12 == obj[i+1].Data12){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data12 == obj[i+1].Data12){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data12 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data12+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 13
                                  if (obj[1].Data13 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data13 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+3].Data13){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data13 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data13 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data13 == obj[i+1].Data13 && obj[i+2].Data13 == obj[i+1].Data13){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data13 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data13 == obj[i+1].Data13){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data13 == obj[i+1].Data13){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data13 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data13+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  //data 14
                                  if (obj[1].Data14 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data14 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+3].Data14){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data14 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data14 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data14 == obj[i+1].Data14 && obj[i+2].Data14 == obj[i+1].Data14){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data14 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data14 == obj[i+1].Data14){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data14 == obj[i+1].Data14){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data14 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data14+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 15
                                  if (obj[1].Data15 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data15 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+3].Data15){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data15 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data15 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data15 == obj[i+1].Data15 && obj[i+2].Data15 == obj[i+1].Data15){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data15 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data15 == obj[i+1].Data15){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data15 == obj[i+1].Data15){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data15 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data15+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 16
                                  if (obj[1].Data16 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data16 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+3].Data16){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data16 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data16 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data16 == obj[i+1].Data16 && obj[i+2].Data16 == obj[i+1].Data16){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data16 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data16 == obj[i+1].Data16){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data16 == obj[i+1].Data16){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data16 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data16+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 17
                                  if (obj[1].Data17 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data17 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+3].Data17){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data17 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data17 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data17 == obj[i+1].Data17 && obj[i+2].Data17 == obj[i+1].Data17){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data17 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data17 == obj[i+1].Data17){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data17 == obj[i+1].Data17){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data17 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data17+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 18
                                  if (obj[1].Data18 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data18 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+3].Data18){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data18 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data18 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data18 == obj[i+1].Data18 && obj[i+2].Data18 == obj[i+1].Data18){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data18 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data18 == obj[i+1].Data18){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data18 == obj[i+1].Data18){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data18 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data18+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                  // data 19
                                  if (obj[1].Data19 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data19 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+3].Data19){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data19 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data19 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data19 == obj[i+1].Data19 && obj[i+2].Data19 == obj[i+1].Data19){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data19 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data19 == obj[i+1].Data19){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data19 == obj[i+1].Data19){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data19 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data19+"</td>";
                                            }
                                          }
                                        }
                                    }

                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }
                                  // data 20
                                  if (obj[1].Data20 != ""){
                                   output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;">' + obj[0].Data20 +"</td>"
                                      for (var i = 7; i < obj.length; i++){                                    
                                        if (i+3< obj.length){
                                            if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+3].Data20){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="4">' + obj[i].Data20 +"</td>"
                                              i = i + 3;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data20 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                        }

                                        else{
                                          if (i+2< obj.length){
                                            if(obj[i].Data20 == obj[i+1].Data20 && obj[i+2].Data20 == obj[i+1].Data20){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="3">' + obj[i].Data20 +"</td>"
                                              i = i + 2;
                                            }
                                            else if(obj[i].Data20 == obj[i+1].Data20){
                                              output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                              i = i + 1;
                                            }
                                            else {
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                          }
                                          else{
                                            if (i+1< obj.length){
                                              if(obj[i].Data20 == obj[i+1].Data20){
                                                output2 = output2 + '<td style="border: 1px solid #e3e3e3;text-align: center;" colspan="2">' + obj[i].Data20 +"</td>"
                                                i = i + 1;
                                              }
                                              else {
                                                output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                              }
                                            }else{
                                              output2 = output2+ '<td style="border: 1px solid #e3e3e3;text-align: center;">'+obj[i].Data20+"</td>";
                                            }
                                          }
                                        }
                                    }
                                     output2 = output2 + '</tr><tr style = "background: white;">'
                                  }

                                   output2 = output2 + "</tr>"



                                  document.getElementById("Sys").innerHTML = output;
                                  document.getElementById("Sys2").innerHTML = output2;

                                }

                                
                              };
                              xmlhttp.open("GET", '<?php echo base_url()."json/".$Data; ?>', true);
                              xmlhttp.send();
                              </script>



    <?php } ?>





    <div class="section-home our-causes animate-onscroll fadeIn">
        <div class="container">
            <div class="row">
            </div>
        </div>        
    </div> <!-- /.our-causes -->
    <footer class="main-footer">
      <div class="footer-main" style="margin-bottom: -20px;color: #FFF;background: rgb(45, 45, 48) none repeat scroll 0% 0%;">
        <div class="container">
          <div class="row" style="margin-top: 20px; margin-bottom: 10px;">
            <div class="col-md-4" style="margin-left: -30px;width:13%">
              <div class="footer-col" style="margin-bottom: 40px;">
                <h4 class="footer-title"  style="font-size: 15px;">Main Office</h4>
              </div>
              <div class="footer-col">
                <h4 class="footer-title" style="font-size: 15px;">Branch Offices</span></h4>
              </div>
            </div>
            <div class="col-md-4" style="width:75%">
              <div class="footer-col">
                <div class="footer-col">
                  <div class="col-md-3 col-sm-6" style="width:100%;margin-bottom:10px">
                    <div class="footer-content">
                      <p>
                        Palmerah Utara III/1A Jakarta Barat 11480
                      </p>
                      <p>
                        Ph: 021 5481072      Fax: 021 53676355
                      </p>
                      <p>
                        Email: altraman@outlook.co.id
                      </p>
                    </div>
                  </div>
                </div> 
                <div class="footer-col">
                  <div class="col-md-3 col-sm-6" style="width:33%;">
                    <div class="cause-details">
                      <strong>Jakarta Kota</strong><br>
                      <p style="font-size: 11px;">Jl Pinangsia Raya 111 Jakarta 11110</p>
                      <p style="font-size: 11px;">Ph: 021 6262117, 6244778 & Fax: 021 6905527</p>
                    </div>
                  </div> 
                  <div class="col-md-3 col-sm-6" style="width:33%;">
                    <div class="cause-details">
                      <strong>Surabaya</strong><br>
                      <p style="font-size: 11px;">Jl Gembong Sawah Barat No. 46</p>
                      <p style="font-size: 11px;">Ph: 031 3722000, 3726888 & Fax: 031 3715646</p>
                    </div>
                  </div> 
                  <div class="col-md-3 col-sm-6" style="width:33%; ">
                    <div class="cause-details">
                      <strong>Pekanbaru</strong><br>
                      <p style="font-size: 11px;">Jl Soekarno Hatta-Komplek Tm Malibu B11-B12</p>
                      <p style="font-size: 11px;">Ph/Fax: 0761 571629</p>
                    </div>
                  </div> 
                  <div class="col-md-3 col-sm-6" style="width:33%; ">
                    <div class="cause-details">
                      <strong>Bandung</strong><br>
                      <p style="font-size: 11px;">Jl Komplek Kopo Permai III F6/4A</p>
                      <p style="font-size: 11px;">Ph: 022 5432909, 5432910 & Fax: 022 5424675</p>
                    </div>
                  </div> 
                  <div class="col-md-3 col-sm-6" style="width:33%;">
                    <div class="cause-details">
                      <strong>Medan</strong><br>
                      <p style="font-size: 11px;">Jl Sun Yat Sen No. 2E</p>
                      <p style="font-size: 11px;">Ph: 061 7351670, 7349371 & Fax: 061 7351670</p>
                    </div>
                  </div> 
                  <div class="col-md-3 col-sm-6" style="width:33%;">
                    <div class="cause-details">
                      <strong>Bandar Lampung</strong><br>
                      <p style="font-size: 11px;">Jl Raya Candimas No. 1042</p>
                      <p style="font-size: 11px;">Ph: 0721 91788, 91040 & Fax: 0721 91426</p>
                    </div>
                  </div> 
                </div>
             </div>      
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
          <div class="container text-right" style="text-align: center;">
              <p style="font-size: 11px;">© 2007 Altraman. All Right Reserved</p>
          </div>
      </div>
    </footer> <!-- main-footer -->


    <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="margin-top: 80px; width: 600px;">
        <div class="glass">

<div class="modal-content" style="background: transparent;box-shadow: none;border: none;width: 500px;margin-left: 50px;">
          <div class="modal-header" style="background: transparent; height:50px; border-bottom: 0px solid #e5e5e5; margin-right: -40px; opacity: 1;">
            <button type="button" class="close" data-dismiss="modal" style="font-size:40px; opacity: 1;margin-top:-10"><img src="<?php echo base_url(); ?>gambar/delete.png"></button>
          </div>

          <div class="modal-body">
                <form action="php/mail2.php" class="ajax-form">
                        <div class="row" style="margin-left: -15px; margin-top: 40px;">
                            <div class="form-group col-md-12 "> 
                            </div>
                        </div>
                        <div class="row" style="margin-left: -15px;">
                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" name="Name" placeholder="Name" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;font-style: italic; border: medium none;">
                            </div>
                        </div>
                       <div class="row" style="margin-left: -15px;">
                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" name="Email" placeholder="Email" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;font-style: italic; border: medium none;">
                            </div>
                        </div>
                        <div class="row" style="margin-left: -15px;">
                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" name="Subject" placeholder="Subject" value="Nama Product" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;font-style: italic; border: medium none;">
                            </div>
                        </div>

                        <div class="row" style="margin-left: -15px;">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="Message" placeholder="Message" style="background: rgb(255, 255, 255) none repeat scroll 0% 0%;font-style: italic; border: medium none;"></textarea>
                            </div>

                        </div>
                                       
                        <div class="row"  style="margin-bottom: 40px;" >
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >Send</button>
                            </div>

                        </div>
                </form>
            
          </div>
        </div>

        </div>
      </div>

    </div> <!-- /.modal -->




  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"><\/script>')</script>
  <script type="text/javascript" src="assets/js/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.mousewheel-3.0.6.pack.js"></script>
  <script type="text/javascript" src="assets/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
  <script type="text/javascript" src="assets/js/jquery.fancybox.js?v=2.1.5"></script>
  <script type="text/javascript" src="assets/js/jquery.fancybox-media.js?v=1.0.6"></script>

    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.min1.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/js/common.js"></script>
    <script>


      $(function () {
        $('#myTab a:first').tab('show');
        $('#myTab a').click(function (e) {
          e.preventDefault();
          $(this).tab('show');
        })
      })
      $(document).ready(function() {
        $('.thumbnail').fancybox({
          openEffect  : 'none',
          closeEffect : 'none'
        });
        
        $('#myCarousel-2').carousel({
                    interval: 2500
                });               
      });
    </script>
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    </body>
</html>
