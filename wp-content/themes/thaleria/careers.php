<?php
/* Template Name: Careers */
get_header();
?>

<?php
$page = get_page_by_title( 'careers' );
$content = apply_filters('the_content', $page->post_content);
echo $content;
?>
<section class="section" id="open-positions">
  <div class="container">
    <header class="section-header">
      <h1 class="h1-strong text-white">Current Open Positions</h1>
      <hr>
      <p class="lead-1 text-white">We update this list regularly, so keep an eye open <i class="far fa-smile"></i>
      </p>
    </header>
    <div class="accordion accordion-connected shadow-5" id="accordion-job">
      <div class="card">
        <h6 class="card-title-blue">
          <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-1">
            <strong class="mr-auto">Java Software Architect</strong>
            <span class="small text-lighter">Brussels, Belgium <i class="fa fa-map-marker ml-2"></i></span>
          </a>
        </h6>
        <div id="collapse-job-1" class="collapse" data-parent="#accordion-job">
          <div class="card-body">
            <p>Our client is expanding its IT development team and is
              seeking a Developer/Architect
              to provide IT software development and architecture definition services. The new team member will
              actively participate in the development of a new platform and
              contribute with fresh ideas to its success.</p>
            <hr class="w-100px">
            <p class="text-center"><a class="btn btn-lg btn-thaleria" href="careers-java-developer-architect.html"
                target="_blank" rel="noopener noreferrer">Find
                out more</a></p>
          </div>
        </div>
      </div>
      <div class="card">
        <h6 class="card-title-blue">
          <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-2">
            <strong class="mr-auto">IT Security Manager</strong>
            <span class="small text-lighter">Brussels, Belgium <i class="fa fa-map-marker ml-2"></i></span>
          </a>
        </h6>
        <div id="collapse-job-2" class="collapse" data-parent="#accordion-job">
          <div class="card-body">
            <p>Our client in the Investment Banking sector is currently seeking an experienced professional to
              manage
              their IT Security policies, standards and procedures.</p>
            <hr class="w-100px">
            <p class="text-center"><a class="btn btn-lg btn-thaleria" href="careers-IT-security-manager.html"
                target="_blank" rel="noopener noreferrer">Find
                out more</a></p>
          </div>
        </div>
      </div>
      <div class="card">
        <h6 class="card-title-blue">
          <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-3">
            <strong class="mr-auto">Data Architect</strong>
            <span class="small text-lighter">Brussels, Belgium <i class="fa fa-map-marker ml-2"></i></span>
          </a>
        </h6>
        <div id="collapse-job-3" class="collapse" data-parent="#accordion-job">
          <div class="card-body">
            <p>Our client in the Telecom sector is looking for a Data Architect to manage the enterprise information
              model, their data governance principles and
              their IT & data architecture.</p>
            <hr class="w-100px">
            <p class="text-center"><a class="btn btn-lg btn-thaleria" href="careers-data-architect.html"
                target="_blank" rel="noopener noreferrer">Find
                out more</a></p>
          </div>
        </div>
      </div>
      <div class="card">
        <h6 class="card-title-blue">
          <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-4">
            <strong class="mr-auto">Data Warehouse Architect</strong>
            <span class="small text-lighter">Brussels, Belgium <i class="fa fa-map-marker ml-2"></i></span>
          </a>
        </h6>
        <div id="collapse-job-4" class="collapse" data-parent="#accordion-job">
          <div class="card-body">
            <p>Our client in the Telecom sector is looking for a Data Warehouse Architect to take charge of
              designing data warehouse solutions that support their
              company in its business intelligence and advanced analytics needs.</p>
            <hr class="w-100px">
            <p class="text-center"><a class="btn btn-lg btn-thaleria" href="careers-data-warehouse-architect.html"
                target="_blank" rel="noopener noreferrer">Find
                out more</a></p>
          </div>
        </div>
      </div>
      <div class="card">
        <h6 class="card-title-blue">
          <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-5">
            <strong class="mr-auto">Data Scientist</strong>
            <span class="small text-lighter">Brussels, Belgium <i class="fa fa-map-marker ml-2"></i></span>
          </a>
        </h6>
        <div id="collapse-job-5" class="collapse" data-parent="#accordion-job">
          <div class="card-body">
            <p>For our client in the Telecom sector, you will be part of a centralized team of Data Scientists
              that is supporting different business units within the company. You will transform data into
              actionable
              insights that drive operational processes or influence strategic decisions.</p>
            <hr class="w-100px">
            <p class="text-center"><a class="btn btn-lg btn-thaleria" href="careers-data-scientist.html"
                target="_blank" rel="noopener noreferrer">Find
                out more</a></p>
          </div>
        </div>
      </div>
      <div class="card">
        <h6 class="card-title-blue">
          <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-job-6">
            <strong class="mr-auto">Frontend Developer</strong>
            <span class="small text-lighter">Brussels, Belgium <i class="fa fa-map-marker ml-2"></i></span>
          </a>
        </h6>
        <div id="collapse-job-6" class="collapse" data-parent="#accordion-job">
          <div class="card-body">
            <p>Our client is currently looking for Frontend Developers with a good knowledge of
              JavaScript and Angular and/or React to work on mutliple different projects.</p>
            <hr class="w-100px">
            <p class="text-center"><a class="btn btn-lg btn-thaleria" href="careers-frontend-developer.html"
                target="_blank" rel="noopener noreferrer">Find
                out more</a></p>
          </div>
        </div>
      </div>
</section>
<?php
get_footer();
?>
