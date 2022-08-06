<!-- start menubar area for homepage -->
<section class="menubar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-bg">
                    <nav class="navbar p-0">
                    <?php get_template_part('components/header/nav-brand'); ?>
                    <?php get_template_part('components/header/nav-menu'); ?>
                    <?php get_template_part('components/header/nav-button'); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end menubar area -->

<!-- start Search modal area -->
<div class="inner-page modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">search here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="search-area">
                    <input type="search" placeholder="search..." class="inputs">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Search modal area -->

