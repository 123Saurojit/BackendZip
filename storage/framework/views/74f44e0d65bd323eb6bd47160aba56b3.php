<?php

    $abUrl = request()->url();

    $phUrl = url('/images/logos/logo-sq.png');

    $desc = "Fashion Magazine - Beauty Tips, Fashion Trends, & Celebrity News - ELLE";

    $titleImg = url('/images/logos/favicon.ico');

?>

<meta name="description" content="<?php echo e(isset($post) ? $post->description : $desc); ?>">
<meta name="keywords"
    content="<?php echo e(isset($post) ? $post->keywords : 'fashion, beauty, celebrity news, culture, store guide'); ?>">

<!-- Open Graph Meta -->
<meta property="og:url" content="<?php echo e($abUrl); ?>">
<meta property="og:locale" content="en_US">
<meta property="og:type" content="article">
<meta property="article:author" content="">
<meta property="article:publisher" content="">
<meta property="article:section" content="Cover Feature">
<meta property="og:title" content="<?php echo e(isset($post) ? $post->title : $desc); ?>">
<meta property="og:description" content="<?php echo e(isset($post) ? $post->description : $desc); ?>">
<meta property="og:image" content="<?php echo e(isset($post) ? url($post->thumbnail) : $phUrl); ?>">
<meta property="og:image:secure_url" content="<?php echo e(isset($post) ? url($post->thumbnail) : $phUrl); ?>">
<meta property="og:site_name" content="<?php echo e(env('APP_NAME')); ?>">



<!-- Twitter Meta -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">
<meta name="twitter:title" content="<?php echo e(isset($post) ? $post->title : $desc); ?>">
<meta name="twitter:description" content="<?php echo e(isset($post) ? $post->description : $desc); ?>">
<meta name="twitter:image" content="<?php echo e(isset($post) ? url($post->thumbnail) : $phUrl); ?>">



<link rel="canonical" href="<?php echo e($abUrl); ?>">


<link rel="icon" href="<?php echo e($titleImg); ?>">

<link rel="apple-touch-icon" href="<?php echo e($titleImg); ?>">



<script type="application/ld+json" class="yoast-schema-graph">

    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "<?php echo e(env('APP_NAME')); ?>",
        "url": "<?php echo e($abUrl); ?>",
        "description": " <?php echo e($desc); ?> ",
        "publisher": {
          "@type": "Organization",
          "name": "<?php echo e(env('APP_NAME')); ?>",
          "logo": {
            "@type": "ImageObject",
            "url": "<?php echo e($phUrl); ?>"
          }
        },
        "potentialAction": {
          "@type": "SearchAction",
          "target": "<?php echo e($abUrl); ?>/search?search={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      }
      
    </script>
<?php /**PATH C:\Users\DESKTOP\Desktop\Elle Laravel Blog\resources\views/pages/layouts/seo.blade.php ENDPATH**/ ?>