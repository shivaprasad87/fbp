<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= strip_tags($title) ?></title>
        <link rel="canonical" href="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="description" content="<?= $description ?>">
        <meta name="image" content="<?= isset($image) ? $image : "" ?>">
        <meta property="og:title" content="<?= strip_tags($title) ?>">
        <meta property="og:url" content="<?= current_url() ?>">
        <meta property="og:description" content="<?= $description ?>">
        <meta property="og:type" content="website">
        <meta property="og:image" content="<?= base_url('assets/img/logo.png'); ?>">
        <meta property="og:image:width" content="1900px" />
        <meta property="og:image:height" content="800px" />
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@FBPTweets">
        <meta name="twitter:title" content="<?= $title ?>">
        <meta name="twitter:description" content="<?= $description ?>">      
        <meta name="google-site-verification" content="HcMoEpoLRr3V3ma7TFsqXaEmzHBt5TGNVUZgYC_XJVE" />
        <link rel="author" href="Full Basket Property">
        <link rel="publisher" href="">
        <link rel="icon" href="<?= base_url('assets/img/favicon.ico') ?>" type="image/gif" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css">
       
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/all.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/line/yellow.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ionicons.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.3/css/star-rating.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/flexslider.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5a548257b885430012beaac7&product=inline-share-buttons' async='async'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,700,700i,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,600,700|Catamaran:800,900" rel="stylesheet">

         <!--Plugin CSS file with desired skin-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
    
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!--Plugin JavaScript file-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>

    
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PKLX84K');</script>
        <!-- End Google Tag Manager -->
       <!--  <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault());
        </script> -->
        <style type="text/css">
                        .fa-youtube:hover {
            color: red;
            background-color: white; 
        }
        .carousel-indicators {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 1;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
}
        </style>
        <!-- Taboola Pixel Code -->
<script type='text/javascript'>
  window._tfa = window._tfa || [];
  window._tfa.push({notify: 'event', name: 'page_view', id: 1302409});
  !function (t, f, a, x) {
         if (!document.getElementById(x)) {
            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
         }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/unip/1302409/tfa.js',
  'tb_tfa_script');
</script>
<noscript>
  <img src='https://trc.taboola.com/1302409/log/3/unip?en=page_view'
      width='0' height='0' style='display:none'/>
</noscript>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Full Basket Property",
  "url": "<?=current_url();?>",
  "logo": "<?=base_url('assets/img/logo.png')?>",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "9019000400",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "IN",
    "availableLanguage": ["en","Hindi"]
  },
  "sameAs": [
    "https://www.facebook.com/fullbasketpropertypage/",
    "https://twitter.com/fbptweets",
    "https://www.instagram.com/full_basket_property1/",
    "https://www.youtube.com/channel/UCGr-on8k7dRMKBFW-X2G05A",
    "https://www.linkedin.com/company/full-basket-property-services-pvt-ltd/",
    "https://in.pinterest.com/FullBasketPropertyOfficial/",
    "https://www.fullbasketproperty.com/"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Full Basket Property",
  "url": "<?=current_url();?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "<?=current_url();?>#showPattern{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
    {
        "@context": "https:\/\/schema.org",
        "@type": "RealEstateAgent",
        "name": "Full Basket Property Pvt Ltd.",
        "image": ["<?=base_url('assets/img/logo.png');?>"],
        "telephone": "9019000400",
        "url": "<?=base_url();?>",
        "address": { "@type": "PostalAddress", "streetAddress": "Sigma TridentNo - 11/2/1 , Hayes Road , Bengaluru Karnataka  560025", "addressLocality": "Richmond Circle", "postalCode": "560025", "addressRegion": "Bangalore", "addressCountry": "IN" },  
        "openingHoursSpecification": [
            { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "opens": "10:00", "closes": "18:30" },
            { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Sunday"], "opens": "10:00", "closes": "18:00" }
        ],
        "ContactPoint": {
            "@type": "ContactPoint",
            "contactType": "sales",
            "telephone": "+91-901-900-0400",
            "url": "<?=base_url('contact')?>",
            "email": "sales@fullbasketproperty.com",
            "areaServed": "IN",
            "contactOption": ["", "TollFree"],
            "availableLanguage": "English"
        }
    }
</script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?=current_url();?>"
      },
      "headline": "<?= $blog->title ?>",
      "image": "<?= base_url('uploads/blog_images/' . $blog->image) ?>",
      "datePublished": "<?=$blog->date_added?>",
      "dateModified": "<?=$blog->date?>",
      "author": {
        "@type": "Person",
        "name": "<?=$blog->author?>"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Full Basket Property",
        "logo": {
          "@type": "ImageObject",
          "url": "<?=base_url('assets/img/logo.png')?>"
        }
      }
    }
    </script>
    </head>
    <body class="abcd">
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKLX84K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->