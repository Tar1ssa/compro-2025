<!-- Page Title -->
<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';
$queryblogdetails = mysqli_query($koneksi, "SELECT categories.name AS category_name, blog.* FROM blog
 JOIN categories ON categories.id = blog.id_category WHERE blog.id='$id'");
$rowblogdetails = mysqli_fetch_assoc($queryblogdetails);

$querytag = mysqli_query($koneksi, "SELECT tags FROM blog WHERE id='$id'");
$rowtag = mysqli_fetch_all($querytag, MYSQLI_ASSOC);

$queryblogrecent = mysqli_query($koneksi, "SELECT categories.name AS category_name, blog.* FROM blog
 JOIN categories ON categories.id = blog.id_category ORDER BY blog.id DESC LIMIT 5");
$rowblogrecent = mysqli_fetch_all($queryblogrecent, MYSQLI_ASSOC);



?>

<div class="page-title accent-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog Details</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="index.html">Home</a></li>
                <li class="current">Blog Details</li>
            </ol>
        </nav>
    </div>
</div><!-- End Page Title -->

<div class="container">
    <div class="row">

        <div class="col-lg-8">

            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <div class="container">

                    <article class="article">

                        <div class="post-img">
                            <img src="admin/uploads/blog/<?php echo $rowblogdetails['image']; ?>" alt=""
                                class="img-fluid">
                        </div>

                        <h2 class="title"><?php echo $rowblogdetails['title']; ?></h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="blog-details.html"><?php echo $rowblogdetails['writer']; ?></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time
                                            datetime="2020-01-01"><?php echo date("M d", strtotime($rowblogdetails['created_at'])) . "," .
                                                                        date("Y", strtotime($rowblogdetails['created_at'])) ?></time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-details.html">12 Comments</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">

                            <?php echo $rowblogdetails['content']; ?>


                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#"><?php echo $rowblogdetails['id_category'] ?></a></li>
                            </ul>

                            <?php
                            $tag = json_decode($rowblogdetails['tags'], true);
                            ?>
                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <?php foreach ($tag as $valuetags) { ?>
                                    <li><a href="#"><?php
                                                    echo $valuetags['value'] ?></a></li>
                                <?php } ?>

                            </ul>
                        </div><!-- End meta bottom -->

                    </article>

                </div>
            </section><!-- /Blog Details Section -->

            <!-- Blog Comments Section -->
            <!-- <section id="blog-comments" class="blog-comments section">

                <div class="container">

                    <h4 class="comments-count">8 Comments</h4>

                    <div id="comment-1" class="comment">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-1.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i
                                            class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan,2022</time>
                                <p>
                                    Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut
                                    sapiente quis molestiae est qui cum soluta.
                                    Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                                </p>
                            </div>
                        </div>
                    </div>

            <div id="comment-2" class="comment">
                <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-2.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i>
                                Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                            Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe.
                            Officiis illo ut beatae.
                        </p>
                    </div>
                </div>

                <div id="comment-reply-1" class="comment comment-reply">
                    <div class="d-flex">
                        <div class="comment-img"><img src="assets/img/blog/comments-3.jpg" alt=""></div>
                        <div>
                            <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i>
                                    Reply</a></h5>
                            <time datetime="2020-01-01">01 Jan,2022</time>
                            <p>
                                Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur
                                ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut
                                est. Eum officiis sed repellat maxime vero nisi natus. Amet nesciunt nesciunt
                                qui illum omnis est et dolor recusandae.

                                Recusandae sit ad aut impedit et. Ipsa labore dolor impedit et natus in porro
                                aut. Magnam qui cum. Illo similique occaecati nihil modi eligendi. Pariatur
                                distinctio labore omnis incidunt et illum. Expedita et dignissimos distinctio
                                laborum minima fugiat.

                                Libero corporis qui. Nam illo odio beatae enim ducimus. Harum reiciendis error
                                dolorum non autem quisquam vero rerum neque.
                            </p>
                        </div>
                    </div>

                    <div id="comment-reply-2" class="comment comment-reply">
                        <div class="d-flex">
                            <div class="comment-img"><img src="assets/img/blog/comments-4.jpg" alt=""></div>
                            <div>
                                <h5><a href="">Sianna Ramsay</a> <a href="#" class="reply"><i
                                            class="bi bi-reply-fill"></i> Reply</a></h5>
                                <time datetime="2020-01-01">01 Jan,2022</time>
                                <p>
                                    Et dignissimos impedit nulla et quo distinctio ex nemo. Omnis quia dolores
                                    cupiditate et. Ut unde qui eligendi sapiente omnis ullam. Placeat porro est
                                    commodi est officiis voluptas repellat quisquam possimus. Perferendis id
                                    consectetur necessitatibus.
                                </p>
                            </div>
                        </div>

                    </div>End comment reply #2

                </div>

            </div>

            <div id="comment-3" class="comment">
                <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-5.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Nolan Davidson</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i>
                                Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                            Distinctio nesciunt rerum reprehenderit sed. Iste omnis eius repellendus quia nihil
                            ut accusantium tempore. Nesciunt expedita id dolor exercitationem aspernatur aut
                            quam ut. Voluptatem est accusamus iste at.
                            Non aut et et esse qui sit modi neque. Exercitationem et eos aspernatur. Ea est
                            consequuntur officia beatae ea aut eos soluta. Non qui dolorum voluptatibus et optio
                            veniam. Quam officia sit nostrum dolorem.
                        </p>
                    </div>
                </div>

            </div>

            <div id="comment-4" class="comment">
                <div class="d-flex">
                    <div class="comment-img"><img src="assets/img/blog/comments-6.jpg" alt=""></div>
                    <div>
                        <h5><a href="">Kay Duggan</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i>
                                Reply</a></h5>
                        <time datetime="2020-01-01">01 Jan,2022</time>
                        <p>
                            Dolorem atque aut. Omnis doloremque blanditiis quia eum porro quis ut velit tempore.
                            Cumque sed quia ut maxime. Est ad aut cum. Ut exercitationem non in fugiat.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        </section> -->

            <!-- Comment Form Section -->


        </div>

        <div class="col-lg-4 sidebar">

            <div class="widgets-container">

                <!-- Blog Author Widget -->

                <!--/Blog Author Widget -->

                <!-- Search Widget -->
                <div class="search-widget widget-item">

                    <h3 class="widget-title">Search</h3>
                    <form action="">
                        <input type="text">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>

                </div>
                <!--/Search Widget -->

                <!-- Recent Posts Widget -->
                <div class="recent-posts-widget widget-item">

                    <h3 class="widget-title">Recent Posts</h3>
                    <?php foreach ($rowblogrecent as $keyblogrecent) { ?>
                        <div class="post-item">
                            <h4><a
                                    href="?page=blog-detail&id=<?php echo $keyblogrecent['id'] ?>"><?php echo $keyblogrecent['title'] ?></a>
                            </h4>
                            <time
                                datetime="2020-01-01"><?php echo date("M d", strtotime($rowblogdetails['created_at'])) . "," .
                                                            date("Y", strtotime($rowblogdetails['created_at'])) ?></time>
                        </div><!-- End recent post item-->

                    <?php } ?>


                </div>
                <!--/Recent Posts Widget -->

                <!-- Tags Widget -->
                <div class="tags-widget widget-item">

                    <h3 class="widget-title">Tags</h3>
                    <ul>
                        <li><a href="#">App</a></li>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">Studio</a></li>
                        <li><a href="#">Smart</a></li>
                        <li><a href="#">Tips</a></li>
                        <li><a href="#">Marketing</a></li>
                    </ul>

                </div>
                <!--/Tags Widget -->

            </div>

        </div>

    </div>
</div>