<?php 
$this->layout = "./layouts/main_layout.php";
$this->section_title = Label::inicio;
$this->active = substr_replace($this->active, "1", -1, 1);
$content = function(){ ?>

<script src="<?= Settings::WEB_HOST_URL ?>assets/vendor/jquery-sparkline/jquery-sparkline.js" type="text/javascript"></script>
<script>
    $(function(){        
        var sparklineBarDashData = [5, 6, 7, 2, 0, 4 , 2, 4, 2, 0, 4 , 2, 4, 2, 0, 4];
        var sparklineBarDashOptions = {
		type: 'bar',
		width: '80',
		height: '55',
		barColor: '#0088cc',
		negBarColor: '#B20000'
	};
        $("#sparklineBarDash").sparkline(sparklineBarDashData, sparklineBarDashOptions); 
        var sparklineLineDashData = [15, 16, 17, 19, 10, 15, 13, 12, 12, 14, 16, 17];
        var sparklineLineDashOptions = {
		type: 'line',
		width: '80',
		height: '55',
		lineColor: '#0088cc'
	};

	$("#sparklineLineDash").sparkline(sparklineLineDashData, sparklineLineDashOptions);
    });
    </script>
<!-- start: page -->
<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="row">
            <div class="col-md-12 col-lg-6 col-xl-3">
                <section class="panel panel-featured-left panel-featured-primary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title"><?= Label::mensajes ?></h4>
                                    <div class="info">
                                        <strong class="amount">1281</strong>
                                        <span class="text-primary">(14 <?= Label::sin_leer ?>)</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <section class="panel panel-featured-left panel-featured-secondary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-secondary">
                                    <i class="fa fa-usd"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title"><?= Label::compras ?></h4>
                                    <div class="info">
                                        <strong class="amount">$ 14,890.30</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <section class="panel panel-featured-left panel-featured-tertiary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-tertiary">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title"><?= Label::eventos_esta_semana ?></h4>
                                    <div class="info">
                                        <strong class="amount">38</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a class="text-muted text-uppercase"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-3">
                <section class="panel panel-featured-left panel-featured-quartenary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-quartenary">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title"><?= Label::visitas_perfil_hoy ?></h4>
                                    <div class="info">
                                        <strong class="amount">3765</strong>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>    
<div class="row">
    <div class="col-xl-3 col-lg-6">
        <section class="panel panel-transparent">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>
                    
                <h2 class="panel-title"><?= Label::mi_perfil ?></h2>
            </header>
            <div class="panel-body">
                <section class="panel panel-group">
                    <header class="panel-heading bg-primary">
                        
                        <div class="widget-profile-info">
                            <div class="profile-picture">
                                <img src="assets/images/!logged-user.jpg">
                            </div>
                            <div class="profile-info">
                                <h4 class="name text-weight-semibold">John Doe</h4>
                                <h5 class="role">Administrator</h5>
                                <div class="profile-footer">
                                    <a href="#">(<?= Label::editar_perfil ?>)</a>
                                </div>
                            </div>
                        </div>
                            
                    </header>
                    <div id="accordion">
                        <div class="panel panel-accordion panel-accordion-first">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                                        <i class="fa fa-check"></i> <?= Label::mis_ultimos_eventos ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1One" class="accordion-body collapse in">
                                <div class="panel-body">
                                    <ul class="simple-user-list mb-xlg">
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joseph Doe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joseph Doe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-accordion">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                                        <i class="fa fa-comment"></i> <?= Label::ultimos_mensajes ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Two" class="accordion-body collapse">
                                <div class="panel-body">
                                    <ul class="simple-user-list mb-xlg">
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joseph Doe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joseph Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                        <li>
                                            <figure class="image rounded">
                                                <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                                            </figure>
                                            <span class="title">Joseph Doe Junior</span>
                                            <span class="message">Lorem ipsum dolor sit.</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                    
            </div>
        </section>
    </div>
    <div class="col-xl-3 col-lg-6">
        <section class="panel panel-transparent">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>
                    
                <h2 class="panel-title"><?= Label::estadisticas ?></h2>
            </header>
            <div class="panel-body">
                <section class="panel">
                    <div class="panel-body">
                        <div class="small-chart pull-right" id="sparklineBarDash"></div>
                        <div class="h4 text-weight-bold mb-none">488</div>
                        <p class="text-xs text-muted mb-none"><?= Label::promedio_visitas_diarias ?></p>
                    </div>
                </section>
                <section class="panel">
                     <div class="panel-body">
                        <div class="small-chart pull-right" id="sparklineLineDash"></div>
                        <div class="h4 text-weight-bold mb-none">12</div>
                        <p class="text-xs text-muted mb-none"><?= Label::eventos ?></p>
                    </div>
                </section>
            </div>
        </section>
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>
                    
                <h2 class="panel-title">
                    <span class="label label-primary label-sm text-weight-normal va-middle mr-sm">198</span>
                    <span class="va-middle"><?= Label::a_quien_sigo ?></span>
                </h2>
            </header>
            <div class="panel-body">
                <div class="content">
                    <ul class="simple-user-list">
                        <li>
                            <figure class="image rounded">
                                <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle">
                            </figure>
                            <span class="title">Joseph Doe Junior</span>
                            <span class="message truncate">Lorem ipsum dolor sit.</span>
                        </li>
                        <li>
                            <figure class="image rounded">
                                <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle">
                            </figure>
                            <span class="title">Joseph Junior</span>
                            <span class="message truncate">Lorem ipsum dolor sit.</span>
                        </li>
                        <li>
                            <figure class="image rounded">
                                <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle">
                            </figure>
                            <span class="title">Joe Junior</span>
                            <span class="message truncate">Lorem ipsum dolor sit.</span>
                        </li>
                    </ul>
                    <hr class="dotted short">
                    <div class="text-right">
                        <a class="text-uppercase text-muted" href="#">(<?= Label::ver_todo ?>)</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-xl-6 col-lg-12">
        <section class="panel">
            <header class="panel-heading panel-heading-transparent">
                <div class="panel-actions">
                    <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
                    <a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
                </div>
                    
                <h2 class="panel-title"><?= Label::proximos_eventos ?></h2>
            </header>
            <div class="panel-body">
                <div class="timeline timeline-simple mt-xlg mb-md">
                    <div class="tm-body">
                        <div class="tm-title">
                            <h3 class="h5 text-uppercase">November 2013</h3>
                        </div>
                        <ol class="tm-items">
                            <li>
                                <div class="tm-box">
                                    <p class="text-muted mb-none">7 months ago.</p>
                                    <p>
                                        It's awesome when we find a good solution for our projects, Porto Admin is <span class="text-primary">#awesome</span>
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="tm-box">
                                    <p class="text-muted mb-none">7 months ago.</p>
                                    <p>
                                        Checkout! How cool is that!
                                    </p>
                                    <div class="thumbnail-gallery">
                                        <a class="img-thumbnail lightbox" href="assets/images/projects/project-4.jpg" data-plugin-options='{ "type":"image" }'>
                                            <img class="img-responsive" width="215" src="assets/images/projects/project-4.jpg">
                                            <span class="zoom">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- end: page -->
<?php };
