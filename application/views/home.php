    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                <?php foreach ($blog->result() as $key) { ?>
                
                <div class="post-preview">
                    <a href="<?php echo base_url('index.php/blog/readmore/'.$key->id) ?>">
                        <h2 class="post-title">
                            <?php echo $key->judul;?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php 
                                                         
                            $artikel = $key->isi;
                            $potong = substr($artikel,0,300);
                            echo $potong;
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