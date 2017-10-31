    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <?php foreach ($blog as $key) { ?>
                
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $key->judul;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php 
                                                         
                            echo $key->isi;
                           
                            ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <?php echo $key->penulis;?> on <?php echo $key->tanggal;?></p>
                </div>
                <hr>
                
                <?php }?>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>