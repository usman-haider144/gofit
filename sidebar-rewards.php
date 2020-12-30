<div class="col-lg-3">
    <button id="catMobButton" class="btn btn-primary d-inline-block d-lg-none catalog-filter__mobile-open">Filter rewards <i class="catalog-filter__collapse-icon icon-plus3"></i></button>
    <div class="catalog-filter__container d-none d-lg-block cat-mob-sidebar">
        <button type="button" class="d-lg-none close" id="close" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <h3 class="catalog-filter__heading">Filter results by:</h3>
        <aside class="catalog-filter__filter-set">
            

            <div class="dropdown-container">
                <div class="dropdown-button noselect">
                    <p class="catalog-filter__section-title">Country</p>
                </div>
                <div class="dropdown-list" style="display: none;">
                    <input type="search" placeholder="Search Countries" class="dropdown-search"/>
                    <ul class="catalog-filter__filters catalog-filter__filters--collapsible catalog-filter__filters--countries catalog-filter-country"></ul>
                </div>
            </div>

            <!-- <ul class="catalog-filter__filters catalog-filter__filters--collapsible catalog-filter__filters--countries">
                
            </ul> -->
            <!-- <a href="#" class="catalog-filter__collapse-trigger">
            <span class="catalog-filter__collapse-text catalog-filter__collapse-text--less" style="display: inline;">Show less <i class="catalog-filter__collapse-icon icon-minus3"></i></span>
            <span class="catalog-filter__collapse-text catalog-filter__collapse-text--more" style="display: none;">Show more <i class="catalog-filter__collapse-icon icon-plus3"></i></span>
            </a> -->
        </aside>
        <aside class="catalog-filter__filter-set">
            <p class="catalog-filter__section-title">Currency</p>
            <ul class="catalog-filter__filters catalog-filter-currency">
                <?php
                    $terms_cur = get_terms( array( 
                        'taxonomy' => 'reward-currency',
                        'hide_empty' => false,
                        'orderby' => 'post_date',
                        'order' => 'ASC',
                    ) );
                    foreach( $terms_cur as $cur ) {
                        ?>
                            <li class="catalog-filter__filter catalog-filter__filter--half">
                                <label class="catalog-filter__filter-name">
                                    <input id="checkbox-<?php echo $cur->slug; ?>" type="checkbox" aria-label="<?php echo $cur->name; ?>" class="catalog-filter__filter-box catalog-filter__filter-box--currency" value="<?php echo $cur->name; ?>">
                                    <span class="catalog-filter__filter-text"><?php echo $cur->name; ?></span>
                                </label>
                            </li>
                        <?php
                    }
                ?>
            </ul>
        </aside>
        <aside class="catalog-filter__filter-set">
            <p class="catalog-filter__section-title">Category</p>
            <ul class="catalog-filter__filters catalog-filter-category">
                <?php
                    $terms = get_terms( array( 
                        'taxonomy' => 'reward-categories',
                        'hide_empty' => false,
                        'orderby' => 'post_date',
                        'order' => 'ASC',
                    ) );
                    foreach( $terms as $t ) {
                        ?>
                        <li class="catalog-filter__filter">
                            <label class="catalog-filter__filter-name">
                                <input id="checkbox-<?php echo $t->slug; ?>" type="checkbox" aria-label="<?php echo $t->slug; ?>" class="catalog-filter__filter-box catalog-filter__filter-box--category" value="<?php echo $t->slug; ?>">
                                <span class="catalog-filter__filter-text"><?php echo $t->name; ?></span>
                            </label>
                        </li>
                        <?php
                    }
                ?>
            </ul>
        </aside>
    </div>
</div>