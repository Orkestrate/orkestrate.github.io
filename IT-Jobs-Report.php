<?php include 'header.php'; ?>

<html>
<head>
<style>
.chart {
  width: 100%; 
  min-height: 400px;
}
.row {
  margin:0 !important;
}
</style>
</head>
<body>

    <!-- Start page-top-banner section -->
    <section class="page-top-banner section-gap-full relative" data-stellar-background-ratio="0.5">
        <div class="overlay overlay-bg"></div>
        <div class="container">
                <div class="col-lg-12 text-center">
                    <h1>IT Jobs Report</h1>
                </div>
        </div>
    </section>
    <!-- End about-top-banner section -->

    <!-- Start blog-lists section -->
<div class="custom-container container" style="background:white;padding:0;">
<div class="jumbotron text-center" style="background:white">	
<?php include 'IT-Jobs-Report/latest.html'; ?>	
</div>
</div>  
    <!-- End blog-lists section -->
</body>

</html>

<?php include 'footer.php'; ?>
