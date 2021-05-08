<?php 
include '../../controllers/produits/cathegorieProd.php';
include '../../controllers/produits/animalProdController.php';

$cathProd = new CathProdController();
$animalProd = new AnimalProdController();
?>
<?php require './header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Blog</li>
    </ol>
  </div>
</nav>

<section class="blog-page-section">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
            <img src="image/others/blog-1.jpg" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
              <h3 class="blog-title"> <a href="blog-details.html">Blog image post </a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted by : </span>
                  admin
                </span>
              </div>

            </header>
            <article>
              <h3 class="d-none sr-only">blob-article</h3>
              <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                augue
                condimentum
                rhoncus.</p>
            </article>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-details.html" class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
            <img src="image/others/blog-2.jpg" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
              <h3 class="blog-title"> <a href="blog-details.html">Blog image post </a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted by : </span>
                  admin
                </span>
              </div>

            </header>
            <article>
              <h3 class="d-none sr-only">blob-article</h3>
              <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                augue
                condimentum
                rhoncus.</p>
            </article>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-details.html" class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
            <img src="image/others/blog-3.jpg" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
              <h3 class="blog-title"> <a href="blog-details.html">Blog image post </a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted by : </span>
                  admin
                </span>
              </div>

            </header>
            <article>
              <h3 class="d-none sr-only">blob-article</h3>
              <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                augue
                condimentum
                rhoncus.</p>
            </article>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-details.html" class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
            <img src="image/others/blog-4.jpg" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
              <h3 class="blog-title"> <a href="blog-details.html">Blog image post </a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted by : </span>
                  admin
                </span>
              </div>

            </header>
            <article>
              <h3 class="d-none sr-only">blob-article</h3>
              <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                augue
                condimentum
                rhoncus.</p>
            </article>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-details.html" class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
            <img src="image/others/blog-3.jpg" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
              <h3 class="blog-title"> <a href="blog-details.html">Blog image post </a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted by : </span>
                  admin
                </span>
              </div>

            </header>
            <article>
              <h3 class="d-none sr-only">blob-article</h3>
              <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                augue
                condimentum
                rhoncus.</p>
            </article>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-details.html" class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 mb--30">
        <div class="blog-post">
          <a href="blog-details.html" class="blog-image">
            <img src="image/others/blog-1.jpg" alt="">
          </a>
          <div class="blog-content mt--15 text-center">
            <header>
              <h3 class="blog-title"> <a href="blog-details.html">Blog image post </a></h3>
              <div class="post-meta">
                <span class="post-author">
                  <i class="fas fa-user"></i>
                  <span class="text-gray">Posted by : </span>
                  admin
                </span>
              </div>

            </header>
            <article>
              <h3 class="d-none sr-only">blob-article</h3>
              <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu
                augue
                condimentum
                rhoncus.</p>
            </article>
            <div class="blog-btn pb--10 pt--10">
              <a href="blog-details.html" class="btn btn-rounded btn-outlined--primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt--20 mb--20">
      <div class="pagination-widget">
        <div class="site-pagination">
          <a href="#" class="single-pagination">|&lt;</a>
          <a href="#" class="single-pagination">&lt;</a>
          <a href="#" class="single-pagination active">1</a>
          <a href="#" class="single-pagination">2</a>
          <a href="#" class="single-pagination">&gt;</a>
          <a href="#" class="single-pagination">&gt;|</a>
        </div>
      </div>

    </div>
  </div>
</section>
<?php require 'footer.php'; ?>