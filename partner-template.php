<!doctype html>
<html lang="en">

  
<?php

$site_name = $name;

?>

<?php include 'additional/head.php' ?>


    <?php include 'additional/header.php' ?>


    <section class="bg-primary-alt header-inner">
      <div class="container">
        <div class="row my-3">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="partner.html">Partner-Übersicht</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#"><?= $name ?></a>
                </li>
              </ol>
            </nav>
          </div>
        </div>

        <div class="row justify-content-center text-center">
          <div class="col-lg-9 col-xl-8">
            <h1><?= $name ?></h1>
          </div>
        </div>
        <div class="row my-6 justify-content-between">
          <div class="col-lg-7 col-xl-8 mb-3 mb-lg-0">
            <br>
            <img src="<?= $img_url ?>" alt="Image" class="rounded">
          </div>
          <div class="col-lg-4 col-xl-3">
            <div class="mb-3">
              <h6 class="mb-1">Beschreibung</h6>
              <p>
              <?= $desc ?>
              </p>
            </div>
            <div class="mb-3">
              <h6 class="mb-1">Kategorie</h6>
              <span><?= $kat ?></span>
            </div>
            <div class="mb-3">
              <h6 class="mb-1">Geleitet von:</h6>
              <span><a href="<?= $link ?>"><?= $leiter ?></a></span>
            </div>
            <div class="mb-3">
              <h6 class="mb-1">Website</h6>
              <a href="https://<?= $name ?>" target="_blank">https://<?= $name ?>/</a>
            </div>
          </div>
        </div>
      </div>
      <div class="divider">
        <img src="assets/img/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row mb-4">
          <div class="col">
            <h2>Statistiken (Stand <?= $stand ?>)</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="<?= $data_1 ?>" data-duration="3" data-grouping="true"></span>
            <span class="h6"><?= $data_1_name ?></span>
          </div>
          <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="<?= $data_2 ?>" data-duration="3" data-grouping="true"></span>
            <span class="h6"><?= $data_2_name ?></span>
          </div>
          <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="<?= $data_3 ?>" data-duration="3" data-grouping="true"></span>
            <span class="h6"><?= $data_3_name ?></span>
          </div>
          <div class="col-6 mb-3 col-lg-3 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <span class="display-4 text-primary d-block" data-countup data-start="1" data-end="<?= $data_4 ?>$" data-duration="3" data-grouping="true"></span>
            <span class="h6"><?= $data_4_name ?></span>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" data-reading-position>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <article class="article">
             
              <h1>Was steckt hinter uns?</h1>
              <br>
              <p><?= $aboutus ?>
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>


    <section class="has-divider">
      <div class="container pt-3">
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-8 col-md-10">
            <hr>
            <div class="d-flex align-items-center">
              <span class="text-small mr-1">Alle Links:</span>
              <div class="d-flex mx-2">
                  <a href="<?= $link1 ?>" class="btn btn-round btn-primary mx-1" target="_blank">
                      <img class="icon icon-sm" src="<?= $link1_img ?>" alt="<?= $link1 ?>" data-inject-svg />
                 </a>
                  <a href="<?= $link2 ?>" class="btn btn-round btn-primary mx-1" target="_blank">
                  <img class="icon icon-sm" src="<?= $link2_img ?>" alt="<?= $link2 ?>" data-inject-svg />
                </a>
                <a href="<?= $link3 ?>" class="btn btn-round btn-primary mx-1" target="_blank">
                  <img class="icon icon-sm" src="<?= $link3_img ?>" alt="<?= $link3 ?>" data-inject-svg />
                </a>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </section>

    <?php include 'additional/footer.php' ?>

  </body>


<!-- Bought by SimbaAddons -->
</html>
